<div class="container-fluid">
	<div class="alert alert-default">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Hướng dẫn:</strong> Chọn tác vụ bạn muốn ...
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="#" class="panel-title">Thêm thuộc tính</a>
				</div>
				<div class="panel-body">
					Thêm một thuộc tính mới cho sản phẩm
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a href="#" class="panel-title">Sửa thuộc tính</a>
				</div>
				<div class="panel-body">
					Sửa thuộc tính của sản phẩm
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<a href="#" class="panel-title">Xóa thuộc tính</a>
				</div>
				<div class="panel-body">
					Xóa thuộc tính của sản phẩm
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a href="#" class="panel-title">Danh sách thuộc tính</a>
				</div>
				<div class="panel-body">
					Tìm kiếm thuộc tính với bộ lọc
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<a href="#" class="panel-title">Ẩn thuộc tính</a>
				</div>
				<div class="panel-body">
					Tạm thời ẩn (hoặc hiện) thuộc tính trên giao diện khách hàng
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="#" class="panel-title">Thống kê về thuộc tính</a>
				</div>
				<div class="panel-body">
					Thống kê số lượng sản phẩm theo thuộc tính
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<a href="#" class="panel-title">Vị trí</a>
				</div>
				<div class="panel-body">
					Vị trí hiển thị trên giao diện người dùng
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function (){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-property').attr('class','active');
		//#end menu
	})
</script>