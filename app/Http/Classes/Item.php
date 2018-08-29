<?php 

namespace App\Http\Classes;

class Item
{
	public $id;
	public $amount;

	function __construct($id, $amount)
	{
		$this->id 	  = $id;
		$this->amount = $amount;
	}
}