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
   				->with('admin.all_danhmuc', $quanlu_danhmuc);

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

   	public function unactive_danhmuc($danhmuc_id)
   	{
   		DB::table('tbl_danhmuc')
   			->where('danhmuc_id', $danhmuc_id)
   			->update(['tinhtrang_danhmuc' => 0]);
   			Session::put('message', 'Thay doi thanh cong!!');
   			return Redirect::to('/all-danhmuc');
   	}

   	public function active_danhmuc($danhmuc_id)
   	{
   		DB::table('tbl_danhmuc')
   			->where('danhmuc_id', $danhmuc_id)
   			->update(['tinhtrang_danhmuc' => 1]);
   			Session::put('message', 'Thay doi thanh cong!!');
   			return Redirect::to('/all-danhmuc');
   	}

   	public function edit_danhmuc($danhmuc_id)
   	{

   		$danhmuc_info =DB::table('tbl_danhmuc')
   						->where('danhmuc_id', $danhmuc_id)
   						->first();

   		$danhmuc_info = view('admin.edit_danhmuc')
   			->with('danhmuc_info', $danhmuc_info);

   		return view('admin_layout')
   				->with('admin.edit_danhmuc', $danhmuc_info);

   		// return view('admin.edit_danhmuc');
   	}

   	public function update_danhmuc(Request $request,$danhmuc_id)
   	{
   		$data = array();
   		$data['danhmuc_ten'] = $request->danhmuc_ten;
   		$data['danhmuc_mieuta'] = $request->danhmuc_mieuta;

   		DB::table('tbl_danhmuc')
   			->where('danhmuc_id', $danhmuc_id)
   			->update($data);

   			Session::get('message', 'Update thanh cong');
   			return Redirect::to('/all-danhmuc');
   	}

   	public function delete_danhmuc($danhmuc_id)
   	{
   		DB::table('tbl_danhmuc')
   			->where('danhmuc_id', $danhmuc_id)
   			->delete();
   		Session::get('message', 'Xoa Thanh Cong');
   		return Redirect::to('/all-danhmuc');
   	}
}
