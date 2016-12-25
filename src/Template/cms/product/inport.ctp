<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<a class="panel-title">Nhập sản phẩm từ file</a>
		</div>
		<div class="panel-body">
			<div class="wrap-import">
				<form action="" method="POST" class="form-inline" role="form">
					<div class="input-group">
						<input type="file" name="" id="file">
						<input type="text" class="form-control" id="showFileName" placeholder="Không có tệp nào được chọn">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default" id="btnBrowse">Tìm kiếm</button>
						</span>
					</div>
					<button type="submit" class="btn btn-primary">Nhập</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-product').attr('class','active');
		//#end menu
		
		$('#btnBrowse').click(function(){
			$('#file').click();
		});
		$('#file').change(function(){
			var filename = $('#file').val().replace(/C:\\fakepath\\/i, '')
			$('#showFileName').val(filename);
		});
	});
</script>