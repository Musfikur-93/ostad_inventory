<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        return view('pages.home');
    } // End of homePage


} // End of HomeController
