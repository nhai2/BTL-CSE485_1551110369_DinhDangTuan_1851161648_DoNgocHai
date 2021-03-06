<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/bootstrap-theme.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container first-banner">
		<div class="row">
			<div class="logo">
				<img src="Image/logo_small-1.png" alt="" class="img-responsive">
			</div>
			<div class="bannerr">
					<div class="move">
						<img src="Image/car.png" alt="" class="img-responsive">
						<div>Miễn phí vận chuyển</div>
						<div>Bán kính 100km</div>
					</div>
					<div class="move">
						<img src="Image/mail.png" alt="" class="img-responsive">
						<div>Hỗ trợ 24/7</div>
						<div>Hotline : 0123456789</div>
					</div>
					<div class="move">
						<img src="Image/clock.png" alt="" class="img-responsive">
						<div>Giờ làm việc</div>
						<div>T2-T7 giờ hành chính</div>
					</div>
			</div>
		</div>
	</div> <!-- end banner -->

	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Trang chủ</a></li>
					<li>
						<a href="sanpham.css">Sản Phẩm</a>
					</li>
					<li><a href="gioithieu.php">Giới thiệu</a></li>
					<li><a href="tintuc.php">Tin tức</a></li>
					<li><a href="lienhe.php">Liên hệ</a></li>
					<li><a href="cuahang.php">Cửa hàng</a></li>
				</ul>
				
			</div>
				</div>
			</div>
		</div>
	</nav> <!-- end nav -->

	<div class="container">
		<div class="row">
			<div class="demuc">
				<i class="fa fa-home"></i>
				<span><a href="index.php">Trang Chủ / </a></span>
				<span><a href="#">Tài Khoản / </a></span>
				<span><a href="login.php">Đăng Nhập </a></span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="customer">
				<div class="new-cus">
					<h1>Khách hàng mới</h1>
					<h6>Đăng kí</h6>
					<p>Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt</p>
					<a href="signup.php">Tiếp Tục</a>
				</div><!-- end cus -->
				<div class="old-cus">
					<h1>Khách hàng cũ</h1>
					<p>Tôi là khách hàng cũ</p>
					<form action="process-login.php" method="POST">
						<label for="email">Địa chỉ Email</label> <br>
						<input type="text" name="email" placeholder="Địa chỉ Email" id="checkmail"><br>
						<p style="display: none" id="error">Email Sai</p>
						<label for="password">Mât Khẩu</label> <br>
						<input type="password" name="password" placeholder="Mật khẩu"><br>
						<a href="#">Quên Mật Khẩu ?</a><br>
						<input type="submit" class="btn btn-success" name="login" id="login" value="Đăng Nhập">
						<button class="btn btn-warning" onclick="myfun()">Check</button>
					</form>

				</div><!-- end cus -->
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
		<div class="brand">
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img src="Image/brand1-165x80.png" alt="" width="100%">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img src="Image/brand2-165x80.png" alt="" width="100%">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 ban1">
				<img src="Image/brand1-165x80.png" alt="" width="100%">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 ban1">
				<img src="Image/brand2-165x80.png" alt="" width="100%">
			</div>
			
		</div>
	</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="login.js"></script>
</body>
</php>