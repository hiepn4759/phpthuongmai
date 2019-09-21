@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Update Nhan</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Nhan</h2>		
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
			<form class="form-horizontal" action="{{ url('/update-nhan', $nhan_info -> nhan_id ) }}" method="post">
				{{ csrf_field() }}

			  <fieldset>
				
				<div class="control-group">
				  <label class="control-label" for="date01">Ten Danh Muc</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="nhan_ten" value="{{$nhan_info -> nhan_ten}}">
				  </div>
				</div>

				          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Mieu ta</label>
				  <div class="controls">
					<textarea class="text" name="nhan_mieuta" rows="4" >
						{{$nhan_info -> nhan_mieuta}}
					</textarea>
				  </div>
				</div>

				

				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Luu</button>
				  
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection