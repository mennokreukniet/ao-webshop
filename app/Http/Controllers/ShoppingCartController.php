<?php

namespace App\Http\Controllers;

use App\Http\Classes\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        
        if ($request->session()->exists('products')) {
            $cart_products = $request->session()->get('products');
            $cart = new ShoppingCart($cart_products);
        } else {
            $cart = new ShoppingCart();
            $cart_products = array();        
        }

        $newdata = array( (string)$request->input('id') => (string)$request->input('amount') );
        $cart_products = $cart_products + $newdata;
        $request->session()->put('products', $cart_products);
        ShoppingCart::add($request);

        //$data = $request->session()->all();

        //$request->session()->put('key', 'value');

        //$value = $request->session()->get('key');
        //dd($data);
        //->with('cart', $request->session()->get('products'));

        return view('cart/cart', ['cart' => $request->session()->get('products')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function merge($a1, $a2) {

    $aRes = $a1;
    foreach ( array_slice ( func_get_args (), 1 ) as $aRay ) {
        foreach ( array_intersect_key ( $aRay, $aRes ) as $key => $val )
            $aRes [$key] += $val;
        $aRes += $aRay;
    }
    return $aRes;
}
}
