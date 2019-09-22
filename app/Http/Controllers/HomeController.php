<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('pages.home_content');
    }

    public function contact_us()
    {
    	return view('pages.contact_us');
    }
}
