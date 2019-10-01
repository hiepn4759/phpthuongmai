@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Trang chủ</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Thêm danh mục sản phẩm</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			{{-- <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Danh Muc</h2>		 --}}
		</div>

		<p class="alert alert-success">
			<?php
				$message= Session::get('message');
				if($message){
					echo $message;
					Session::put('message', null);
				}				
				

			?>			

		</p>


		<div class="box-content">
			<form class="form-horizontal" action="{{ url('/save-danhmuc') }}" method="post">
				{{ csrf_field() }}

			  <fieldset>
				
				<div class="control-group">
				  <label class="control-label" for="date01">Tên danh mục sản phẩm</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="danhmuc_ten" required="">
				  </div>
				</div>

				          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Miêu tả chi tiết</label>
				  <div class="controls">
					<textarea class="text" name="danhmuc_mieuta" rows="4" required=""></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Tình trạng danh mục</label>
				  <div class="controls">
				  	<input type="checkbox" name="tinhtrang_danhmuc" value="1">
				  </div>
				</div>

				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Thêm</button>
				  <button type="reset" class="btn">Hủy bỏ</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection