@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<p class="alert alert-success">
			<?php
				$message= Session::get('message');
				if($message){
					echo $message;
					Session::put('message', null);
				}				
				

			?>			

		</p>
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Sản phẩm</h2>
			
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>ID sản phẩm</th>
					  <th>Tên sản phầm</th>
					  <th>Tên danh mục sản phẩm</th>
					  <th>Tên nhãn</th>					  
					  <th>Giá</th>
					  <th>Ảnh</th>
					  <th>Kích cỡ</th>
					  <th>Màu</th>
					
					  <th>Lựa chọn</th>
				  </tr>
			  </thead>   
				@foreach( $all_product_info as $v_cproduct)
			  <tbody>
				<tr>
					<td>{{ $v_cproduct -> product_id }}</td>
					<td class="center">{{ $v_cproduct -> product_name }}</td>
					<td class="center">{{ $v_cproduct -> danhmuc_ten }}</td>
					
					<td class="center">{{ $v_cproduct -> nhan_ten }}</td>
					
					<td class="center">{{ $v_cproduct -> product_gia }}</td>
					<td class="center"><img src="{{URL::to($v_cproduct -> product_anh)}}" style="height: 80px; height: 80px" alt=""></td>
					<td class="center">{{ $v_cproduct -> product_size }}</td>
					<td class="center">{{ $v_cproduct -> product_color }}</td>
				
					
					<td class="center">
						@if($v_cproduct -> tinhtrang_danhmuc == 1)
						<span class="label label-success">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Hoạt động</span>
						@else
							<span class="label label-danger">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Không hoạt động</span>
						@endif
					</td>
					<td class="center">
						@if($v_cproduct -> tinhtrang_danhmuc == 1)
						<a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$v_cproduct -> product_id)}}"> 
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						@else
							<a class="btn btn-success" href="{{URL::to('/active_product/'.$v_cproduct -> product_id)}}">
								<i class="halflings-icon white thumbs-up"></i>  
							</a>
						@endif
						<a class="btn btn-info" href="{{URL::to('/edit_product/'.$v_cproduct -> product_id)}}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="{{URL::to('/delete_product/'.$v_cproduct -> product_id)}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>			
			  </tbody>
				@endforeach
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection