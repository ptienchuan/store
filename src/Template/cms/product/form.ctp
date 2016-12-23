<?php 
	$required = '<i class="fa fa-asterisk"></i>';
	
?>
<div class="container-fluid">
	<div class="alert alert-default">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Hướng dẫn:</strong> Nhập thông tin sản phẩm, các trường có dấu<?= $required; ?>là bắt buộc nhập
	</div>
	<div class="product-form">
		<div class="panel panel-info">
			<div class="panel-heading">
				<a class="panel-title">Tạo sản phẩm</a>
			</div>
			<div class="panel-body">
				<form action="" method="POST" role="form">
					<div class="row">
						<div class="form-group">
							<div class="col-md-3">
								<label for="">Hình sản phẩm</label>
								<div class="img-product-form">
									<input type="file" id="up_file" name="" onchange="readURL(this);">
									<label for="up_file" title="Nhấn chuột để chọn hình">
										<img src="/e_commerce/webroot/img/ProductImage/default.png" id="image" class="img-responsive" alt="Image">
									</label>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-4">
										<label for="">Tên sản phẩm<?= $required; ?></label>
										<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
									</div>
									<div class="col-md-4">
										<label for="">Thương hiệu</label>
										<select name="" id="input" class="form-control" required="required">
											<option value=""></option>
											<option value="">Lorem ipsum dolor.</option>
											<option value="">Lorem ipsum dolor.</option>
											<option value="">Lorem ipsum dolor.</option>
										</select>
									</div>
									<div class="col-md-4">
										<label for="">Giá<?= $required; ?></label>
										<input type="number" name="" id="input" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<label for="">Khuyến mãi (giá)</label>
										<div class="input-group">
											<input type="number" name="" id="input" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
											<span class="input-group-btn" title="Chuyển đổi thành % dựa theo trường 'Giá'">
												<button type="button" class="btn btn-default"><i class="fa fa-exchange"></i></button>
											</span>
										</div>
									</div>
									<div class="col-md-4">
										<label for="">Khuyến mãi (%)</label>
										<div class="input-group">
											<input type="number" name="" id="input" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
											<span class="input-group-btn" title="Chuyển đổi thành tiền dựa theo trường 'Giá'">
												<button type="button" class="btn btn-default"><i class="fa fa-exchange"></i></button>
											</span>
										</div>
									</div>
									<div class="col-md-4">
										<label for="">Thời hạn khuyến mãi</label>
										<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
									</div>
								</div>
								<div class="row">
									<div class="checkbox">
										<div class="col-md-4">
											<label>
												<input type="checkbox" value="">Hiện số tiền được khuyến mãi
											</label>
										</div>
										<div class="col-md-4">
											<label>
												<input type="checkbox" value="">Hiện % được khuyến mãi
											</label>
										</div>
										<div class="col-md-4">
											<label>
												<input type="checkbox" value="">Hiện giá còn lại sau khuyến mãi
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="">Mô tả</label>
										<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="">Danh mục</label>
							<div class="row" id="row-category">
								<div class="col-md-4">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit." readonly title="Tên danh mục">
										<span class="input-group-btn" title="Gỡ bỏ">
											<button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit." readonly title="Tên danh mục">
										<span class="input-group-btn" title="Gỡ bỏ">
											<button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit." readonly title="Tên danh mục">
										<span class="input-group-btn" title="Gỡ bỏ">
											<button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit." readonly title="Tên danh mục">
										<span class="input-group-btn" title="Gỡ bỏ">
											<button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-add-category">
										<a data-toggle="modal" href="#category-modal" title="Chọn danh mục"><i class="fa fa-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="">Thuộc tính</label>
							<input type="number" name="" id="input" class="form-control" value="" step="" required="required" title="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="">Màu sản phẩm</label>
							<div class="row" id="adf1">
								<div class="col-md-3" id="adsf">
									<div class="row">
										<div class="col-md-12">
											<div class="wrap-image-color-product">
												<label><img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" alt="Image" title="Click vào hình để gỡ bỏ"></label>
											</div>
											<label for="">Màu</label>
											<input class="input-color-picker" name="" type="text" value="#ffff00" title="Click để chọn màu" />
											<label for="">Tên màu</label>
											<input type="text" name="" class="form-control" value="" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="row">
										<div class="col-md-12">
											<div class="wrap-image-color-product">
												<label><img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" alt="Image" title="Click vào hình để gỡ bỏ"></label>
											</div>
											<label for="">Màu</label>
											<input class="input-color-picker" name="color1" type="text" value="#ffff00" title="Click để chọn màu" />
											<label for="">Tên màu</label>
											<input type="text" name="" class="form-control" value="" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="row">
										<div class="col-md-12">
											<div class="wrap-image-color-product">
												<label><img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" alt="Image" title="Click vào hình để gỡ bỏ"></label>
											</div>
											<label for="">Màu</label>
											<input class="input-color-picker" name="color1" type="text" value="#ffff00" title="Click để chọn màu" />
											<label for="">Tên màu</label>
											<input type="text" name="" class="form-control" value="" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-add-color">
										<img src="/e_commerce/webroot/img/a-background.png" class="img-responsive" alt="Image">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<textarea name="" id="editor" class="form-control" rows="3" required="required"></textarea>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked="checked" value="">Ẩn sản phẩm sau khi tạo (áp dụng khi chưa muốn đưa sản phẩm vào thương mại)
								</label>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		
	</div>
</div>

<!-- Category modal -->
<div class="modal fade" id="category-modal">	<!-- id lien quan den css -->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chọn danh mục</h4>
			</div>
			<div class="modal-body">
				<div class="checkbox">
					<label><input type="checkbox" value="">Lorem ipsum dolor.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btn-modal-select-category">Chọn</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>
<!-- END Category modal -->
<script>
	$(document).ready(function (){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-product').attr('class','active');
		//#end menu
		//ckfinder
		CKEDITOR.replace( 'editor',{
			filebrowserBrowseUrl : '<?= $this->Url->build('/webroot/js/kcfinder/index.php',true); ?>',
			// filebrowserImageBrowseUrl : '<?= $this->Url->build('/webroot/js/ckfinder/ckfinder.html?type=Images',true); ?>',
			// filebrowserFlashBrowseUrl : '<?= $this->Url->build('/webroot/js/ckfinder/ckfinder.html?type=Flash',true); ?>',
			// filebrowserUploadUrl : '<?= $this->Url->build('/webroot/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',true); ?>',
			// filebrowserImageUploadUrl : '<?= $this->Url->build('/webroot/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',true); ?>',
			// filebrowserFlashUploadUrl : '<?= $this->Url->build('/webroot/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',true); ?>',
		});
		//#end ckfinder
		
		//Category handle
		$("#row-category .input-group-btn button").click(function(){
			$(this).closest(".col-md-4").remove();
		});
		$("#btn-modal-select-category").click(function(){
			$("#category-modal").modal("toggle");
		});
		//end Category handle
		
		//Product Color handle
		$('.input-color-picker').colorPicker();
		$('.form-add-color').click(function(){
			var ColorImageItem = 	'<div class="col-md-3">'
						+'	<div class="row">'
						+'		<div class="col-md-12">'
						+'			<div class="wrap-image-color-product">'
						+'				<label><img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" alt="Image" title="Click vào hình để gỡ bỏ"></label>'
						+'			</div>'
						+'			<label for="">Màu</label>'
						+'			<input class="input-color-picker" name="color1" type="text" value="#ffff00" title="Click để chọn màu" />'
						+'			<label for="">Tên màu</label>'
						+'			<input type="text" name="" class="form-control" value="" placeholder="">'
						+'		</div>'
						+'	</div>'
						+'</div>';
			$(this).closest(".row").prepend(ColorImageItem);

			// alert($(this).closest(".row").attr("id"));
			// alert($(this).closest(".row .col-md-3:first-child .input-color-picker").attr("id"));
			// $('.input-color-picker').colorPicker();
		});
		$(".img-color").click(function(){
			$(this).closest(".col-md-3").remove();
		});
		//end Product Color handle
	})
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#image')
				.attr('src', e.target.result);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
