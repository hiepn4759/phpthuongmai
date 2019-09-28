@extends('layout');
@section('content')

<?php
    foreach($all_xuatban_info as $v_cxuatban){ ?>

    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img style="height: 260px" src="{{URL::to($v_cxuatban->product_anh)}}" alt="" />
                        <h2>{{$v_cxuatban->product_gia}} VNĐ</h2>
                        <p>{{$v_cxuatban->product_name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{$v_cxuatban->product_gia}} VNĐ</h2>
                            <p>{{$v_cxuatban->product_name}}</p>
                            <a href="{{URL::to('/product_by_chitiet/'.$v_cxuatban -> product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Danh sách yêu thích</a></li>
                    <li><a href="{{URL::to('/product_by_chitiet/'.$v_cxuatban -> product_id)}}"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
                </ul>
            </div>
        </div>
    </div> 

<?php } ?>  

@endsection