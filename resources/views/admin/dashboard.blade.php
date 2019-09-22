@extends('admin_layout')

@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Trang chủ</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Quản trị</a></li>
</ul>

<div class="row-fluid">
	
	<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
		<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
		<div class="number">854<i class="icon-arrow-up"></i></div>
		<div class="title">Lượt ghé thăm</div>
		<div class="footer">
			<a href="#">Đọc báo cáo đầy đủ</a>
		</div>	
	</div>
	<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
		<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
		<div class="number">12<i class="icon-arrow-up"></i></div>
		<div class="title">Bán hàng</div>
		<div class="footer">
			<a href="#"> Đọc báo cáo đầy đủ</a>
		</div>
	</div>
	<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
		<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
		<div class="number">10<i class="icon-arrow-up"></i></div>
		<div class="title">Đơn hàng</div>
		<div class="footer">
			<a href="#"> Đọc báo cáo đầy đủ</a>
		</div>
	</div>
	<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
		<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
		<div class="number">678<i class="icon-arrow-down"></i></div>
		<div class="title">Lượi ghé thăm</div>
		<div class="footer">
			<a href="#"> Đọc báo cáo đầy đủ</a>
		</div>
	</div>	
	
</div>		

<div class="row-fluid">
	
	<div class="span8 widget blue" onTablet="span7" onDesktop="span8">
		
		<div id="stats-chart2"  style="height:282px" ></div>
		
	</div>
	
	<div class="sparkLineStats span4 widget green" onTablet="span5" onDesktop="span4">

        <ul class="unstyled">
            
            <li><span class="sparkLineStats3"></span> 
                Số lượt xem: 
                <span class="number">781</span>
            </li>
            <li><span class="sparkLineStats4"></span>
                Trang / lượt truy cập: 
                <span class="number">2,19</span>
            </li>
            <li><span class="sparkLineStats5"></span>
                Trung bình thời lượng truy cập: 
                <span class="number">00:02:58</span>
            </li>
            <li><span class="sparkLineStats6"></span>
                Tỷ lệ thoát: <span class="number">59,83%</span>
            </li>
            <li><span class="sparkLineStats7"></span>
                Lượt truy cập mới chiếm: 
                <span class="number">70,79%</span>
            </li>
            <li><span class="sparkLineStats8"></span>
                Khách truy cập trở lại chiếm: 
                <span class="number">29,21%</span>
            </li>

        </ul>
		
		<div class="clearfix"></div>

    </div><!-- End .sparkStats -->

</div>

<div class="row-fluid hideInIE8 circleStats">
	
	<div class="span2" onTablet="span4" onDesktop="span2">
    	<div class="circleStatsItemBox yellow">
			<div class="header">Sử dụng không gian đĩa</div>
			<span class="percent">%</span>
			<div class="circleStat">
        		<input type="text" value="58" class="whiteCircle" />
			</div>		
			<div class="footer">
				<span class="count">
					<span class="number">20000</span>
					<span class="unit">MB</span>
				</span>
				<span class="sep"> / </span>
				<span class="value">
					<span class="number">50000</span>
					<span class="unit">MB</span>
				</span>	
			</div>
    	</div>
	</div>

	<div class="span2" onTablet="span4" onDesktop="span2">
    	<div class="circleStatsItemBox green">
			<div class="header">Băng thông</div>
			<span class="percent">%</span>
			<div class="circleStat">
        		<input type="text" value="78" class="whiteCircle" />
			</div>
			<div class="footer">
				<span class="count">
					<span class="number">5000</span>
					<span class="unit">GB</span>
				</span>
				<span class="sep"> / </span>
				<span class="value">
					<span class="number">5000</span>
					<span class="unit">GB</span>
				</span>	
			</div>
    	</div>
	</div>

	<div class="span2" onTablet="span4" onDesktop="span2">
    	<div class="circleStatsItemBox greenDark">
			<div class="header">Bộ nhớ</div>
			<span class="percent">%</span>
        	<div class="circleStat">
        		<input type="text" value="100" class="whiteCircle" />
			</div>
			<div class="footer">
				<span class="count">
					<span class="number">64</span>
					<span class="unit">GB</span>
				</span>
				<span class="sep"> / </span>
				<span class="value">
					<span class="number">64</span>
					<span class="unit">GB</span>
				</span>	
			</div>
    	</div>
	</div>

	<div class="span2 noMargin" onTablet="span4" onDesktop="span2">
    	<div class="circleStatsItemBox pink">
			<div class="header">Bộ xử lý CPU</div>
			<span class="percent">%</span>
        	<div class="circleStat">
        		<input type="text" value="83" class="whiteCircle" />
			</div>
			<div class="footer">
				<span class="count">
					<span class="number">64</span>
					<span class="unit">GHz</span>
				</span>
				<span class="sep"> / </span>
				<span class="value">
					<span class="number">3.2</span>
					<span class="unit">GHz</span>
				</span>	
			</div>
    	</div>
	</div>

	<div class="span2" onTablet="span4" onDesktop="span2">
    	<div class="circleStatsItemBox orange">
			<div class="header">Bộ nhớ</div>
			<span class="percent">%</span>
        	<div class="circleStat">
        		<input type="text" value="100" class="whiteCircle" />
			</div>
			<div class="footer">
				<span class="count">
					<span class="number">64</span>
					<span class="unit">GB</span>
				</span>
				<span class="sep"> / </span>
				<span class="value">
					<span class="number">64</span>
					<span class="unit">GB</span>
				</span>	
			</div>
    	</div>
	</div>

	<div class="span2" onTablet="span4" onDesktop="span2">
    	<div class="circleStatsItemBox greenLight">
			<div class="header">Bộ nhớ</div>
			<span class="percent">%</span>
        	<div class="circleStat">
        		<input type="text" value="100" class="whiteCircle" />
			</div>
			<div class="footer">
				<span class="count">
					<span class="number">64</span>
					<span class="unit">GB</span>
				</span>
				<span class="sep"> / </span>
				<span class="value">
					<span class="number">64</span>
					<span class="unit">GB</span>
				</span>	
			</div>
    	</div>
	</div>
			
</div>		
			
<div class="row-fluid">
	
	<div class="widget blue span5" onTablet="span6" onDesktop="span5">
		
		<h2><span class="glyphicons globe"><i></i></span>Biểu đồ</h2>
		
		<hr>
		
		<div class="content">
			
			<div class="verticalChart">
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>37%</span>
						</div>
					
					</div>
					
					<div class="title">Hà nội</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>16%</span>
						</div>
					
					</div>
					
					<div class="title">hồ chí minh</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>12%</span>
						</div>
					
					</div>
					
					<div class="title">hải phòng</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>9%</span>
						</div>
					
					</div>
					
					<div class="title">nam định</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>7%</span>
						</div>
					
					</div>
					
					<div class="title">nghệ an</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>6%</span>
						</div>
					
					</div>
					
					<div class="title">cao bằng</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>5%</span>
						</div>
					
					</div>
					
					<div class="title">đà nẵng</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>4%</span>
						</div>
					
					</div>
					
					<div class="title">thanh hóa</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>3%</span>
						</div>
					
					</div>
					
					<div class="title">thái bình</div>
				
				</div>
				
				<div class="singleBar">
				
					<div class="bar">
					
						<div class="value">
							<span>1%</span>
						</div>
					
					</div>
					
					<div class="title">nam định</div>
				
				</div>	
				
				<div class="clearfix"></div>
				
			</div>
		
		</div>
		
	</div><!--/span-->
	
	<div class="widget span3 red" onTablet="span6" onDesktop="span3">
		
		<h2><span class="glyphicons pie_chart"><i></i></span> Bộ trình duyệt</h2>
		
		<hr>
		
		<div class="content">
			
			<div class="browserStat big">
				<img src="{{asset('backend/img/browser-chrome-big.png')}}" alt="Chrome">
				<span>34%</span>
			</div>
			<div class="browserStat big">
				<img src="{{asset('backend/img/browser-firefox-big.png')}}" alt="Firefox">
				<span>34%</span>
			</div>
			<div class="browserStat">
				<img src="{{asset('backend/img/browser-ie.png')}}" alt="Internet Explorer">
				<span>34%</span>
			</div>
			<div class="browserStat">
				<img src="{{asset('backend/img/browser-safari.png')}}" alt="Safari">
				<span>34%</span>
			</div>
			<div class="browserStat">
				<img src="{{asset('backend/img/browser-opera.png')}}" alt="Opera">
				<span>34%</span>
			</div>	
					
			
		</div>
	</div>
	
	<div class="widget yellow span4 noMargin" onTablet="span12" onDesktop="span4">
		<h2><span class="glyphicons fire"><i></i></span>Máy chủ</h2>
		<hr>
		<div class="content">
			 <div id="serverLoad2" style="height:224px;"></div>
		</div>
	</div>

</div>

<div class="row-fluid">
	
	<div class="box black span4" onTablet="span6" onDesktop="span4">
		<div class="box-header">
			<h2><i class="halflings-icon white list"></i><span class="break"></span>Báo cáo hàng tuần</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<ul class="dashboard-list metro">
				<li>
					<a href="#">
						<i class="icon-arrow-up green"></i>                               
						<strong>92</strong>
						Bình luận mới                                    
					</a>
				</li>
			  <li>
				<a href="#">
				  <i class="icon-arrow-down red"></i>
				  <strong>15</strong>
				  Người đăng kí mới
				</a>
			  </li>
			  <li>
				<a href="#">
				  <i class="icon-minus blue"></i>
				  <strong>36</strong>
				  Bài viết mới                                    
				</a>
			  </li>
			  <li>
				<a href="#">
				  <i class="icon-comment yellow"></i>
				  <strong>45</strong>
				  Đánh giá khách hàng                                    
				</a>
			  </li>
			  <li>
				<a href="#">
				  <i class="icon-arrow-up green"></i>                               
				  <strong>112</strong>
				 Bình luận mới                                    
				</a>
			  </li>
			  <li>
				<a href="#">
				  <i class="icon-arrow-down red"></i>
				  <strong>31</strong>
				  Người đăng kí mới
				</a>
			  </li>
			  <li>
				<a href="#">
				  <i class="icon-minus blue"></i>
				  <strong>93</strong>
				  Bài viết mới                                    
				</a>
			  </li>
			  <li>
				<a href="#">
				  <i class="icon-comment yellow"></i>
				  <strong>256</strong>
				 Đánh giá mới                                    
				</a>
			  </li>
			</ul>
		</div>
	</div><!--/span-->
	
	<div class="box black span4" onTablet="span6" onDesktop="span4">
		<div class="box-header">
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Người dùng cuối</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<ul class="dashboard-list metro">
				<li class="green">
					<a href="#">
						<img class="avatar" alt="Lucas" src="{{asset('backend/img/all.jpg')}}">
					</a>
					<strong>Tên:</strong> hiepnguyen<br>
					<strong>Thời gian:</strong> Jul 25, 2018 11:09<br>
					<strong>Tình trạng:</strong> Phê duyệt             
				</li>
				<li class="yellow">
					<a href="#">
						<img class="avatar" alt="Bill" src="{{asset('backend/img/all.jpg')}}">
					</a>
					<strong>Tên:</strong> hiepnguyen<br>
					<strong>Thời gian:</strong> Jul 25, 2018 11:09<br>
					<strong>Tình trạng:</strong> Đang xử lý                               
				</li>
				<li class="red">
					<a href="#">
						<img class="avatar" alt="Jane" src="{{asset('backend/img/all.jpg')}}">
					</a>
					<strong>Tên:</strong> hiepnguyen<br>
					<strong>Thời gian:</strong> Jul 25, 2018 11:09<br>
					<strong>Tình trạng:</strong> Hủy bỏ                                  
				</li>
				<li class="blue">
					<a href="#">
						<img class="avatar" alt="Kate" src="{{asset('backend/img/all.jpg')}}">
					</a>
					<strong>Tên:</strong> hiepnguyen<br>
					<strong>Thời gian:</strong> Jul 25, 2018 11:09<br>
					<strong>Tình trạng:</strong> Đang cập nhật                                 
				</li>
			</ul>
		</div>
	</div><!--/span-->
	
	<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
		<div class="box-header">
			<h2><i class="halflings-icon white check"></i><span class="break"></span>Danh sách công việc</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<div class="todo metro">
				<ul class="todo-list">
					<li class="red">
						<a class="action icon-check-empty" href="#"></a>	
						Chạy Phone 8 App 
						<strong>Hôm nay</strong>
					</li>
					<li class="red">
						<a class="action icon-check-empty" href="#"></a>
						Thiết kế bố cục
						<strong>hôm nay</strong>
					</li>
					<li class="yellow">
						<a class="action icon-check-empty" href="#"></a>
						Thuê nhân viên
						<strong>Ngày mai</strong>
					</li>
					<li class="yellow">
						<a class="action icon-check-empty" href="#"></a>
						Chạy Phone 8 App
						<strong>Ngay mai/strong>
					</li>
					<li class="green">
						<a class="action icon-check-empty" href="#"></a>
						Thiết kế bố cục
						<strong>tuần này</strong>
					</li>
					<li class="green">
						<a class="action icon-check-empty" href="#"></a>
						Thuê nhân viên
						<strong>Tuần này</strong>
					</li>
					<li class="blue">
						<a class="action icon-check-empty" href="#"></a>
						Xây dụng bố cục
						<strong>Tháng này</strong>
					</li>
					<li class="blue">
						<a class="action icon-check-empty" href="#"></a>
						Thuê nhân viên
						<strong>Tháng này</strong>
					</li>
				</ul>
			</div>	
		</div>
	</div>

</div>

<div class="row-fluid">	

	<a class="quick-button metro yellow span2">
		<i class="icon-group"></i>
		<p>Người dùng</p>
		<span class="badge">237</span>
	</a>
	<a class="quick-button metro red span2">
		<i class="icon-comments-alt"></i>
		<p>Bình luận</p>
		<span class="badge">46</span>
	</a>
	<a class="quick-button metro blue span2">
		<i class="icon-shopping-cart"></i>
		<p>Đơn hàng</p>
		<span class="badge">13</span>
	</a>
	<a class="quick-button metro green span2">
		<i class="icon-barcode"></i>
		<p>Sản phẩm</p>
	</a>
	<a class="quick-button metro pink span2">
		<i class="icon-envelope"></i>
		<p>Tin nhắn</p>
		<span class="badge">88</span>
	</a>
	<a class="quick-button metro black span2">
		<i class="icon-calendar"></i>
		<p>Tính toán</p>
	</a>
	
	<div class="clearfix"></div>
					
</div><!--/row--> 


@endsection