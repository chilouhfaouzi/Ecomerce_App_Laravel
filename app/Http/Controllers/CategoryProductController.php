<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index()
    {
        if (request()->show_numbers) {
            $limitt = request()->show_numbers;
        } else {
            $limitt = 12;
        }
        if (request()->id_cat) {
            $category = Category::where('id', request()->id_cat)->get();
            $products =  Product::where('category_id', request()->id_cat)->take($limitt)->get();
            return view("items_cats")->with('products', $products)->with('cat', $category);
        } else {
            $products =  Product::take($limitt)->get();
            return view("items_cats")->with('products', $products);
        }
    }
    public function index_post()
    {
        if (request()->show_numbers) {
            $limitt = request()->show_numbers;
        } else {
            $limitt = 12;
        }
        if (request()->id_cat) {
            $category = Category::where('id', request()->id_cat)->get();
            $products =  Product::where('category_id', request()->id_cat)->take($limitt)->get();
            return view("items_cats")->with('products', $products)->with('cat', $category);
        } else {
            $products =  Product::take($limitt)->get();
            return view("items_cats")->with('products', $products);
        }
    }
}