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

    public static function add($request, $id, $amount)
    {
        $cart_products = $request->session()->get('products');

        $cart = new ShoppingCart($cart_products);

        $item = new Item($request->input('id'), $request->input('amount'));
        
        $request->session()->push('products', $item);

        //$newdata = array( (string)$request->input('id') => (string)$request->input('amount') );
        //$cart_products = $cart_products + $newdata;
    }

    public function delete()
    {

    }

    public function getAll()
    {
    	return $this->products;
    }
}
