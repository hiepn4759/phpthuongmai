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
		<a href="#">Thêm mới sản phẩm</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Thêm mới sản phẩm</h2>		
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
			<form class="form-horizontal" action="{{ url('/save-product') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

			  <fieldset>
				
				<div class="control-group">
				  <label class="control-label" for="date01">Tên sản phẩm</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="product_name" required="">
				  </div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="selectError3">Danh mục sản phầm</label>
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
					<label class="control-label" for="selectError3">Nhãn</label>
					<div class="controls">
					  <select id="selectError3" name="nhan_id">
					  	<?php
                           $all_nhan_info = DB::table('tbl_nhan')
                                                ->where('tinhtrang_danhmuc', 1)
                                                ->get();
                            foreach($all_nhan_info as $v_cnhan){ ?>
								<option value="{{$v_cnhan -> nhan_id}}">{{$v_cnhan -> nhan_ten}}</option>
						<?php } ?>  
					  </select>
					</div>
				  </div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Miêu tả ngắn</label>
				  <div class="controls">
					<textarea class="text" name="product_short_mieuta" rows="4" required=""></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Miêu tả chi tiết</label>
				  <div class="controls">
					<textarea class="text" name="product_long_mieuta" rows="4" required=""></textarea>
				  </div>
				</div>
					
				<div class="control-group">
				  <label class="control-label" for="date01">Giá</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="product_gia" required="">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="fileInput">Ảnh</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="product_anh" id="fileInput" type="file">
				  </div>
				</div>
				  
				<div class="control-group">
				  <label class="control-label" for="date01">Kích thước</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="product_size" required="">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="date01">Màu sắc</label>
				  <div class="controls">
					<input type="text" class="input-xlarge " name="product_color" required="">
				  </div>
				</div>	
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Tình trạng</label>
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