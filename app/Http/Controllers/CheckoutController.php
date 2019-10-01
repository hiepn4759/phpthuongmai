<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function login_check()
    {
    	return view('pages.login');
    }

    public function customer_dangky(Request $request)
    {
    	$data=array();
    	$data['customer_name']=$request->customer_name;
    	$data['customer_email']=$request->customer_email;
    	$data['password']=md5($request->password);
    	$data['customer_phone']=$request->customer_phone;

    		$customer_id = DB::table('tbl_customer')
    						->insertGetId($data);

    						Session::put('customer_id', $customer_id);
    						Session::put('customer_name',$request->customer_name );
    						return Redirect('/checkout');
    }
    
    public function customer_dangnhap(Request $request)
    {
        $customer_email = $request->customer_email;
        $password=md5($request->password);
        $result=DB::table('tbl_customer')
                ->where('customer_email', $customer_email)
                ->first();

                if($result){
                    Session::put('customer_id', $result->customer_id);
                    return Redirect::to('/checkout');
                }else{
                    return Redirect::to('/login_check');
                }
    }

    public function checkout()
    {
    	return view('pages.checkout');
    }

    public function save_shipping_detail(Request $request)
    {
    	$data=array();
    	$data['shipping_email'] = $request->shipping_email;
    	$data['shipping_first_name'] = $request->shipping_first_name;
    	$data['shipping_last_name'] = $request->shipping_last_name;
    	$data['shipping_address'] = $request->shipping_address;
    	$data['shipping_phone'] = $request->shipping_phone;
    	$data['shipping_city'] = $request->shipping_city;

    		$shipping_id = DB::table('tbl_shipping')
    						->insertGetId($data);
    					Session::put('shipping_id', $shipping_id);
    					return Redirect::to('/payment');
   
    }

    

    public function customer_logout()
    {
    	Session::flush();
    	return Redirect::to('/');
    }


    public function payment()
    {
    	return view('pages.payment');
    }


    public function order_place(Request $request)
    {
    	$payment_gateway = $request->payment_method;


    	$pdata = array();
    	$pdata['payment_method'] = $payment_gateway;
    	$pdata['payment_status'] = 'dangxuly';
    	$payment_id=DB::table('tbl_payment')
    			->insertGetId($pdata);



    	$odata = array();
    	$odata['customer_id'] = Session::get('customer_id');
    	$odata['shipping_id'] = Session::get('shipping_id');
    	$odata['payment_id'] = $payment_id;
    	$odata['order_total'] = Cart::total();
    	$odata['order_status'] = 'dangxuly';
    	$order_id = DB::table('tbl_order')
    				->insertGetId($odata);


    	$contents = Cart::content();
    	$odata = array();

    	foreach ($contents as $v_content) {
    		$odata['order_id'] = $order_id;
    		$odata['product_id'] = $v_content->id;
    		$odata['product_name'] =$v_content->name;
    		$odata['product_price'] = $v_content->price;
    		$odata['product_sales_quantity'] = $v_content->qty;
    		
    		DB::table('tbl_order_details')
    			->insert($odata);
    	}


    	if($payment_gateway == 'tienmat')
    	{
    		Cart::destroy();
    		return view('pages.thank_order');

    	}elseif($payment_gateway == 'thecart') {
    		Cart::destroy();
    		return view('pages.thank_order');
    	}else{

    		echo 'chua chon hinh thuc thanh toan';
    	}

    }


    public function manage_order()
    {
        $all_order_info = DB::table('tbl_order')
                    ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')          
                    ->select('tbl_order.*','tbl_customer.customer_name')
                    ->get();
      $quanly_order = view('admin.manage_order')
        ->with('all_order_info', $all_order_info);

      return view('admin_layout')
          ->with('admin.manage_order', $quanly_order);
    }

}
