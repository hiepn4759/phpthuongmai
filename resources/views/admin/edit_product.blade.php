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
		<a href="#">Update product</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Update product</h2>		
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
			<form class="form-horizontal" action="{{ url('/update-product', $product_info -> product_id )}}"method="post" enctype="multipart/form-data">
			
				{{ csrf_field() }}

			  <fieldset>
				
				<div class="control-group">
				  <label class="control-label" for="date01">Ten Product</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="product_name" value="{{$product_info -> product_name}}">
				  </div>
				</div>

				<div class="control-group">
					<label class="control-label" for="selectError3">Product danh muc</label>
					<div class="controls">
					  <select id="selectError3" name="danhmuc_id">
					  	 <?php
                               $all_danhmuc_info = DB::table('tbl_danhmuc')
                                                    ->where('tinhtrang_danhmuc', 1)
                                                    ->get();
                                foreach($all_danhmuc_info as $v_cdanhmuc){
                                    ?>

								<option value="{{$v_cdanhmuc -> danhmuc_id}}">{{$v_cdanhmuc -> danhmuc_ten}}</option>

						<?php } ?> 
					  </select>
					</div>
				 </div>
				
									
				<div class="control-group">
				  <label class="control-label" for="date01">Product Gia</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" value="{{$product_info -> product_gia}}" name="product_gia" required="">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="fileInput">Image Product</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="product_anh" id="fileInput" type="file">
				  </div>
				</div> 
				<div class="control-group">
				  <label class="control-label" for="date01">Product Size</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" value="{{$product_info ->  product_size}}" name="product_size" required="">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="date01">Product Color</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " value="{{$product_info ->  product_color}}" name="product_color" required="">
				  </div>
				</div>	
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Tinh trang danh muc</label>
				  <div class="controls">
				  	<input type="checkbox" name="tinhtrang_danhmuc" value="1">
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