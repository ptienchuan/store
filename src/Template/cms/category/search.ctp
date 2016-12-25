<div class="container-fluid">
	<div class="panel panel-success">
		<div class="panel-heading">
			<a class="panel-title">Danh sách danh mục</a>
		</div>
		<div class="panel-body">
			<div class="wrap-search-category">
				<form action="" method="POST" role="form">
					<div class="row">
						<div class="col-md-5">
							<input type="text" name="" class="form-control" value="" placeholder="Nhập tên danh mục">
						</div>
						<div class="col-md-6">
							<select name="" class="form-control" >
								<option value="">Chọn danh mục cha</option>
								<option value="">Lorem ipsum dolor sit amet.</option>
								<option value="">Lorem ipsum dolor sit amet.</option>
								<option value="">Lorem ipsum dolor sit amet.</option>
							</select>
						</div>
						<div class="col-md-1">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
				
				<div class="row">
					<div class="col-md-2">
						<?= $this->Html->link('Thêm danh mục',['controller' => 'Category', 'action' => 'form', '_full' => true],['class' => 'btn btn-success','target' => '_blank']); ?>
					</div>
					<div class="col-md-10">
						<div class="wrap-pagination">
							<ul class="pagination">
								<li><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Tên danh mục</th>
								<th>Danh mục cha</th>
								<th>Mô tả</th>
								<th>Trạng thái</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, atque.</td>
								<td>Hiện</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet.</td>
								<td></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, atque.</td>
								<td>Hiện</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, atque.</td>
								<td>Ẩn</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="wrap-pagination">
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>
			</div>
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