<?php

namespace App\Http\Classes;

use App\Product;

class ShoppingCart
{
    private $products;

    const CART = 'ShoppingCart';

    public function __construct($cart_products = null)
    {   	
    	$this->products = $cart_products;
    }

    public static function add($request)
    {
        $cart_products = $request->session()->get('products');

        $cart = new ShoppingCart($cart_products);

       // dd($cart);
    }

    public function delete()
    {

    }

    public function getAll()
    {
    	return $this->products;
    }
}
