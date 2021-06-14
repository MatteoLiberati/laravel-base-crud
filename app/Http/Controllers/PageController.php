<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //HOME
    public function index(){
        return view('home');
    }

}
