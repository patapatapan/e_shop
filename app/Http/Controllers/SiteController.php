<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    public function about()
    {
        return view('about');
    }

    public function index()
    {
        return view('index');
    }
    public function shop()
    {
        return view('shop');
    }

    public function blog()
    {
        return view('blog');
    }
    public function blog_details()
    {
        return view('blog_details');
    }

    public function contact()
    {
        return view('contact');
    }
    public function details()
    {
        return view('products_details');
    }
    public function login()
    {
        return view('login');
    }
    public function cart()
    {
        return view('cart');
    }
    public function elements()
    {
        return view('elements');
    }
    public function confirmations()
    {
        return view('confirmations');
    }
    public function checkout()
    {
        return view('checkout');
    }
}