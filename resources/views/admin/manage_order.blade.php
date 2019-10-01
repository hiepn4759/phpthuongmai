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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Đặt hàng</h2>
			
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>ID đặt hàng</th>
					  <th>Tên khách hàng</th>
					  <th>Tổng tiền</th>
					  <th>Tình trạng</th>
					  <th>Lựa chọn</th>
				  </tr>
			  </thead>   
				@foreach( $all_order_info as $v_order)
			  <tbody>
				<tr>
					<td>{{ $v_order -> order_id }}</td>
					<td class="center">{{ $v_order -> customer_name }}</td>
					<td class="center">{{ $v_order -> order_total }}</td>
					<td class="center">{{ $v_order -> order_status }}</td>
					

					<td class="center">
						
						<a class="btn btn-danger" href="{{URL::to('/unactive/'.$v_order -> order_id)}}">
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						
							
					
						<a class="btn btn-info" href="{{URL::to('/edit/'.$v_order -> order_id)}}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="{{URL::to('/delete/'.$v_order -> order_id)}}">
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