<?php

namespace App\Http\Controllers;

use App\Http\Classes\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Classes\Item;

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

        $id     = $request->input('id');
        $amount = $request->input('amount');

        $cart = new ShoppingCart($cart_products);
        $cart->add($request, $id, $amount);


        //$this->loop($request);

        return view('cart/cart', ['cart' => $request->session()->get('products')]);
    }

    public function loop($request)
    {
        $cart_products = $request->session()->get('products');

        foreach ($cart_products as $cart_product) {
            echo $cart_product;
        }
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
