<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function Login()
    {
        return view('BackEnd.login');
    }
    public function Index()
    {
        return view('BackEnd.index');
    }
    public function Blank()
    {
        return view('BackEnd.blank');
    }
    public function Forgot_Password()
    {
        return view('BackEnd.forgot-password');
    }


}
