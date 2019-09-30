@extends('layout')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản của bạn</h2>
						<form action="{{url('/customer_dangnhap')}}" method="post">

							{{csrf_field()}}
							
							<input type="email" placeholder="Địa chỉ email" name="customer_email" required="" />
							<input type="password" placeholder="Mật khẩu" name="password" required=""/>
							
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký tài khoản mới!</h2>
						<form action="{{url('/customer_dangky')}}" method="post">
							{{csrf_field()}}
							<input type="text" placeholder="Họ tên đầy đủ" name="customer_name" required=""/>
							<input type="email" placeholder="Địa chỉ email" name="customer_email" required=""/>
							<input type="password" placeholder="Mật khẩu" name="password" required=""/>
							<input type="text" placeholder="Số điện thoại" name="customer_phone" required=""/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection