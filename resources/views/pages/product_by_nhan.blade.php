@extends('layout');
@section('content')

<h2 class="title text-center">Sản phẩm</h2>

<?php
    foreach($product_by_nhan as $v_cnhan_product){ ?>

    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img style="height: 260px" src="{{URL::to($v_cnhan_product->product_anh)}}" alt="" />
                        <h2>{{$v_cnhan_product->product_gia}} VNĐ</h2>
                        <p>{{$v_cnhan_product->product_name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{$v_cnhan_product->product_gia}} VNĐ</h2>
                            <p>{{$v_cnhan_product->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Danh sách yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
                </ul>
            </div>
        </div>
    </div> 

    <?php } ?>  
</div><!--features_items-->



<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Khuyến Nghị</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">   
               
               
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img style="height: 129px" src="{{URL::to('frontend/images/home/15.png')}}" alt="" />
                                <h2>200000 VNĐ</h2>
                                <p>Áo Nam Công Sở</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img  style="height: 129px"src="{{URL::to('frontend/images/home/10.jpg')}}" alt="" />
                            <h2>400000 VNĐ</h2>
                            <p>Gshock GBA 800</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img style="height: 129px" src="{{URL::to('frontend/images/home/22.jpg')}}" alt="" />
                            <h2>400000 VNĐ</h2>
                            <p>Adidas new 2019</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">  
                
                
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img style="height: 129px" src="{{URL::to('frontend/images/home/15.png')}}" alt="" />
                                <h2>200000 VNĐ</h2>
                                <p>Áo Nam Công Sở</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img  style="height: 129px"src="{{URL::to('frontend/images/home/10.jpg')}}" alt="" />
                            <h2>400000 VNĐ</h2>
                            <p>Gshock GBA 800</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img style="height: 129px" src="{{URL::to('frontend/images/home/22.jpg')}}" alt="" />
                            <h2>400000 VNĐ</h2>
                            <p>Adidas new 2019</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>          
    </div>
</div><!--/recommended_items-->


@endsection