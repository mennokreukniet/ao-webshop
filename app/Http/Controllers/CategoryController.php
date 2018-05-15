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

    /**
     * Show the selected category overview.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategory($id)
    {
        $category = Category::find($id);

        return view('category/category', ['category' => $category]);
    }
}