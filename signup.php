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
	<link rel="stylesheet" href="./index.css">
	<link rel="stylesheet" href="./login.js">
	<link rel="stylesheet" href="./signup.css">
</head>
<body>
	<div class="container first-banner">
		<div class="row pad">
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
				<div class="row pad">
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
					<li class="dropdown">
						<a href="sanpham.php">Sản Phẩm</a>
					</li>
					<li><a href="gioithieu.php">Giới Thiệu</a></li>
					<li><a href="tintuc.php">Tin tức</a></li>
					<li><a href="lienhe.php">Liên hệ</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
				</ul>
				
			</div>
				</div>
			</div>
		</div>
	</nav> <!-- end nav -->
	
	<div class="container">
		<div class="row pad">
			<div class="demuc">
				<i class="fa fa-home"></i>
				<span><a href="index.php">Trang Chủ / </a></span>
				<span><a href="#">Tài Khoản / </a></span>
				<span><a href="#">Đăng Ký </a></span>
			</div>
			<h1>Đăng Kí Tài Khoản</h1>
			<p>Nếu bạn đã đăng ký tài khoản với chúng tôi, vui lòng đăng nhập.</p>
		</div>
	</div>

	<div class="container">
			<form action="process-dangky.php" method="POST">
				<fieldset class="register">
					<legend>Chi tiết tài khoản</legend>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="firstname">Họ & Tên Đệm</label><span>(*)</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<!-- <input type="text" name="firstname" placeholder="Họ & Tên đệm" id="first-name"> -->
							<input type="text" name="firstname" onkeydown="this.style.backgroundColor='#FF9999'" onkeyup="this.style.backgroundColor='#00DD00'" placeholder="Họ & Tên đệm" id="first-name"><br>
							<div id="error_1"></div>
						</div>

					</div>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="email">Email</label><span>(*)</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<!-- <input type="text" name="email" placeholder="Email" id="mail"> -->
							<input type="text" name="email" onkeydown="this.style.backgroundColor='#FF9999'" onkeyup="this.style.backgroundColor='#00DD00'" placeholder="Email" id="email"><br>
							<div id="error_3"></div>
						</div>
					</div>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="phone">Điện Thoại</label><span>(*)</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<!-- <input type="text" name="phone" placeholder="Điện Thoại" id="phone-number"> -->
							<input type="text" name="phone" onkeydown="this.style.backgroundColor='#FF9999'" onkeyup="this.style.backgroundColor='#00DD00'" placeholder="Điện Thoại" id="phone-number"><br>
							<div id="error_4"></div>
						</div>
					</div>
				</fieldset> <!-- end chi tiết -->

				<fieldset class="register">
					<legend>Địa chỉ</legend>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="addr">Địa chỉ</label><span>(*)</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<!-- <input type="text" name="addr" placeholder="Địa chỉ" id="address2"> -->
							<input type="text" name="addr" onkeydown="this.style.backgroundColor='#FF9999'" onkeyup="this.style.backgroundColor='#00DD00'" placeholder="Địa chỉ" id="address2"><br>
							<div id="error_5"></div>
						</div>
					</div>
				</fieldset> <!-- end địa chỉ -->
				<fieldset class="register">
					<legend>Mật Khẩu</legend>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="password">Mật Khẩu</label><span>(*)</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<!-- <input type="password" name="password" placeholder="Mật Khẩu" id="password1"> -->
							<input type="password" name="password" onkeydown="this.style.backgroundColor='#FF9999'" onkeyup="this.style.backgroundColor='#00DD00'" placeholder="Mật Khẩu" id="password1"><br>
							<div id="error_7"></div>
						</div>
					</div>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="repassword">Nhập Lại Mật Khẩu</label><span>(*)</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<!-- <input type="password" name="repassword" placeholder="Nhập Lại Mật Khẩu" id="password2"> -->
							<input type="password" name="repassword" onkeydown="this.style.backgroundColor='#FF9999'" onkeyup="this.style.backgroundColor='#00DD00'" placeholder="Nhập Lại Mật Khẩu" id="password2"><br>
							<div id="error_8"></div>
						</div>
					</div>
				</fieldset> <!-- end mật khẩu -->


				<fieldset class="register">
					<legend>Đăng Kí Nhận Tin</legend>
					<div class="row pad">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<label for="regis">Đăng Kí Nhận Tin </label>
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
							<input type="radio" name="regis">Có
							<input type="radio" name="regis">Không
						</div>
					</div>
				</fieldset> <!-- Nhận tin -->

				<label for="chinhsach" style="font-weight: 100;">Tôi đã đọc và đồng ý với <b>Chính sách bảo mật</b></label>
				<input type="checkbox" name="chinhsach" id="chinhsach"><br>
				<input type="submit" class="btn btn-success" name="dangky" id="dangky" value="Đăng Ký">
				
			</form>
			<button class="btn btn-success" id="checkinfo" style="margin-top: 10px;">Check Thông Tin</button>	
			
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>












	<!-- <div class="container">
		<div class="row pad">
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
	</div> -->









	


















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="signup.js"></script>
</body>
</php>