<div class="container-fluid">
	<div class="alert alert-default">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Hướng dẫn:</strong> Chọn tác vụ bạn muốn ...
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="#" class="panel-title">Tạo tài khoản</a>
				</div>
				<div class="panel-body">
					Tạo mới tài khoản cms
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a href="#" class="panel-title">Khóa tài khoản</a>
				</div>
				<div class="panel-body">
					Khóa, mở khóa tài khoản cms
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<a href="#" class="panel-title">Xóa tài khoản</a>
				</div>
				<div class="panel-body">
					Xóa tài khoản cms
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a href="#" class="panel-title">Danh sách tài khoản</a>
				</div>
				<div class="panel-body">
					Tìm kiếm, xem thông tin tài khoản, hỗ trợ tìm kiếm bằng bộ lọc
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<a href="#" class="panel-title">Phân quyền</a>
				</div>
				<div class="panel-body">
					Quản lý quyền của các tài khoản cms, cấp quyền, bỏ quyền
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="#" class="panel-title">Thống kê về tài khoản</a>
				</div>
				<div class="panel-body">
					Thống kê các tiêu chí số lượng đơn hàng xử lý, số sản phẩm tạo,... của tài khoản cms
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function (){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-user').attr('class','active');
		//#end menu
	})
</script>