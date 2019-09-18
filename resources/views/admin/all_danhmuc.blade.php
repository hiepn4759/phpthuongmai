@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
			
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Danh muc ID</th>
					  <th>Danh muc Name</th>
					  <th>Danh Muc Xuat ban</th>
					  <th>Status</th>
					  <th>Actions</th>
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
						<span class="label label-success">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Hoat Dong</span>
						@else
							<span class="label label-danger">{{-- {{ $v_cdanhmuc -> tinhtrang_danhmuc }} --}}Khong Khong Hoat Dong </span>
						@endif
					</td>
					<td class="center">
						@if($v_cdanhmuc -> tinhtrang_danhmuc == 1)
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						@else
							<a class="btn btn-success" href="#">
								<i class="halflings-icon white thumbs-up"></i>  
							</a>
						@endif
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="#">
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