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
        }
        
        $product = array( $request->input('id') => $request->input('amount') );

        $request->session()->put('products', $product);

        ShoppingCart::add($request);

        //$data = $request->session()->all();

        //$request->session()->put('key', 'value');

        //$value = $request->session()->get('key');
        //dd($data);

        return view('cart/cart'/*something something product total price*/);
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
}
