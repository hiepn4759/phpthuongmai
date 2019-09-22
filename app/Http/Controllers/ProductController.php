<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\str_random;
session_start();

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.add_product');
    }
    
    public function save_product(Request $request)
   	{
   		$data = array();
	   		$data['product_name'] = $request->product_name;
	   		$data['danhmuc_id'] = $request->danhmuc_id;
	   		$data['nhan_id'] = $request->nhan_id;
	   		$data['product_short_mieuta']=$request->product_short_mieuta;
   			$data['product_long_mieuta']=$request->product_long_mieuta;
   			$data['product_gia']=$request->product_gia;
   			$data['product_size']=$request->product_size;
   			$data['product_color']=$request->product_color;
   			$data['tinhtrang_danhmuc'] = $request->tinhtrang_danhmuc;


   			$image = $request->file('product_anh');

   		if($image)
      {

        $image_full_name = rand() . '.' . $image->getClientOriginalExtension();       
   			// $image_name = rand(20);
   			// $ext = strtolower($image->getClientOriginalExtension());
   			// $image_full_name = $image_name.'.'.$ext;
   			 $upload_path = 'images/';
   			 $image_url = $upload_path.$image_full_name;
   			// $succsess=$image->move($upload_path, $image_full_name);
        $succsess = $image->move(public_path('images'), $image_full_name);
     		if($succsess)
          {
     				$data['product_anh'] = $image_url;

     					DB::table('tbl_products')->insert($data);
     					Session::put('message' , 'Product Them thanh cong!!');
     					return Redirect::to('/add-product');
             
     			}
        }
   				$data['product_anh'] ='';

   					DB::table('tbl_products')->insert($data);
   					Session::put('message' , 'Product Loi Image!!');
   					return Redirect::to('/add-product');  			
	 }



   public function all_product()
    {

      $all_product_info = DB::table('tbl_products')
                    ->join('tbl_danhmuc', 'tbl_products.danhmuc_id', '=', 'tbl_danhmuc.danhmuc_id')
                    ->join('tbl_nhan', 'tbl_products.nhan_id', '=', 'tbl_nhan.nhan_id')
                    ->select('tbl_products.*','tbl_danhmuc.danhmuc_ten', 'tbl_nhan.nhan_ten')
                    ->get();
      $quanly_product = view('admin.all_product')
        ->with('all_product_info', $all_product_info);

      return view('admin_layout')
          ->with('admin.all_product', $quanly_product);

      //return view('admin.all_danhmuc');
    }


    public function unactive_product($product_id)
    {
      DB::table('tbl_products')
        ->where('product_id', $product_id)
        ->update(['tinhtrang_danhmuc' => 0]);
        Session::put('message', 'Thay doi thanh cong!!');
        return Redirect::to('/all-product');
    }
    public function active_product($product_id)
    {
      DB::table('tbl_products')
        ->where('product_id', $product_id)
        ->update(['tinhtrang_danhmuc' => 1]);
        Session::put('message', 'Thay doi thanh cong!!');
        return Redirect::to('/all-product');
    }

    public function edit_product($product_id)
    {

      $product_info =DB::table('tbl_products')
              ->where('product_id', $product_id)
              ->first();

      $product_info = view('admin.edit_product')
        ->with('product_info', $product_info);

      return view('admin_layout')
          ->with('admin.edit_product', $product_info);

      // return view('admin.edit_danhmuc');
    }

    public function update_product(Request $request, $product_id)
    {
      $data = array();
      $data['product_name'] = $request->product_name;
      $data['danhmuc_id'] = $request->danhmuc_id;    
      $data['product_gia'] = $request->product_gia;   
      $data['product_size'] = $request->product_size;
      $data['product_color'] = $request->product_color;
      $data['tinhtrang_danhmuc'] = $request->tinhtrang_danhmuc;
    
      $image = $request->file('product_anh');

      if($image)
      {

        $image_full_name = rand() . '.' . $image->getClientOriginalExtension();       
        // $image_name = rand(20);
        // $ext = strtolower($image->getClientOriginalExtension());
        // $image_full_name = $image_name.'.'.$ext;
         $upload_path = 'images/';
         $image_url = $upload_path.$image_full_name;
        // $succsess=$image->move($upload_path, $image_full_name);
        $succsess = $image->move(public_path('images'), $image_full_name);
        if($succsess)
          {
            $data['product_anh'] = $image_url;
              DB::table('tbl_products')
                  ->where('product_id', $product_id)
                  ->update($data);

              Session::get('message', 'Update thanh cong');
              return Redirect::to('/all-product');            
          }
        }
          $data['product_anh'] ='';
              DB::table('tbl_products')
                  ->where('product_id', $product_id)
                  ->update($data);
              Session::get('message', 'Update thanh cong');
              return Redirect::to('/all-product');
             
    }
    

    public function delete_product($product_id)
    {
      DB::table('tbl_products')
        ->where('product_id', $product_id)
        ->delete();
      Session::get('message', 'Xoa Thanh Cong');
      return Redirect::to('/all-product');
    }
}
