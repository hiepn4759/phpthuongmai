<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DanhMucController extends Controller
{
    public function index()
    {
    	return view('admin.add_danhmuc');
    }

   	public function all_danhmuc()
   	{

   		$all_danhmuc_info = DB::table('tbl_danhmuc')->get();
   		$quanlu_danhmuc = view('admin.all_danhmuc')
   			->with('all_danhmuc_info', $all_danhmuc_info);

   		return view('admin_layout')
   				->with('all_danhmuc', $quanlu_danhmuc);

   		//return view('admin.all_danhmuc');
   	}

   	public function save_danhmuc(Request $request)
   	{
   		$data = array();
   		$data['danhmuc_id']=$request->danhmuc_id;
   		$data['danhmuc_ten']=$request->danhmuc_ten;
   		$data['tinhtrang_danhmuc']=$request->tinhtrang_danhmuc;
   		$data['danhmuc_mieuta']=$request->danhmuc_mieuta;
   		

   		DB::table('tbl_danhmuc')->insert($data);
   		Session::put('message', 'Danh muc them vao thanh cong!!');
   		return Redirect::to('/add-danhmuc');
   		// echo '<pre>';
   		// print_r($data);
   		// echo '<pre>';
   	}
}
