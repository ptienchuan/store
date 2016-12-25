<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<a class="panel-title">Thống kê về danh mục</a>
		</div>
		<div class="panel-body">
			<div class="wrap-category-statistic">
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#general" aria-controls="general" role="tab" data-toggle="tab">Tổng quát</a>
						</li>
						<li role="presentation">
							<a href="#category" aria-controls="category" role="tab" data-toggle="tab">Theo danh mục</a>
						</li>
					</ul>
				
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="general">
							<form action="" method="POST" role="form" class="form-inline">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="">Từ ngày </label>
											<input type="date" name="" class="form-control" value="" required="required">
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label for="">Đến ngày </label>
											<input type="date" name="" class="form-control" value="" required="required">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="">&nbsp;</label>
											<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="category">
							<form action="" method="POST" role="form">
								<div class="row">
									<div class="col-md-3">
										<label for="">Nhập tên danh mục</label>
										<input type="text" name="" class="form-control" value="" >
									</div>
									<div class="col-md-3">
										<label for="">Danh mục cha</label>
										<select name="" id="input" class="form-control">
											<option value="">Chọn danh mục cha</option>
											<option value="">Lorem ipsum dolor sit amet.</option>
											<option value="">Lorem ipsum dolor sit amet.</option>
											<option value="">Lorem ipsum dolor sit amet.</option>
										</select>
									</div>
									<div class="col-md-3">
										<label for="">Từ ngày</label>
										<input type="date" name="" class="form-control" value="" required="required">
									</div>
									<div class="col-md-3">
										<label for="">Đến ngày</label>
										<input type="date" name="" class="form-control" value="" required="required">
									</div>
								</div>
								<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
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
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Danh mục</th>
								<th>Danh mục cha</th>
								<th>Số lượng sản phẩm</th>
								<th>Số lượng sản phẩm bán</th>
								<th>Doanh thu</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>128</td>
								<td>37</td>
								<td>250.000 đ</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>128</td>
								<td>37</td>
								<td>250.000 đ</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>Lorem ipsum dolor sit amet.</td>
								<td>128</td>
								<td>37</td>
								<td>250.000 đ</td>
							</tr>
						</tbody>
					</table>
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
</div>
<script type="text/javascript">
	$(document).ready(function(){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-category').attr('class','active');
		//#end menu
	});
</script>