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
		<a href="#">Add Danh Muc</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Danh Muc</h2>		
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
				  <label class="control-label" for="date01">Ten Danh Muc</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="danhmuc_ten" required="">
				  </div>
				</div>

				          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Mieu ta</label>
				  <div class="controls">
					<textarea class="text" name="danhmuc_mieuta" rows="3" required=""></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Tinh trang danh muc</label>
				  <div class="controls">
				  	<input type="checkbox" name="tinhtrang_danhmuc" value="1">
				  </div>
				</div>

				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Danh muc</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection