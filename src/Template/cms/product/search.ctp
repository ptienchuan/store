<div class="container-fluid">
	<div class="panel panel-success">
		<div class="panel-heading">
			<a class="panel-title">Danh sách sản phẩm</a>
		</div>
		<div class="panel-body">
			<!-- Search form -->
			<div class="wrap-search-tabs">
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#name" aria-controls="name" role="tab" data-toggle="tab">Tên / Mã</a>
						</li>
						<li role="presentation">
							<a href="#category" aria-controls="category" role="tab" data-toggle="tab">Danh mục</a>
						</li>
						<li role="presentation">
							<a href="#brand" aria-controls="brand" role="tab" data-toggle="tab">Thương hiệu</a>
						</li>
						<li role="presentation">
							<a href="#property" aria-controls="property" role="tab" data-toggle="tab">Thuộc tính</a>
						</li>
						<li role="presentation">
							<a href="#price" aria-controls="price" role="tab" data-toggle="tab">Giá</a>
						</li>
						<li role="presentation">
							<a href="#promotion" aria-controls="promotion" role="tab" data-toggle="tab">Khuyến mãi</a>
						</li>

					</ul>
				
					<!-- Tab panes -->
					<div class="wrap-search-tabs-content">
						<div class="tab-content">
							<!-- Name, ID -->
							<div role="tabpanel" class="tab-pane active" id="name">
								<form action="" method="POST" role="form">
									<div class="row">
										<div class="col-md-3">
											<input type="number" name="" id="input" class="form-control" value="" placeholder="Nhập mã">
										</div>
										<div class="col-md-8">
											<input type="text" name="" id="input" class="form-control" value="" placeholder="Nhập tên">
										</div>
										<div class="col-md-1">
											<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
							<!-- END Name, ID -->

							<!-- Category -->
							<div role="tabpanel" class="tab-pane" id="category">
								<form action="" method="POST" class="form-inline" role="form">
									<div class="row">
										<div class="col-md-4">
											<div class="form-add-category" title="Chọn danh mục sản phẩm">
												<a data-toggle="modal" href="#category-modal" title="Chọn danh mục"><i class="fa fa-plus"></i></a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="text" class="form-control" value="Lorem ipsum dolor sit amet." readonly>
												<span class="input-group-btn">
													<button type="button" class="btn btn-default"><i class="fa fa-remove btnRemoveCategory"></i></button>
												</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="text" class="form-control" value="Lorem ipsum dolor sit amet." readonly>
												<span class="input-group-btn">
													<button type="button" class="btn btn-default"><i class="fa fa-remove btnRemoveCategory"></i></button>
												</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="text" class="form-control" value="Lorem ipsum dolor sit amet." readonly>
												<span class="input-group-btn">
													<button type="button" class="btn btn-default"><i class="fa fa-remove btnRemoveCategory"></i></button>
												</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
							<!-- END Category -->

							<!-- Brand -->
							<div role="tabpanel" class="tab-pane" id="brand">
								<form action="" method="POST" class="form-inline" role="form">
									<div class="form-group">
										<select name="" class="form-control" required="required">
											<option value=""></option>
											<option value="">Lorem ipsum dolor sit amet.</option>
											<option value="">Lorem ipsum dolor sit amet.</option>
											<option value="">Lorem ipsum dolor sit amet.</option>
											<option value="">Lorem ipsum dolor sit amet.</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!-- END Brand -->

							<!-- Property -->
							<div role="tabpanel" class="tab-pane" id="property">
								<form action="" method="POST" role="form">
									<div class="row">
										<div class="form-group" title="Thêm thuộc tính sản phẩm">
											<a data-toggle="modal" href='#property-modal'><i class="fa fa-plus"></i></a>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control" value="Lorem ipsum dolor sit amet, consectetur." readonly>
												<input type="text" class="form-control" placeholder="Nhập giá trị">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default btnRemoveProperty"><i class="fa fa-remove"></i></button>
												</span>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control" value="Lorem ipsum dolor sit amet, consectetur." readonly>
												<input type="text" class="form-control" placeholder="Nhập giá trị">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default btnRemoveProperty"><i class="fa fa-remove"></i></button>
												</span>
											</div>
										</div>
										<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
							<!-- END Property -->

							<!-- Price -->
							<div role="tabpanel" class="tab-pane" id="price">
								<form action="" method="POST" role="form">
									<div class="row">
										<div class="col-md-4">
											<input type="number" name="" class="form-control" placeholder="Nhập giá gốc">
										</div>
										<div class="col-md-4">
											<input type="number" name="" class="form-control" placeholder="Nhập giá khuyến mãi">
										</div>
										<div class="col-md-4">
											<input type="number" name="" class="form-control" placeholder="Nhập % khuyến mãi">
										</div>
									</div>	
									<div class="row">
										<div class="col-md-6">
											<label for="">Xếp tăng dần</label>
											<div class="radio">
												<label>
													<input type="radio" name="radio" value="" checked="checked">Giá gốc
												</label>
												<label>
													<input type="radio" name="radio" value="" >Giá khuyến mãi
												</label>
												<label>
													<input type="radio" name="radio" value="" >% khuyến mãi
												</label>
											</div>
										</div>
										<div class="col-md-6">
											<label for="">Xếp giảm dần</label>
											<div class="radio">
												<label>
													<input type="radio" name="radio" value="" >Giá gốc
												</label>
												<label>
													<input type="radio" name="radio" value="" >Giá khuyến mãi
												</label>
												<label>
													<input type="radio" name="radio" value="" >% khuyến mãi
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
							</div>
							<!-- END Price -->

							<!-- Promotion -->
							<div role="tabpanel" class="tab-pane" id="promotion">
								<form action="" method="POST" role="form">
									<div class="row">
										<div class="col-md-3">
											<input type="number" name="" id="input" class="form-control" value="" placeholder="Nhập mã">
										</div>
										<div class="col-md-8">
											<input type="text" name="" id="input" class="form-control" value="" placeholder="Nhập tiêu đề">
										</div>
										<div class="col-md-1">
											<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
							<!-- END Promotion -->
						</div>
					</div>
				</div>
			</div>
			<!-- END Search form -->
				
			<div class="row">
				<div class="col-md-2">
					<?= $this->Html->link('Tạo mới sản phẩm',['controller' => 'Product', 'action' => 'form', '_full' => true],['class' => 'btn btn-success','target' => '_blank']); ?>
				</div>
				<div class="col-md-10">
					<div class="wrap-pagination">
						<span>
							<ul class="pagination">
								<li><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</span>
					</div>
				</div>
			</div>				
			<!-- END pagination -->
			<!-- Table list -->
			<div class="wrap-table">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Hình</th>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Giá khuyến mãi</th>
								<th>% khuyến mãi</th>
								<th>Ngày tạo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
								<td>Lorem ipsum dolor sit.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END Table list -->

			<!-- pagination -->
			<div class="wrap-pagination">
				<span>
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</span>
			</div>
			<!-- END pagination -->
		</div>
	</div>
</div>

<!-- Category modal -->
<div class="modal fade" id="category-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chọn danh mục</h4>
			</div>
			<div class="modal-body">
				<div class="checkbox">
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Chọn</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>
<!-- END Category modal -->

<!-- Property modal -->
<div class="modal fade" id="property-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chọn thuộc tính</h4>
			</div>
			<div class="modal-body">
				<div class="checkbox">
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
					<label><input type="checkbox" value="">Lorem ipsum dolor sit amet.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Chọn</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>
<!-- END Property modal -->

<script>
	$(document).ready(function(){
		//menu
		$('#list-menu li').attr('class','');
		$('#list-menu li#menu-product').attr('class','active');
		//#end menu
		
		//Category handle
		$('.btnRemoveCategory').click(function(){
			$(this).closest('.col-md-4').remove();
		});
		//END Category handle
		
		//Property handle
		$('.btnRemoveProperty').click(function(){
			$(this).closest('.input-group').remove();
		});
		//END Property handle
	});
</script>