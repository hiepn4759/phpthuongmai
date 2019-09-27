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

   		$qty =$request->qty;
   		$product_id=$request->product_id;
   		$product_info =DB::table('tbl_products')
		              ->where('product_id', $product_id)
		              ->first();

		$data['qty']=$qty ;	
   		$data['id']=$product_info->product_id;
   		$data['name']=$product_info->product_name; 		
   		$data['price']=$product_info->product_gia;
   		$data['weight']=$product_info->product_gia;
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

   public function delete_to_cart($rowId)
   {
   		Cart::update($rowId, 0);
   		return Redirect::to('/show-cart');
   }

   public function update_cart(Request $request)
   {
		$qty =$request->qty;
   		$rowId=$request->rowId;

   		Cart::update($rowId, $qty);
   		return Redirect::to('/show-cart');
   }
}
