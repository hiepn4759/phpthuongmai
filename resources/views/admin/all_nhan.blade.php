@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Danh sách nhãn</h2>
			
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>ID Nhãn</th>
					  <th>Tên Nhãn</th>
					  <th>Miêu tả chi tiết</th>
					  <th>Tình trạng</th>
					  <th>Lựa chọn</th>
				  </tr>
			  </thead>   
				@foreach( $all_nhan_info as $v_cnhan)
			  <tbody>
				<tr>
					<td>{{ $v_cnhan -> nhan_id }}</td>
					<td class="center">{{ $v_cnhan -> nhan_ten }}</td>
					<td class="center">{{ $v_cnhan -> nhan_mieuta }}</td>
					<td class="center">
						@if($v_cnhan -> tinhtrang_danhmuc == 1)
						<span class="label label-success">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Hoạt động</span>
						@else
							<span class="label label-danger">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Không hoạt động </span>
						@endif
					</td>
					<td class="center">
						@if($v_cnhan -> tinhtrang_danhmuc == 1)
						<a class="btn btn-danger" href="{{URL::to('/unactive_nhan/'.$v_cnhan -> nhan_id)}}">
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						@else
							<a class="btn btn-success" href="{{URL::to('/active_nhan/'.$v_cnhan -> nhan_id)}}">
								<i class="halflings-icon white thumbs-up"></i>  
							</a>
						@endif
						<a class="btn btn-info" href="{{URL::to('/edit_nhan/'.$v_cnhan -> nhan_id)}}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="{{URL::to('/delete_nhan/'.$v_cnhan -> nhan_id)}}">
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