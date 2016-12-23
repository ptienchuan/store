<div class="container-fluid">
	<div class="alert alert-default">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Hướng dẫn:</strong> Chọn tác vụ bạn muốn ...
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="#" class="panel-title">Danh sách đơn hàng</a>
				</div>
				<div class="panel-body">
					Xem danh sách đơn hàng, hỗ trợ tìm kiếm với bộ lọc
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a href="#" class="panel-title">Xử lý đơn hàng</a>
				</div>
				<div class="panel-body">
					Xử lý đơn hàng trực tuyến
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<a href="#" class="panel-title">Thống kê về đơn hàng</a>
				</div>
				<div class="panel-body">
					Thống kê đơn hàng theo ngày, theo trạng thái, thống kê doanh thu
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function (){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-order').attr('class','active');
		//#end menu
	})
</script>