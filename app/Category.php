<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
	/**
	* Defines a many-to-many relationship to products table using the
	* product_category pivot table.
	* @return something (TODO: add return type.)
	*/	
	public function products()
    {
        return $this->belongsToMany('App\Product', 'product_category','category_id');
    }
}