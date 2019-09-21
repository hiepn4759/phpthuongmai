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



/*Danh muc*/
//danh muc
Route::get('/add-danhmuc', 'DanhMucController@index');
// all danh muc
Route::get('/all-danhmuc', 'DanhMucController@all_danhmuc');
//luu danh muc
Route::post('/save-danhmuc', 'DanhMucController@save_danhmuc');
// xu ly phan unactive danh muc
Route::get('/unactive_danhmuc/{danhmuc_id}', 'DanhMucController@unactive_danhmuc');
//xu ly phan active danh muc
Route::get('/active_danhmuc/{danhmuc_id}', 'DanhMucController@active_danhmuc');
//xu ly phan edit danh muc
Route::get('/edit_danhmuc/{danhmuc_id}', 'DanhMucController@edit_danhmuc');
//xu ly phan save danh muc khi edit
Route::post('/update-danhmuc/{danhmuc_id}', 'DanhMucController@update_danhmuc');
//xu ly phan delete danh muc
Route::get('/delete_danhmuc/{danhmuc_id}', 'DanhMucController@delete_danhmuc');

/*End Danh muc*/


/*Nhan*/
/*begin nhan*/

Route::get('/add-nhan', 'NhanController@index');
//luu nhan
Route::post('/save-nhan', 'NhanController@save_nhan');
//all nhan
Route::get('/all-nhan', 'NhanController@all_nhan');
// xu ly phan unactive nhan
Route::get('/unactive_nhan/{nhan_id}', 'NhanController@unactive_nhan');
//xu ly phan active nhan
Route::get('/active_nhan/{nhan_id}', 'NhanController@active_nhan');
//xu ly phan edit nhan
Route::get('/edit_nhan/{nhan_id}', 'NhanController@edit_nhan');
//xu ly phan save nhan khi edit
Route::post('/update-nhan/{nhan_id}', 'NhanController@update_nhan');
//xu ly phan delete nhan
Route::get('/delete_nhan/{nhan_id}', 'NhanController@delete_nhan');

/*end nhan*/



/*products*/

Route::get('/add-product', 'ProductController@index');
//luu nhan
Route::post('/save-product', 'ProductController@save_product');
/*end product*/