<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function index()
    {
    	return view('admin.add_danhmuc');
    }

   	public function all_danhmuc()
   	{
   		return view('admin.all_danhmuc');
   	}
}
