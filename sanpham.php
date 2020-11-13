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
	<link rel="stylesheet" href="sanpham.css">
	<link rel="stylesheet" href="sanphamkiwi.css">
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
								<li><a href="#">Sản Phẩm</a></li>
							</li>
							<li><a href="gioithieu.php">Giới thiệu</a></li>
							<li><a href="tintuc.php">Tin tức</a></li>
							<li><a href="lienhe.php">Liên hệ</a></li>
							<li><a href="cuahang.php">Cửa hàng</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="giohang.php"  class="cart"><span class="fa fa-shopping-cart cart"></span> Giỏ hàng</a></li>
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
				<span><a href="#">Sản Phẩm </a></span>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 left-menu">
				<ul class="sanpham">
					<h4>Danh mục sản phẩm</h4>
					<li><a href="haisannhapkhau.php"><i class="fa fa-arrow-circle-right"></i> Hải sản nhập khẩu</a></li>
					<li><a href="haisantuoi.php"><i class="fa fa-arrow-circle-right"></i> Hải sản tươi</a></li>
					<li><a href="hoaquanhapkhau.php"><i class="fa fa-arrow-circle-right"></i> Hoa quả nhập khâu</a></li>
					<li><a href="raucusach.php"><i class="fa fa-arrow-circle-right"></i> Rau , củ sạch</a></li>
					<li><a href="thittuoi.php"><i class="fa fa-arrow-circle-right"></i> Thịt tươi</a></li>
					<li><a href="donglanh.php"><i class="fa fa-arrow-circle-right"></i> Sản phẩm đông lạnh</a></li>
					<li><a href="traicaytuoi.php"><i class="fa fa-arrow-circle-right"></i> Trái cây tươi</a></li>
					<li><a href="douong.php"><i class="fa fa-arrow-circle-right"></i> Đồ uống</a></li>
				</ul>
				<ul class="sanpham">
					<h4>Thương Hiệu</h4>
					<li><a href="chile.php"><i class="fa fa-circle"></i> Chile	</a></li>
					<li><a href="nhatban.php"><i class="fa fa-circle"></i> Nhật Bản</a></li>
					<li><a href="uc.php"><i class="fa fa-circle"></i> Úc</a></li>
					<li><a href="usa.php"><i class="fa fa-circle"></i> USA</a></li>
					<li><a href="newz.php"><i class="fa fa-circle"></i> New Zealand</a></li>
					<li><a href="hanquoc.php"><i class="fa fa-circle"></i> Hàn Quốc</a></li>
				</ul>

				<ul class="sanpham sanpham2">
					<h4>Sản Phẩm Khuyễn Mãi</h4>
					<li>
						<div class="row hang1">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<a href="sanphamsusu.php"><img src="Image/susu2.jpg" alt="" width="100%"></a>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<p>Su Su</p>
								<p>28500đ</p>
								<p><del>3000đ0</del></p>
							</div>
						</div>
						<div class="row hang1">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<a href="sanphamman.php"><img src="Image/mận.jpg" alt="" width="100%"></a>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<p>Mận Sapa</p>
								<p>37.050đ</p>
								<p><del>39000đ</del></p>
							</div>
						</div>
						<div class="row hang1">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<a href="tomhum.php"><img src="Image/tomhum.png" alt="" width="100%"></a>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<p>Tôm Hùm Alaska</p>
								<p>949.050đ</p>
								<p><del>999000đ</del></p>
							</div>
						</div>



					</li>

				</ul>
			</div> <!-- end menu trai -->

			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="row">
					<div class="list-fruits">
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							<div class="one-fruit">
								<a href="sanphamkiwi.php"><img src="Image/kiwiweb.jpg" alt="" width = "100%"></a>
								<a href="#">Kiwi Xanh</a>
								<p>119.000 / KG</p>
								<div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 xuatxu">
									<p>Tên : Kiwi Xanh </p>
									<p>Xuất Xứ : Pháp</p>
									<p>Còn Hàng</p>
								</div>

							</div>
						</div>
					</div>
					<div class="list-fruits sale">
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							<div class="one-fruit">
								<a href="sanphamcammy.php"><img src="Image/camweb.jpg" alt="" width = "100%"></a>
								<a href="#">Cam Mỹ</a>
								<p>59.000 / KG</p>
								<div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 xuatxu">
									<br><p>Tên : Cam Mỹ </p>
									<p>Xuất Xứ : Mỹ</p>
									<p>Còn Hàng</p>
								</div>

							</div>
						</div>
					</div>
	
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						<div class="dieuhuong" style="margin: 0 auto">
							<a class="btn btn-success">1</a>
							<a href="sanpham2.htm" class="btn btn-default">2</a>
							<a href="sanpham3.php" class="btn btn-default">3</a>
							<a href="sanpham4.php" class="btn btn-default">4</a>
							<a href="sanpham2.htm" class="btn btn-default">&gt;</a>
							<a href="sanpham4.php" class="btn btn-default">&gt;&gt;</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<br>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="JS/bootstrap.min.js"></script>
		<script type="text/javascript" src="index.js"></script>
	</body>
	</php>