<!DOCTYPE html>
<html lang="en">


<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Quản Trị Website</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/dashboard"><span>Admin</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>Bạn Có 11 thông báo mới</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">Đăng kí người dùng mới</span>
										<span class="time">1 phút</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">Bình luận mới</span>
										<span class="time">7 phút</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">Bình luận mới</span>
										<span class="time">8 phút</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">Bình luận mới</span>
										<span class="time">16 phút</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">Đăng kí người dùng mới</span>
										<span class="time">36 phút</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">Bán 2 mặt hàng</span>
										<span class="time">1 giờ</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">Người dùng đã xóa tài khoản</span>
										<span class="time">2 giờ</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Giao dịch đã bị hủy</span>
										<span class="time">6 giờ</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">Bình luận mới</span>
										<span class="time">Hôm qua</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">Đăng kí người dùng mới</span>
										<span class="time">Hôm qua</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>Xem tất cả các thông báo</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>Bạn có 17 nhiệm vụ đang tiến hành</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">Hệ điều hành IOS</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Hệ điều hành Android</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Dự án mới</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">Quảng cáo cho Website</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Bài đăng mới</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">Xem tất cả các nhiệm vụ</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>Bạn có 9 tin nhắn mới</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('backend/img/all.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Nguyen Hiep
										     </span>
											<span class="time">
										    	6 phút
										    </span>
										</span>
                                        <span class="message">
                                            Tôi có 1 vấn đề khi nhận hàng...
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('backend/img/all.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Hiepnguyen
										     </span>
											<span class="time">
										    	56 phút
										    </span>
										</span>
                                        <span class="message">
                                            Tôi có 1 vấn đề khi nhận hàng...
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('backend/img/all.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Hiepnguyen
										     </span>
											<span class="time">
										    	3 giờ
										    </span>
										</span>
                                        <span class="message">
                                            Tôi có 1 vấn đề khi nhận hàng...
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('backend/img/all.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Hiepnguyen
										     </span>
											<span class="time">
										    	Hôm qua
										    </span>
										</span>
                                        <span class="message">
                                            Tôi có 1 vấn đề khi nhận hàng...
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('backend/img/all.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Hiepnguyen
										     </span>
											<span class="time">
										    	Hôm qua
										    </span>
										</span>
                                        <span class="message">
                                            Tôi có 1 vấn đề khi nhận hàng...
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">Xem tất cả tin nhắn</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{Session::get('admin_name')}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Cài đặt tài khoản</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i>Hồ sơ</a></li>
								<li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i>Đăng xuất</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Quan Trị</span></a></li>	

						<li><a href="{{URL::to('/all-danhmuc')}}"><i class="icon-envelope"></i><span class="hidden-tablet">Tất cả thể loại</span></a></li>

						<li><a href="{{URL::to('/add-danhmuc')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Thêm mới thể loại</span></a></li>

						<li><a href="{{URL::to('/all-nhan')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">Tất cả nhãn</span></a></li>

						<li><a href="{{URL::to('/add-nhan')}}"><i class="icon-dashboard"></i><span class="hidden-tablet">Thêm mới nhãn</span></a></li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Sản phẩm</span><span class="label label-important"> mới </span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Thêm mới sản phầm</span></a></li>
								<li><a class="submenu" href="{{URL::to('/all-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Tất cả sản phẩm</span></a></li>
								
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Slider</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Social Link</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet">Tên cửa hàng</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Giao Hàng</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Lỗi!!</h4>
					<p>Bạn cần có đoạn <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> để sử dụng nó</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
	<div id="content" class="span10">
			
			@yield('admin_content')
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3>Cài đặt</h3>
		</div>
		<div class="modal-body">
			<p>Xác nhận</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Đóng</a>
			<a href="#" class="btn btn-primary">Lưu thay đổi</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2019 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">HiepNguyen</a></span>
			<span class="hidden-phone" style="text-align:right;float:right"> <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">HiepNguyen</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>	
		<script src="{{asset('backend/js/modernizr.js')}}"></script>	
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>	
		<script src='{{asset('backend/js/fullcalendar.min.js')}}'></script>	
		<script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>
		<script src="{{asset('backend/js/excanvas.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>		
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>	
		<script src="{{asset('backend/js/counter.js')}}"></script>	
		<script src="{{asset('backend/js/retina.js')}}"></script>
		<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>


</html>
