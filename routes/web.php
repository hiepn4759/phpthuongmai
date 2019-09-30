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

//view danh muc boi san pham
Route::get('/product_by_danhmuc/{danhmuc_id}', 'HomeController@product_by_danhmuc');
//view nhan voi san pham
Route::get('/product_by_nhan/{nhan_id}','HomeController@product_by_nhan');
//view product chi tiet
Route::get('/product_by_chitiet/{product_id}', 'HomeController@product_by_chitiet');


//add to cart
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart', 'CartController@update_cart');






//checkout-login

Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer_dangky','CheckoutController@customer_dangky');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-detail','CheckoutController@save_shipping_detail');

//login logout
Route::post('/customer_dangnhap','CheckoutController@customer_dangnhap');
Route::get('/customer_logout','CheckoutController@customer_logout');

//payment
Route::get('/payment', 'CheckoutController@payment');





//menu us

//thoitrang
Route::get('/thoi-trang', 'HomeController@thoi_trang');

//contact
Route::get('/contact-us', 'HomeController@contact_us');








//backend routes..................
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
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


Route::get('/dem-so-luong/{danhmuc_id}', 'DanhMucController@dem_sl_nhan');
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
//luu Product
Route::post('/save-product', 'ProductController@save_product');
//all product
Route::get('/all-product', 'ProductController@all_product');
// xu ly phan unactive product
Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
//xu ly phan active product
Route::get('/active_product/{product_id}', 'ProductController@active_product');
//xu ly phan edit product
Route::get('/edit_product/{product_id}', 'ProductController@edit_product');
//xu ly phan save nhan khi edit
Route::post('/update-product/{product_id}', 'ProductController@update_product');
//xu ly phan delete nhan
Route::get('/delete_product/{product_id}', 'ProductController@delete_product');
/*end product*/