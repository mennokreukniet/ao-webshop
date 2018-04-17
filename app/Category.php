<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
	public static function getProductsByCategory($id){

		$products = DB::table('products')
            	->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                ->join('categories', 'categories.id', '=', 'product_categories.category_id')
                ->where('categories.id', '=', $id)
                ->select('products.*', 'categories.name as category_name')
                ->get();

        return $products;
	}
}
