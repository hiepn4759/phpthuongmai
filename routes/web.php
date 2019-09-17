<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//frontend site...................
Route::get('/', 'HomeController@index');



//backend routes..................
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');



//danh muc

Route::get('/add-danhmuc', 'DanhMucController@index');


// all danh muc

Route::get('/all-danhmuc', 'DanhMucController@all_danhmuc');