<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index()
    {
    	$all_xuatban_info = DB::table('tbl_products')
                    ->join('tbl_danhmuc', 'tbl_products.danhmuc_id', '=', 'tbl_danhmuc.danhmuc_id')
                    ->join('tbl_nhan', 'tbl_products.nhan_id', '=', 'tbl_nhan.nhan_id')
                    ->select('tbl_products.*','tbl_danhmuc.danhmuc_ten', 'tbl_nhan.nhan_ten')
                    ->where('tbl_products.tinhtrang_danhmuc', 1)
                    ->limit(9)
                    ->get();
      $quanly_xuatban_info= view('pages.home_content')
        ->with('all_xuatban_info', $all_xuatban_info);

      return view('layout')
          ->with('pages.home_content', $quanly_xuatban_info);

    	//return view('pages.home_content');
    }

    public function contact_us()
    {
    	return view('pages.contact_us');
    }
}
