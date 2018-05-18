<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    private $session;
    private $products;

    const CART = 'ShoppingCart'; //do something with this

    public function __construct($request)
    {
    	$this->session = $request->session();
    	$this->products = $this->session->has(self::CART) ? $this->session->get(self::CART) : []; 
    	// if session has cart get the cart out of the session, else create array
    	//fill $products // find out what $this->session->has does?
    }

    public function add()
    {

    }

    public function delete()
    {

    }

    public function getAll()
    {
    	if(!$this->isEmpty()){
    		return $this->items;
    	}
    }
}
