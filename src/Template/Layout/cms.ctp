<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		
		<?= $this->Html->css('font-awesome.css') ?>
		<?= $this->Html->css('bootstrap.min.css') ?>
		<?= $this->Html->css('cmsstyle.css') ?>
		<?= $this->Html->css('colorPicker.css') ?>
		<?= $this->Html->script('ckeditor/ckeditor.js') ?>
		<?= $this->Html->script('jquery-3.1.1.min.js') ?>
		<?= $this->Html->script('bootstrap.min.js') ?>
		<?= $this->Html->script('jquery.colorPicker.min.js') ?><!-- http://www.laktek.com/2008/10/27/really-simple-color-picker-in-jquery/ -->
	</head>
	<body>
		<div class="left-content"></div>
		<div class="right-content">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Cake php 3</a>
					</div>
			
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<div class="left-navbar">
							<ul class="nav navbar-nav" id="list-menu">
								<div class="nav-title">
									<a href="#" title=""><span>Cake php 3</span></a>
								</div>
								<div class="nav-profile">
									<?= $this->Html->image('UserImage/default.png',['class' => 'img-circle']); ?>
									<div class="prolife-welcome">
										<span>Chào mừng</span><p>Tien Chuan Pham</p>
										<a href="#" class="edit" title="Sửa thông tin"><i class="fa fa-wrench"></i></i></a>
										<a href="#" class="signout" title="Đăng xuất"><i class="fa fa-power-off "></i></a>
									</div>
								</div>
								<li id="menu-dashboard"><?= $this->Html->link('<i class="fa fa-home"></i>Tổng quát',['controller' => 'Dashboard', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-product"><?= $this->Html->link('<i class="fa fa-cubes"></i>Sản phẩm',['controller' => 'Product', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-user"><?= $this->Html->link('<i class="fa fa-user-o"></i>Tài khoản',['controller' => 'User', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-order"><?= $this->Html->link('<i class="fa fa-list-alt"></i>Đơn hàng',['controller' => 'Order', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-category"><?= $this->Html->link('<i class="fa fa-table"></i>Danh mục',['controller' => 'Category', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-brand"><?= $this->Html->link('<i class="fa fa-microchip"></i>Thương hiệu',['controller' => 'Brand', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-property"><?= $this->Html->link('<i class="fa fa-list-ul"></i></i>Thuộc tính',['controller' => 'Property', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
								<li id="menu-promotion"><?= $this->Html->link('<i class="fa fa-gift"></i>Khuyến mãi',['controller' => 'Promotion', 'action' => 'index', '_full' => true],['escape' => false]); ?></li>
							</ul>
						</div>
						<a class="navbar-text" href="#">Sản phẩm</a>
						<a class="navbar-text child" href="#">Sản phẩm mã: 382</a>
						<a class="navbar-text child" href="#">Sản phẩm mã: 382</a>
						<a class="navbar-text current" href="#">Sản phẩm liên quan</a>
						<!-- <ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul> -->
					</div>
				</div>
			</nav>
			<div class="center-content">
				<?= $this->fetch('content') ?>
			</div>
		</div>
	</body>
</html>