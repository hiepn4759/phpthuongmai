<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class NhanController extends Controller
{
    public function index()
    {
    	return view('admin.add_nhan');	
    }

    public function save_nhan(Request $request)
    {
    	$data = array();
   		$data['nhan_id']=$request->nhan_id;
   		$data['nhan_ten']=$request->nhan_ten;
   		$data['tinhtrang_danhmuc']=$request->tinhtrang_danhmuc;
   		$data['nhan_mieuta']=$request->nhan_mieuta;
   		

   		DB::table('tbl_nhan')->insert($data);
   		Session::put('message', 'Danh muc them vao thanh cong!!');
   		return Redirect::to('/add-nhan ');
    }
    public function all_nhan()
   	{

   		$all_nhan_info = DB::table('tbl_nhan')->get();
   		$quanly_nhan = view('admin.all_nhan')
   			->with('all_nhan_info', $all_nhan_info);

   		return view('admin_layout')
   				->with('admin.all_nhan', $quanly_nhan);

   		//return view('admin.all_danhmuc');
   	}

   	public function unactive_nhan($nhan_id)
   	{
   		DB::table('tbl_nhan')
   			->where('nhan_id', $nhan_id)
   			->update(['tinhtrang_danhmuc' => 0]);
   			Session::put('message', 'Thay doi thanh cong!!');
   			return Redirect::to('/all-nhan');
   	}
   	public function active_nhan($nhan_id)
   	{
   		DB::table('tbl_nhan')
   			->where('nhan_id', $nhan_id)
   			->update(['tinhtrang_danhmuc' => 1]);
   			Session::put('message', 'Thay doi thanh cong!!');
   			return Redirect::to('/all-nhan');
   	}

   	public function edit_nhan($nhan_id)
   	{

   		$nhan_info =DB::table('tbl_nhan')
   						->where('nhan_id', $nhan_id)
   						->first();

   		$nhan_info = view('admin.edit_nhan')
   			->with('nhan_info', $nhan_info);

   		return view('admin_layout')
   				->with('admin.edit_nhan', $nhan_info);

   		// return view('admin.edit_danhmuc');
   	}
   	public function update_nhan(Request $request,$nhan_id)
   	{
   		$data = array();
   		$data['nhan_ten'] = $request->nhan_ten;
   		$data['nhan_mieuta'] = $request->nhan_mieuta;

   		DB::table('tbl_nhan')
   			->where('nhan_id', $nhan_id)
   			->update($data);

   			Session::get('message', 'Update thanh cong');
   			return Redirect::to('/all-nhan');
   	}

   	public function delete_nhan($nhan_id)
   	{
   		DB::table('tbl_nhan')
   			->where('nhan_id', $nhan_id)
   			->delete();
   		Session::get('message', 'Xoa Thanh Cong');
   		return Redirect::to('/all-nhan');
   	}
}
