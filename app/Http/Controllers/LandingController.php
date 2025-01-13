<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function landing()
    {
        return view('landing');
    }

    //LOGIN
    public function login()
    {
        return view('login.login');
    }
}
