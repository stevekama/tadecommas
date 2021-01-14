<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    public function shop()
    {
        return view('shop');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}
