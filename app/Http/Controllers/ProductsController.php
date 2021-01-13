<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        # code...
        $products = Product::all();

        return view('index', compact('products'));
    }
}