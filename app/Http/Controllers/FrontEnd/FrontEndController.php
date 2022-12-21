<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.Index');
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function detail()
    {
        return view('frontend.detail');
    }

    public function shop()
    {
        return view('frontend.shop');
    }
}

