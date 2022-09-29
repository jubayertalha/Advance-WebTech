<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function products(){
        $products=array("Product 1", "Product 2", "Product 3", "Product 4", "Product 5");
        return view('products')->with('products', $products);
    }

    public function teams(){
        return view('teams');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}