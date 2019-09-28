@extends('layout');
@section('content')

<h2 class="title text-center">Sản Phẩm</h2>

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
</div><!--features_items-->

<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tshirt" data-toggle="tab">Thời trang nam</a></li>
            <li><a href="#blazers" data-toggle="tab">Thời trang nữ</a></li>
            <li><a href="#sunglass" data-toggle="tab">Dày dép</a></li>
            <li><a href="#kids" data-toggle="tab">Đồng hồ</a></li>
            
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tshirt" >

            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  style="height: 129px" src="{{URL::to('frontend/images/home/15.png')}}" alt="" />
                            <h2>200000 VNĐ</h2>
                            <p>Áo Nam Công Sở</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
             <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  style="height: 129px" src="{{URL::to('frontend/images/home/18.jpg')}}" alt="" />
                            <h2>210000 VNĐ</h2>
                            <p>Áo thun</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
             <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img style="height: 129px"  src="{{URL::to('frontend/images/home/23.jpg')}}" alt="" />
                            <h2>200000 VNĐ</h2>
                            <p>Quần jean nam</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="blazers" >
            
            
        
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  style="height: 129px" src="{{URL::to('frontend/images/home/11.jpg')}}" alt="" />
                            <h2>210000 VNĐ</h2>
                            <p>Áo trể vai tiểu thư</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  style="height: 129px" src="{{URL::to('frontend/images/home/12.jpg')}}" alt="" />
                            <h2>150000 VNĐ</h2>
                            <p>Áo nữ hot</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vao giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img style="height: 129px"  src="{{URL::to('frontend/images/home/13.jpg')}}" alt="" />
                            <h2>150000 VNĐ</h2>
                            <p>Thời trang phái đẹp</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="sunglass" >
            
            
           
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img  style="height: 129px" src="{{URL::to('frontend/images/home/22.jpg')}}" alt="" />
                            <h2>400000 VNĐ</h2>
                            <p>Adidas new 2019</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="kids" >
           
            
            
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img style="height: 129px"  src="{{URL::to('frontend/images/home/10.jpg')}}" alt="" />
                            <h2>400000 VNĐ</h2>
                            <p>Gshock GBA 800</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div class="tab-pane fade" id="poloshirt" >
            
            
            
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div><!--/category-tab-->

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