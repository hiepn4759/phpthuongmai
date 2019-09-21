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
}
