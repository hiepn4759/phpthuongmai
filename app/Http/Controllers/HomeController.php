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

    public function thoi_trang()
    {
        $all_xuatban_info = DB::table('tbl_products')
                    ->join('tbl_danhmuc', 'tbl_products.danhmuc_id', '=', 'tbl_danhmuc.danhmuc_id')
                    ->join('tbl_nhan', 'tbl_products.nhan_id', '=', 'tbl_nhan.nhan_id')
                    ->select('tbl_products.*','tbl_danhmuc.danhmuc_ten', 'tbl_nhan.nhan_ten')
                    ->where('tbl_products.tinhtrang_danhmuc', 1)
                    ->limit(12)
                    ->get();
        $quanly_xuatban_info= view('pages.thoi_trang')
        ->with('all_xuatban_info', $all_xuatban_info);

      return view('layout')
          ->with('pages.thoi_trang', $quanly_xuatban_info);
        return view('pages.thoi_trang');
    }


    public function product_by_danhmuc($danhmuc_id)
    {
        $product_by_danhmuc = DB::table('tbl_products')
                    ->join('tbl_danhmuc', 'tbl_products.danhmuc_id', '=', 'tbl_danhmuc.danhmuc_id')
                    
                    ->select('tbl_products.*','tbl_danhmuc.danhmuc_ten')
                    ->where('tbl_products.tinhtrang_danhmuc', 1)
                    ->where('tbl_danhmuc.danhmuc_id', $danhmuc_id)
                    ->limit(18)
                    ->get();
        $quanly_by_danhmuc= view('pages.product_by_danhmuc')
        ->with('product_by_danhmuc', $product_by_danhmuc);

      return view('layout')
          ->with('pages.product_by_danhmuc', $quanly_by_danhmuc);
    }

    public function product_by_nhan($nhan_id)
    {
        $product_by_nhan = DB::table('tbl_products')
                    ->join('tbl_danhmuc', 'tbl_products.danhmuc_id', '=', 'tbl_danhmuc.danhmuc_id')
                    ->join('tbl_nhan', 'tbl_products.nhan_id', '=', 'tbl_nhan.nhan_id')
                    ->where('tbl_nhan.nhan_id', $nhan_id)
                    ->where('tbl_products.tinhtrang_danhmuc', 1)
                    ->limit(18)
                    ->get();
        $quanly_by_nhan= view('pages.product_by_nhan')
        ->with('product_by_nhan', $product_by_nhan);

      return view('layout')
          ->with('pages.product_by_nhan', $quanly_by_nhan);
    }

    public function product_by_chitiet($product_id)
    {
        $product_by_chitiet = DB::table('tbl_products')
                    ->join('tbl_danhmuc', 'tbl_products.danhmuc_id', '=', 'tbl_danhmuc.danhmuc_id')
                    ->join('tbl_nhan', 'tbl_products.nhan_id', '=', 'tbl_nhan.nhan_id')
                    ->where('tbl_products.product_id', $product_id)
                    ->where('tbl_products.tinhtrang_danhmuc', 1)                   
                    ->first();
        $quanly_by_chitiet= view('pages.product_by_chitiet')
        ->with('product_by_chitiet', $product_by_chitiet);

      return view('layout')
          ->with('pages.product_by_chitiet', $quanly_by_chitiet);
    }
}
