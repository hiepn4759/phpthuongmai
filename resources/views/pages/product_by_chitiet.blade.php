@extends('layout');
@section('content')

<div class="col-sm-9 padding-right">
	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				<img src="{{URL::to($product_by_chitiet->product_anh)}}" alt="" />
				<h3>Phóng to</h3>
			</div>
			{{-- <div id="similar-product" class="carousel slide" data-ride="carousel">
				
				  <!-- Wrapper for slides -->
				    <div class="carousel-inner">
						<div class="item active">
						  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
						  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
						  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
						</div>
						<div class="item">
						  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
						  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
						  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
						</div>
						<div class="item">
						  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
						  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
						  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
						</div>
						
					</div>

				  <!-- Controls -->
				  <a class="left item-control" href="#similar-product" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				  </a>
				  <a class="right item-control" href="#similar-product" data-slide="next">
					<i class="fa fa-angle-right"></i>
				  </a>
			</div> --}}

		</div>
		<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
				<img src="images/product-details/new.jpg" class="newarrival" alt="" />
				<h2>{{($product_by_chitiet->product_name)}}</h2>
				<p>Màu: {{$product_by_chitiet->product_color}}</p>
				<img src="images/product-details/rating.png" alt="" />

				<span>
					<span>{{($product_by_chitiet->product_gia)}}VNĐ</span>

					<form action="{{url('/add-to-cart')}}" method="post">
						{{ csrf_field() }}
						<label>Số lượng:</label>
						<input name="quantity" type="text" value="1" />
						<input type="hidden" name="product_id" value="{{$product_by_chitiet->product_id}}">
						<button type="submit" class="btn btn-fefault cart">
							<i class="fa fa-shopping-cart"></i>
							Thêm vào giỏ
						</button>
					</form>
					
				</span>

			{{-- 	<p><b>Availability:</b> In Stock</p> --}}
				<p><b>Sản Phẩm:</b> New</p>
				<p><b>Nhãn:</b>{{($product_by_chitiet->danhmuc_ten)}}</p>
				<p><b>Size:</b>{{($product_by_chitiet->product_size)}}</p>
				<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
			</div><!--/product-information-->
		</div>
	</div><!--/product-details-->
	
	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				
			
			
				<li class="active"><a href="#reviews" data-toggle="tab">Đánh giá (5)</a></li>
			</ul>
		</div>
		<div class="tab-content">
			
			
			
			
		
			
			<div class="tab-pane fade active in" id="reviews" >
				<div class="col-sm-12">
					<ul>
						<li><a href=""><i class="fa fa-user"></i>Nguyễn Hiêp</a></li>
						<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
						<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2018</a></li>
					</ul>
					<p>Sản phẩm đẹp xinh xắn.</p>
					<p><b>Đánh giá của bạn!!!</b></p>
					
					<form action="#">
						<span>
							<input type="text" placeholder="Họ tên"/>
							<input type="email" placeholder="Địa chỉ Email"/>
						</span>
						<textarea name="" ></textarea>
						<b>Giá </b> <img src="images/product-details/rating.png" alt="" />
						<button type="button" class="btn btn-default pull-right">
							Xác Nhận	
						</button>
					</form>
				</div>
			</div>
			
		</div>
	</div><!--/category-tab-->
	
	
	
</div>



@endsection