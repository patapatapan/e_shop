<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shop()
  {
    return view('shop');
  }
   public function contact()
    {
        return view('contact');
    }
}

