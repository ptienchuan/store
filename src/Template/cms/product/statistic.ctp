<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<a class="panel-title">Thống kê về sản phẩm</a>
		</div>
		<div class="panel-body">
			<div class="wrap-statistic-tabs">
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#general" aria-controls="general" role="tab" data-toggle="tab">Tổng quát</a>
						</li>
						<li role="presentation">
							<a href="#product" aria-controls="product" role="tab" data-toggle="tab">Theo sản phẩm</a>
						</li>
					</ul>
				
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="general">
							<form action="" method="POST" role="form">
								<div class="row">
									<div class="col-md-4">
										<label for="">Từ ngày</label>
										<input type="date" name="" id="input" class="form-control" value="" required="required" >
									</div>
									<div class="col-md-4">
										<label for="">Đến ngày</label>
										<input type="date" name="" id="input" class="form-control" value="" required="required" >
									</div>
									<div class="col-md-4">
										<label for="">Số lượng sản phẩm hiển thị</label>
										<input type="number" name="" id="input" class="form-control" value="" required="required" >
									</div>
								</div>
								<div class="row">
									<div class="radio">
										<div class="col-md-3">
											<label>
												<input type="radio" name="radio" id="input" value="" checked="checked">Số lượng bán tăng dần
											</label>
										</div>
										<div class="col-md-3">
											<label>
												<input type="radio" name="radio" id="input" value="" >Số lượng bán giảm dần
											</label>
										</div>
										<div class="col-md-3">
											<label>
												<input type="radio" name="radio" id="input" value="" >Doanh thu tăng dần
											</label>
										</div>
										<div class="col-md-3">
											<label>
												<input type="radio" name="radio" id="input" value="" >Doanh thu giảm dần
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
									</div>
								</div>
							</form>
							
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
											<th>Hình</th>
											<th>Tên sản phẩm</th>
											<th>Số lượng bán</th>
											<th>Doanh thu</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Lorem ipsum dolor.</td>
											<td>Lorem ipsum dolor sit amet.</td>
											<td>100</td>
											<td>1.200.000</td>
										</tr>
										<tr>
											<td>Lorem ipsum dolor.</td>
											<td>Lorem ipsum dolor sit amet.</td>
											<td>100</td>
											<td>1.200.000</td>
										</tr>
										<tr>
											<td>Lorem ipsum dolor.</td>
											<td>Lorem ipsum dolor sit amet.</td>
											<td>100</td>
											<td>1.200.000</td>
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
						<div role="tabpanel" class="tab-pane" id="product">
							<form action="" method="POST" role="form">
								<div class="row">
									<div class="col-md-4">
										<label for="">Từ ngày</label>
										<input type="date" name="" id="input" class="form-control" required="required" >
									</div>
									<div class="col-md-4">
										<label for="">Từ ngày</label>
										<input type="date" name="" id="input" class="form-control" required="required" >
									</div>
									<div class="col-md-3">
										<label for="">Mã sản phẩm</label>
										<input type="number" name="" id="input" class="form-control" required="required" >
									</div>
									<div class="col-md-1">
										<label for="">&nbsp;</label>
										<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
									</div>
								</div>
							</form>

							<div class="media">
								<a class="pull-left">
									<img class="media-object img-responsive" src="/e_commerce/webroot/img/ProductImage/default.png" alt="Image">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ut ipsum nemo ad animi ratione!</h4>
									<p><strong>Mã sản phẩm: </strong>2721</p>
									<p><strong>Số lượng bán: </strong>100</p>
									<p><strong>Doanh thu: </strong>1.200.000 đ</p>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	});
</script>