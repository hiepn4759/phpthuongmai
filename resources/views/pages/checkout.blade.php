@extends('layout')
@section('content')


<section id="cart_items">
		<div class="container">
			

			<div class="register-req">
				<p>Điền vào mẫu thanh toán</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Mẫu hóa đơn</p>
							<div class="form-one">
								<form action="{{url('/save-shipping-detail')}}" method="post">									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Địa chỉ email *">
									<input type="text" name="shipping_first_name" placeholder="Họ tên đầu*">
									<input type="text" name="shipping_last_name" placeholder="Họ tên cuối *">
									<input type="text" name="shipping_address" placeholder="Địa chỉ *">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại">
									<input type="text" name="shipping_city" placeholder="đất nước">
									<input type="submit" class="btn btn-danger" value="Xác nhận">
								</form>
							</div>
							
						</div>
					</div>
										
				</div>
			</div>
			
			
		</div>
	</section> <!--/#cart_items-->

@endsection