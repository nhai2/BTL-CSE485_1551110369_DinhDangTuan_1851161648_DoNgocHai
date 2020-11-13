<!DOCTYPE php>
<php lang="en">
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
	<link rel="stylesheet" href="lienhe.css">
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
						<a href="sanpham.php">Sản Phẩm</a>
					</li>
					<li><a href="gioithieu.php">Giới thiệu</a></li>
					<li><a href="tintuc.php">Tin tức</a></li>
					<li><a href="#">Liên hệ</a></li>
					<li><a href="cuahang.php">Cửa hàng</a></li>
				</ul>
				
			</div>
				</div>
			</div>
		</div>
	</nav> <!-- end nav -->

	<div class="container">
		<div class="row lienhe">
			<div class="demuc">
				<i class="fa fa-home"></i>
				<span><a href="index.php">Trang Chủ / </a></span>
				<span><a href="#">Liên hệ với chúng tôi</a></span>
			</div>
			<h4 style="padding-left: 20px">Thông Tin Liên Hệ</h4>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<form action="" class="form-lh" method="POST">
					<input type="text" placeholder="Tên của bạn"><br>
					<input type="text" placeholder="Địa chỉ Email"><br>
					<textarea name="" id="" placeholder="Nội dung"></textarea><br>
					<input type="submit" value="Gửi đi">
				</form>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="row">
					<div class="adrr">	
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-1" >
							<i class="fa fa-map-marker fa-2x"></i>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-11">
							<h4>Địa Chỉ</h4>
							<p>Số 175, Tây Sơn, Đống Đa, Hà Nội</p>
							<a href="https://www.google.com/maps/place/175+T%C3%A2y+S%C6%A1n,+Trung+Li%E1%BB%87t,+%C4%90%E1%BB%91ng+%C4%90a,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0071842,105.8226325,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac8109765ba5:0xb3be79f8f64a59f9!8m2!3d21.0066169!4d105.8249935">Xem bản đồ Google</a>
						</div>
					</div>
					<div class="adrr">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-1" >
							<i class="fa fa-phone fa-2x"></i>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-11">
							<h4>Điện thoại</h4>
							<p>0123456789</p>
							<p>T2-CN : 8h00-18h00</p>
						</div>
					</div>

					<div class="adrr">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-1" >
							<i class="fa fa-envelope"></i>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-11">
							<h4>Email</h4>
							<p>contact@gmail.com</p>
	
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end contact -->
		<div class="row">
			<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=175%20t%C3%A2y%20s%C6%A1n&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net">utorrent bittorrent</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
		</div> <!-- end map -->

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
	</div> <!-- end banner -->









	


















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
</body>
</php>