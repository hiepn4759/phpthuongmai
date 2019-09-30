<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Thời Trang</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <style type="text/css" media="screen">
        img.girl.img-responsive {
              position: relative;
              right: 47px;
        }
    </style>
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> Điện thoại: +84964681635</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> hiepn4759@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/hjep.nguyen.792"><i class="fa fa-facebook"></i></a></li>
                                
                                <li><a href="https://datvietnamtuoidep.blogspot.com/"><i class="fa fa-rss"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Việt Nam
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Hà Nội</a></li>
                                    <li><a href="#">Hồ Chí Minh</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    VND
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tiền mặt</a></li>
                                    <li><a href="#">Thẻ tín dụng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Tài Khoản</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Danh sách</a></li>

                            <?php $customer_id=Session::get('customer_id'); ?>
                                 <?php if($customer_id != NULL) {?>

                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                 <?php }else{?>
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                   
                                <?php } ?>



                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Đơn hàng</a></li> 
                                
                                <?php if($customer_id != NULL) {?>
                                
                                    <li><a href="login.html"><i class="fa fa-lock"></i> Đăng Xuất</a></li>
                            
                                <?php }else{?>

                                    <li><a href="login.html"><i class="fa fa-lock"></i> Đăng Nhập</a></li>
                                
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Sản phẩm chi tiết</a></li> 
                                        <li><a href="{{URL::to('login-check')}}">Thanh toán</a></li> 
                                        <li><a href="{{URL::to('/show-cart')}}">Đơn Hàng</a></li> 
                                         
                                    </ul>
                                </li> 
                                {{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>  --}}
                                <li><a href="/thoi-trang">Thời trang</a></li>
                                <li><a href="#">Đồng Hồ</a></li>
                                <li><a href="#">Dày Dép</a></li>
                                <li><a href="#">Túi Vi</a></li>
                                <li><a href="#">Dày dép</a></li>
                                <li><a href="/contact-us">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Tìm kiếm"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                               {{--  <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div> --}}
                                <div class="col-sm-12">
                                    <img src="{{asset('frontend/images/home/4.jpg')}}" class="girl img-responsive" alt="CHUẨN MEN CÁC CHÀNG TRAI" style="height: 400px" />
                                   {{--  <img src="{{asset('frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            <div class="item">
                                {{-- <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div> --}}
                                <div class="col-sm-12">
                                    <img src="{{asset('frontend/images/home/1.jpg')}}" class="girl img-responsive" alt="CÔ GÁI NĂNG ĐỘNG" style="height: 400px"/>
                                    {{-- <img src="{{asset('frontend/images/home/pricing.png"')}}  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                            <div class="item">
                               {{--  <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div> --}}
                                <div class="col-sm-12">
                                    <img src="{{asset('frontend/images/home/5.jpg')}}" class="girl img-responsive" alt="SNEAKER NÀO !!!" style="height: 400px"/>
                                    {{-- <img src="{{asset('frontend/images/home/pricing.png')}}" class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Thể loại</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                               <?php
                               $all_danhmuc_info = DB::table('tbl_danhmuc')
                                                    ->where('tinhtrang_danhmuc', 1)
                                                    ->get();
                                foreach($all_danhmuc_info as $v_cdanhmuc){
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="{{URL::to('/product_by_danhmuc/'.$v_cdanhmuc -> danhmuc_id)}}">{{$v_cdanhmuc->danhmuc_ten}}</a></h4>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div><!--/category-products-->
                        </div>
                        <div class="brands_products"><!--brands_products-->
                            <h2>Nhãn</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                                       $all_nhan_info = DB::table('tbl_nhan')
                                                            ->where('tinhtrang_danhmuc', 1)
                                                            ->get();
                                        foreach($all_nhan_info as $v_cnhan){ ?>

                                            <li><a href="{{URL::to('/product_by_nhan/'.$v_cnhan -> nhan_id)}}"> <span class="pull-right">{{-- {{$v_cnhan->count}} --}}</span>{{$v_cnhan->nhan_ten}}</a></li>
    

                                   <?php } ?>  
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Phạm Vi Giá</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="2000000" data-slider-step="5" data-slider-value="[200000,2000000]" id="sl2" ><br />
                                 <b class="pull-left">200000 VNĐ</b> <b class="pull-right">2000000 VNĐ</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @yield('content')
                    </div>
                </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Shop</span></h2>
                            <p>Cung cấp những sản phẩm thời trang phong phú, mới nhất</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/4.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Đồng Hồ</p>
                               {{--  <h2>24 DEC 2014</h2> --}}
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/1.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Quần Áo</p>
                               {{--  <h2>24 DEC 2014</h2> --}}
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/sliderDay.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Dày cao cấp</p>
                                {{-- <h2>24 DEC 2014</h2> --}}
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/sliderQuanAo.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Quần áo cao cấp</p>
                                {{-- <h2>24 DEC 2014</h2> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{URL::to('frontend/images/home/map.png')}}" alt="" />
                            <p>KTX B2, Học viện công nghệ bưu chính viễn thông</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Chat Online</a></li>
                                <li><a href="#">Liên hệ với chúng tôi</a></li>
                                <li><a href="#">Tình trạng đơn hàng</a></li>
                                <li><a href="#">Thay đổi địa chỉ</a></li>
                                {{-- <li><a href="#">FAQ’s</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Sản phẩm Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                              {{--   <li><a href="#">T-Shirt</a></li> --}}
                                <li><a href="#">Thời Trang Nam</a></li>
                                <li><a href="#">Thời Tràn Nữ</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Dày dép</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách đặc quyền</a></li>
                                <li><a href="#">Chính sách hoàn tiền</a></li>
                                <li><a href="#">Hệ thống thanh toán</a></li>
                                <li><a href="#">Hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Giới thiệu về người mua hàng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin công ty</a></li>
                                <li><a href="#">Nghề nghiệp</a></li>
                                <li><a href="#">Vị trí cửa hàng</a></li>
                                <li><a href="#">Chương trình liên kết</a></li>
                                <li><a href="#">Bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Nhận Email thông báo</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Nhập email...." />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nhận các bản cập nhật mới nhất từ trang web của chúng tôi...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Bản quền thuộc về © 2019 Cửa Hàng Shop </p>
                    <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="http://www.themeum.com"> Nguyen Hiep</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>