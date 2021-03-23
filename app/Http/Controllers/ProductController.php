<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->get();
        $cats = Category::get();
        //  dd($products);
        return view("products")->with('products', $products)->with('cats', $cats);
    }
}