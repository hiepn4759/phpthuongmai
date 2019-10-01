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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Danh Mục Sản Phẩm</h2>
			
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>ID Danh mục</th>
					  <th>Tên danh mục sản phẩm</th>
					  <th>Thông tin danh mục</th>
					  <th>Tình trạng</th>
					  <th>Lực chọn</th>
				  </tr>
			  </thead>   
				@foreach( $all_danhmuc_info as $v_cdanhmuc)
			  <tbody>
				<tr>
					<td>{{ $v_cdanhmuc -> danhmuc_id }}</td>
					<td class="center">{{ $v_cdanhmuc -> danhmuc_ten }}</td>
					<td class="center">{{ $v_cdanhmuc -> danhmuc_mieuta }}</td>
					<td class="center">
						@if($v_cdanhmuc -> tinhtrang_danhmuc == 1)
						<span class="label label-success">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Hoạt động</span>
						@else
							<span class="label label-danger">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Không hoạt động</span>
						@endif
					</td>
					<td class="center">
						@if($v_cdanhmuc -> tinhtrang_danhmuc == 1)
						<a class="btn btn-danger" href="{{URL::to('/unactive_danhmuc/'.$v_cdanhmuc -> danhmuc_id)}}">
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						@else
							<a class="btn btn-success" href="{{URL::to('/active_danhmuc/'.$v_cdanhmuc -> danhmuc_id)}}">
								<i class="halflings-icon white thumbs-up"></i>  
							</a>
						@endif
						<a class="btn btn-info" href="{{URL::to('/edit_danhmuc/'.$v_cdanhmuc -> danhmuc_id)}}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="{{URL::to('/delete_danhmuc/'.$v_cdanhmuc -> danhmuc_id)}}">
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