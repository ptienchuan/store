<?php 
	$required = '<i class="fa fa-asterisk"></i>';
	
?>
<div class="container-fluid">
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
									<input type="file" id="up_file" name="" onchange="readURL(this,'#image');">
									<label for="up_file" title="Nhấn chuột để chọn hình">
										<img src="/e_commerce/webroot/img/ProductImage/default.png" id="image" class="img-responsive" alt="Image">
									</label>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-4">
										<label for="">Tên sản phẩm<?= $required; ?></label>
										<input type="text" name="" id="input" class="form-control" value="" required="required"  title="">
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
										<input type="number" name="" id="price" class="form-control" value="" required="required" title="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<label for="">Khuyến mãi (giá)</label>
										<div class="input-group">
											<input type="number" name="" id="discount_number" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
											<span class="input-group-btn" title="Chuyển đổi thành % dựa theo trường 'Giá'">
												<button type="button" class="btn btn-default" id="btnConvertDisNum"><i class="fa fa-exchange"></i></button>
											</span>
										</div>
									</div>
									<div class="col-md-4">
										<label for="">Khuyến mãi (%)</label>
										<div class="input-group">
											<input type="number" name="" id="discount_percent" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
											<span class="input-group-btn" title="Chuyển đổi thành tiền dựa theo trường 'Giá'">
												<button type="button" class="btn btn-default" id="btnConvertDisPer"><i class="fa fa-exchange"></i></button>
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
							<a href="#wrap-add-category" class="add category-caret" data-toggle="collapse">
								<i class="fa fa-caret-right"></i><i class="fa fa-caret-down"></i><label for="">Danh mục</label>
							</a>
							<div class="collapse" id="wrap-add-category">
								<div class="row" id="row-category">
									<div class="col-md-4">
										<div class="form-add-category" title="Chọn danh mục sản phẩm">
											<a data-toggle="modal" href="#category-modal" title="Chọn danh mục"><i class="fa fa-plus"></i></a>
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
										<div class="input-group">
											<input type="text" class="form-control" value="Lorem ipsum dolor sit." readonly title="Tên danh mục">
											<span class="input-group-btn" title="Gỡ bỏ">
												<button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a href="#wrap-add-property" class="add property-caret" data-toggle="collapse" >
								<i class="fa fa-caret-right"></i><i class="fa fa-caret-down"></i><label for="">Thuộc tính</label>
							</a>
							<div class="collapse" id="wrap-add-property">
								<div class="form-group" title="Thêm thuộc tính sản phẩm">
									<a data-toggle="modal" href='#property-modal'><i class="fa fa-plus"></i></a>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit amet." readonly>
										<input type="text" class="form-control" placeholder="Nhập giá trị thuộc tính">
										<span class="input-group-btn">
											<button type="button" class="btn btn-default "><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit amet." readonly>
										<input type="text" class="form-control" placeholder="Nhập giá trị thuộc tính">
										<span class="input-group-btn">
											<button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a href="#wrap-add-color" class="add color-caret" data-toggle="collapse" >
								<i class="fa fa-caret-right"></i><i class="fa fa-caret-down"></i><label for="">Màu sản phẩm</label>
							</a>
							<div class="collapse" id="wrap-add-color">
								<div class="row">
									<div class="col-md-3">
										<div class="form-add-color" title="Thêm màu sản phẩm">
											<img src="/e_commerce/webroot/img/a-background.png" class="img-responsive" alt="Image">
											<i class="fa fa-plus"></i>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumbnail">
											<div class="wrap-image-color-product">
												<input type="file" name="" id="color-1" >
												<label for="color-1">
													<button type="button" class="btn btn-danger btn-remove-image-color">Gỡ bỏ</button>
													<img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" id="color-image-1" alt="Image" title="Click vào hình để gỡ bỏ">
												</label>
											</div>
											<div class="caption">
												<label for="">Màu</label>
												<input class="input-color-picker" name="" type="text" value="#EDEDED" title="Click để chọn màu" />
												<label for="">Tên màu</label>
												<input type="text" name="" class="form-control" value="" placeholder="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a href="#wrap-add-promotion" class="add promotion-caret" data-toggle="collapse" >
								<i class="fa fa-caret-right"></i><i class="fa fa-caret-down"></i><label for="">Chương trình khuyến mãi</label>
							</a>
							<div class="collapse" id="wrap-add-promotion">
								<div class="form-group" title="Thêm chương trình khuyến mãi">
									<a data-toggle="modal" href='#promotion-modal'><i class="fa fa-plus"></i></a>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" value="Lorem ipsum dolor sit amet." readonly>
										<span class="input-group-btn">
											<button type="button" class="btn btn-default "><i class="fa fa-remove"></i></button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a href="#wrap-add-product-related" class="add product-related-caret" data-toggle="collapse" >
								<i class="fa fa-caret-right"></i><i class="fa fa-caret-down"></i><label for="">Sản phẩm liên quan</label>
							</a>
							<div class="collapse" id="wrap-add-product-related">
								<div class="row">
									<div class="col-md-3">
										<div class="form-add-product-related" title="Thêm sản phẩm liên quan">
											<a href="#product-related-modal" data-toggle="modal">
												<img src="/e_commerce/webroot/img/a-background.png" class="img-responsive" alt="Image">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumbnail">
											<div class="wrap-thumbnail-related">
												<button type="button" class="btn btn-danger btn-remove-image-color">Gỡ bỏ</button>
												<img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" id="color-image-1" alt="Image" title="Click vào hình để gỡ bỏ">
											</div>
											<div class="caption">
												<h5><strong>Lorem ipsum dolor sit amet.</strong></h5>
												<p>Mã: 2482</p>
											</div>
										</div>
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
						<div class="col-md-2">
							<div class="checkbox">
								<label><input type="checkbox" value="" id="stock-flag" checked="checked">Còn hàng</label>
							</div>
						</div>
						<div id="stock-message">
							<div class="col-md-10">
								<input type="text" name="" id="input" class="form-control" placeholder="Nhập thông báo">
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked="checked" value="">Ẩn sản phẩm sau khi tạo (áp dụng khi chưa muốn đưa sản phẩm vào thương mại)
								</label>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Hoàn thành</button>
					<a class="btn btn-danger" href="#" role="button">Xóa</a>
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

<!-- Property modal -->
<div class="modal fade" id="property-modal"><!-- id lien quan den css -->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chọn thuộc tính</h4>
			</div>
			<div class="modal-body">
				<div class="checkbox">
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Chọn</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>
<!-- END Property modal -->

<!-- Promotion modal -->
<div class="modal fade" id="promotion-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chọn chương trình khuyến mãi</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Nhập mã">
							<span class="input-group-btn">
								<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Chọn</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>
<!-- END Promotion modal -->

<!-- Product related modal -->
<div class="modal fade" id="product-related-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chọn sản phẩm liên quan</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Nhập mã">
							<span class="input-group-btn">
								<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Chọn</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>
<!-- END Product related modal -->

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
		$('.category-caret').click(function(){
			_caretStatus('.category-caret');
		});
		//end Category handle
		
		//Property handle
		$('#wrap-add-property .input-group-btn button').click(function(){
			$(this).closest('.form-group').remove();
		});
		$('.property-caret').click(function(){
			_caretStatus('.property-caret');
		});
		//end Property handle

		//Product Color handle
		var elmImageAddColor = '';
		$('.input-color-picker').colorPicker();
		$('.form-add-color').click(function(){
			var stt = $(this).closest('.row').find('.col-md-3').length;
			var ColorImageItem = 	'<div class="col-md-3">'
						+'	<div class="thumbnail">'
						+'		<div class="wrap-image-color-product">'
						+'			<input type="file" name="" id="color-'+stt+'" >'
						+'			<label for="color-'+stt+'">'
						+'				<button type="button" class="btn btn-danger btn-remove-image-color">Gỡ bỏ</button>'
						+'				<img src="/e_commerce/webroot/img/ProductImage/default.png" class="img-responsive img-color" id="color-image-'+stt+'" alt="Image" title="Click vào hình để gỡ bỏ">'
						+'			</label>'
						+'		</div>'
						+'		<div class="caption">'
						+'			<label for="">Màu</label>'
						+'			<input class="input-color-picker" name="" type="text" value="#EDEDED" title="Click để chọn màu" />'
						+'			<label for="">Tên màu</label>'
						+'			<input type="text" name="" class="form-control" value="" placeholder="">'
						+'		</div>'
						+'	</div>'
						+'</div>';
			$(this).closest(".row").append(ColorImageItem);
			$(this).closest('.row').find('.col-md-3').each(function(){
				var hasColorPicker = false;
				if ($(this).find('div').hasClass('colorPicker-picker')){
					hasColorPicker = true;
				}
				if (!hasColorPicker)
				{
					$(this).find('[class=input-color-picker]').colorPicker();
				}
			});
		});
		$('.color-caret').click(function(){
			_caretStatus('.color-caret');
		});		
		//end Product Color handle
		
		//Product promotion handle
		$('#wrap-add-promotion .input-group-btn button').click(function(){
			$(this).closest('.form-group').remove();
		});
		$('.promotion-caret').click(function(){
			_caretStatus('.promotion-caret');
		});
		//end Product promotion handle
		
		//Product related handle
		$('.product-related-caret').click(function(){
			_caretStatus('.product-related-caret');
		});
		//end Product related handle
		
		//Stock handle
		$('#stock-message').hide();
		$('#stock-flag').click(function(){
			if ($(this).is(':checked')) {
				$('#stock-message').hide();
			}
			else {
				$('#stock-message').show();
			}
		});
		//end Stock handle
		
		//Discount handle
		$('#btnConvertDisNum').click(function(){
			var price = parseInt($('#price').val());
			var thisValue = parseInt($('#discount_number').val());
			if(price!=''&&price>0&&price>thisValue&&thisValue!=''&&thisValue>0)
			{
				percentValue = Math.round((price-thisValue)/price*100);
				$('#discount_percent').val(percentValue);
			}
		});
		$('#btnConvertDisPer').click(function(){
			var price = parseInt($('#price').val());
			var thisValue = parseInt($('#discount_percent').val());
			if(price!=''&&price>0&&thisValue!=''&&thisValue>0&&thisValue<=100)
			{
				percentValue = Math.round(price - thisValue*price/100);
				$('#discount_number').val(percentValue);
			}
		});
		//end Discount handle
	});

	//Product Color handle
	$(document).on('click','.btn-remove-image-color',function(){
		$(this).closest('.col-md-3').remove();
	});
	$(document).on('change','.wrap-image-color-product input',function(){
		var stt = elmImageAddColor.split('-')[1];
		readURL($(this).get(0),'#color-image-'+stt);
	});
	$(document).on('click','.wrap-image-color-product',function(){
		elmImageAddColor = $(this).find('input').attr('id');
	});
	//END Product Color handle

	function readURL(input,id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$(id)
				.attr('src', e.target.result);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
	function _caretStatus (cls) {
		if(!$(cls).find('.fa-caret-down').is(':visible')){
			$(cls+' .fa-caret-down').show();
		}
		else{
			$(cls+' .fa-caret-down').hide();
		}
		if(!$(cls).find('.fa-caret-right').is(':visible')){
			$(cls+' .fa-caret-right').show();
		}
		else{
			$(cls+' .fa-caret-right').hide();
		}
	}
</script>
