<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
   public function add_to_cart(Request $request)
   {

   		$quantity=$request->quantity;
   		$product_id=$request->product_id;
   		$product_info =DB::table('tbl_products')
		              ->where('product_id', $product_id)
		              ->first();
 		
 		$data['quantity']=$quantity;	
   		$data['id']=$product_info->product_id;
   		$data['name']=$product_info->product_name; 		
   		$data['price']=$product_info->product_gia;
   			
   		$data['options']['image']=$product_info->product_anh;	
		
   		Cart::add($data);
   		
   		return Redirect::to('/show-cart');
   }

   public function show_cart()
   {
   	 $all_danhmuc_info = DB::table('tbl_danhmuc')
   	 					->where('tinhtrang_danhmuc', 1)
   	 					->get();

   	 $quanly_danhmuc = view('pages.add_to_cart')
   	 				->with('all_danhmuc_info', $all_danhmuc_info);

   	 return view('layout')
   	 		->with('pages.add_to_cart', $quanly_danhmuc);
   }
}
