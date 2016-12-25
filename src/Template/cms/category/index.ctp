<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<?= $this->Html->link('Thêm danh mục',['controller' => 'Category', 'action' => 'form', '_full' => true],['class' => 'panel-title']); ?>
				</div>
				<div class="panel-body">
					Thêm một danh mục sản phẩm mới
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<a href="#" class="panel-title">Sửa danh mục</a>
				</div>
				<div class="panel-body">
					Sửa danh mục của sản phẩm
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<a href="#" class="panel-title">Xóa danh mục</a>
				</div>
				<div class="panel-body">
					Xóa danh mục của sản phẩm
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<?= $this->Html->link('Danh sách danh mục',['controller' => 'Category', 'action' => 'search', '_full' => true],['class' => 'panel-title']); ?>
				</div>
				<div class="panel-body">
					Tìm kiếm danh mục với bộ lọc
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<a href="#" class="panel-title">Ẩn danh mục</a>
				</div>
				<div class="panel-body">
					Tạm thời ẩn (hoặc hiện) danh mục trên giao diện khách hàng
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<?= $this->Html->link('Thống kê về danh mục',['controller' => 'Category', 'action' => 'statistic', '_full' => true],['class' => 'panel-title']); ?>
				</div>
				<div class="panel-body">
					Thống kê số lượng sản phẩm, doanh thu theo danh mục
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
		$('#list-menu li#menu-category').attr('class','active');
		//#end menu
	})
</script>