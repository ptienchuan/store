<div class="container-fluid">
	<div class="alert alert-default">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Hướng dẫn:</strong> Chọn tác vụ bạn muốn...
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<?= $this->Html->link('Tạo sản phẩm',['controller' => 'Product', 'action' => 'form', '_full' => true],['class' => 'panel-title']); ?>
				</div>
				<div class="panel-body">
					Thêm sản phẩm mới cho cửa hàng
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a class="panel-title" href="#">Sửa sản phẩm</a>
				</div>
				<div class="panel-body">
					Chỉnh sửa sản phẩm trong cửa hàng
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<a class="panel-title" href="#">Xóa sản phẩm</a>
				</div>
				<div class="panel-body">
					Xóa bỏ sản phẩm khỏi cửa hàng
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<?= $this->Html->link('Danh sách sản phẩm',['controller' => 'Product', 'action' => 'search', '_full' => true],['class' => 'panel-title']); ?>
				</div>
				<div class="panel-body">
					Tìm kiếm, theo dõi, xem thông tin sản phẩm, hỗ trợ tìm kiếm bằng bộ lọc
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<a class="panel-title" href="#">Ẩn sản phẩm</a>
				</div>
				<div class="panel-body">
					Tạm thời ẩn (hoặc hiện) sản phẩm trên giao diện khách hàng
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a class="panel-title" href="#">Thống kê về sản phẩm</a>
				</div>
				<div class="panel-body">
					Thống kê lượt mua, số lượng đã bán, doanh thu theo sản phẩm
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<?= $this->Html->link('Nhập sản phẩm từ file',['controller' => 'Product', 'action' => 'inport', '_full' => true],['class' => 'panel-title']); ?>
				</div>
				<div class="panel-body">
					Cho phép nhập nhiều sản phẩm từ file excel, csv
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function (){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-product').attr('class','active');
		//#end menu
	})
</script>