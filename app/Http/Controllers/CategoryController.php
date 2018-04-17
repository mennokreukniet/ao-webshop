<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('home', ['categories' => $categories]);
    }

    public function categoryIndex($id)
    {
        $products = Category::getProductsByCategory($id);

        $category = DB::table('categories')->where('id', $id)->first();

        return view('category/category', ['category' => $category], ['products' => $products]);
    }
}
