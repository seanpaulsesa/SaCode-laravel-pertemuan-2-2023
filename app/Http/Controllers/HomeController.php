<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metod funcion index
    public function index()
     {
        return view('index');
    }

    public function profile()
    {
        return view('pages.profile');
    }


    // contact
    public function contact()
    {
        return view('pages.contact');
    }

}


