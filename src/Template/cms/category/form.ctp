<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<a class="panel-title">Thêm danh mục</a>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<label for="">Tên danh mục</label>
							<input type="text" name="" id="input" class="form-control" value="" required="required">
						</div>
						<div class="col-md-6">
							<label for="">Mô tả</label>
							<input type="text" name="" id="input" class="form-control" value="">
						</div>
						<div class="col-md-3">
							<label for="">Danh mục cha</label>
							<select name="" id="input" class="form-control">
								<option value=""></option>
								<option value="">Lorem ipsum dolor sit amet.</option>
								<option value="">Lorem ipsum dolor sit amet.</option>
								<option value="">Lorem ipsum dolor sit amet.</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label><input type="checkbox" value="">Ẩn trên giao diện người dùng</label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Hoàn thành</button>
				<button type="submit" class="btn btn-danger">Xóa</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-category').attr('class','active');
		//#end menu
	});
</script>