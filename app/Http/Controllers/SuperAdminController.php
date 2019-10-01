<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SuperAdminController extends Controller
{
    public function index()
    {
    	$this->KiemTraAdmin();
		return view('admin.dashboard');
    }

    public function logout()
    {
    	// Session::put('admin_name', null);
    	// Session::put('admin_id', null);
    	Session::flush();//xóa toàn bộ session
    	return Redirect::to('/admin');
    }
    public function KiemTraAdmin()
    {	
    	$admin_id = Session::get('admin_id');
    	if($admin_id){
    		return;
    	}else{
    		return Redirect::to('/admin')->send();
    	}
    }
   

}
