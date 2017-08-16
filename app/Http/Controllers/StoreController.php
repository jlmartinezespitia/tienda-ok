<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;


class StoreController extends Controller
{
    public function index()
    {
    	$categories = Category::all(); //slidebar
        $products = Product::all();
    	return view('store.index', compact('products'), compact('categories'));
        
    }
    public function show($slug)
    {
    	$categories = Category::all();
        $product = Product::where('slug',$slug)->first();
    	return view('store.show', compact('product'), compact('categories'));
    }
}
