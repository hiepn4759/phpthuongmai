@extends('layout')
@section('content')


<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Giỏ hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
					$contents=Cart::content();
					//echo "<pre>";
					//print_r($contents);
					//echo "</pre>";
					
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ảnh</td>
							<td class="description">Tên Sản Phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td>Hoạt động</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($contents as $v_contents) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contents->options->image)}}" alt="" style="height: 50px;width: 50px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$v_contents->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{url('/update-cart')}}" method="post">
										{{ csrf_field() }}

										<input class="cart_quantity_input" type="text" name="qty" value="{{$v_contents->qty}}" autocomplete="off" size="2">
										<input type="hidden" name="rowId" value="{{$v_contents->rowId}}">
										<input type="submit" name="submit" value="update" class="btn btn-sm btn-default" style="border-left:none;padding-top:3px;">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
						<?php }?>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		
		
		<div class="paymentCont col-sm-8">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Lựa chọn phương thức thanh toán</h3>	
							
					</div>
					<form action="{{url('/order-place')}}" method="post">
						{{csrf_field()}}				
						<div >
							<input type="checkbox" name="payment_method" value="tienmat"> Thanh toán bằng tiền mặt <br>
							<input type="checkbox" name="payment_method" value="thecart"> Thanh toán bằng thẻ
						</div>

						<div class="footerNavWrap clearfix">
							
							<input type="submit" class="btn btn-success pull-left btn-fyi" value="Hoàn Thành">
						</div>
					</form>
					
				</div>
	</div>
</section><!--/#do_action-->

@endsection
