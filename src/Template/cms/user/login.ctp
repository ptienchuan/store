<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>title</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<?= $this->Html->css('font-awesome.css') ?>
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('style.css') ?>
	<?= $this->Html->script('jquery-3.1.1.min.js') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>
</head>
<body>
	<div class="container">
		<div class="login-title">
			<p>Cake php 3</p>
		</div>
		<div class="login-form">
			<div class="user-img">
				<img src="/e_commerce/webroot/img/UserImage/default.png" class="img-circle" alt="">
			</div>
			<form action="" method="POST" role="form">
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Tên đăng nhập">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="" placeholder="Mật khẩu">
				</div>
				<div class="form-group" style="margin-bottom: 30px;">
					<button type="submit" class="btn btn-primary">Đăng nhập</button>
					<?= $this->Html->link('Khôi phục mật khẩu!',['controller' => 'User', 'action' => 'restorePassword', '_full' => true]); ?>
				</div>
			</form>
		</div>
	</div>
</body>
</html>