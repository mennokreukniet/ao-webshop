<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	* Defines a many-to-many relationship to categories table using the
	* product_category pivot table.
	* @return something (TODO: add return type.)
	*/
    public function categories()
    {
    	return $this->belongsToMany('App/Category', 'product_category','product_id');
    }
}
