<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/bootstrap-theme.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
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
							<li><a href="#">Tin tức</a></li>
							<li><a href="lienhe.php">Liên hệ</a></li>
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
				<span><a href="#">Sản Phẩm / </a></span>
				<span><a href="#">Kiwi </a></span>
				<div id="succesadd">Thành Công : Bạn Đã Thêm Kiwi Xanh Vào Giỏ Hàng
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 imgsp">
					<img src="Image/kiwiweb.jpg" alt="" width="100%">
					<div class="row danhgiasp	">
						<button>Mô Tả</button>
						<button>Đánh Giá(0)</button>
					</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 contentsp">
					<h3><b>Kiwi Xanh</b></h3>
					<span class="star">&#9734;</span>
					<span class="star">&#9734;</span>
					<span class="star">&#9734;</span>
					<span class="star">&#9734;</span>
					<span class="star">&#9734;</span>
					<span class="danhgiasp">Viết Đánh Giá</span>
					<p class="ma">Mã Sản Phẩm : <b>KX433865</b></p>
					<p class="ttrang">Tình Trạng : <span>Còn trong kho</span></p>
					<p class="gia">119.000</p>
					<hr>	<hr>
					<span><b>Số Lượng</b></span>
					<span class="controls">
						<span id="subsp">-</span>
						<span id="numbersp">1</span>
						<span id="addsp">+</span>
					</span>
					<button id="add">Thêm Vào Giỏ</button>
					<div>
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-skype"></i>
					</div>
				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 left-menu">
				<ul class="sanpham sanpham2">
					<h4>Sản Phẩm Khuyễn Mãi</h4>
					<li>
						<div class="row hang1">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<img src="Image/susu2.jpg" alt="" width="100%">
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<p>Su Su</p>
								<p>28500</p>
								<p><del>30000</del></p>
							</div>
						</div>
						<div class="row hang1">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<img src="Image/mận.jpg" alt="" width="100%">
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<p>Mận Sapa</p>
								<p>37.050</p>
								<p><del>39000</del></p>
							</div>
						</div>
						<div class="row hang1">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<img src="Image/tomhum.png" alt="" width="100%">
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<p>Tôm Hùm Alaska</p>
								<p>949.050</p>
								<p><del>999000</del></p>
							</div>
						</div>



					</li>

				</ul>
			</div> <!-- end menu trai -->
		</div> <!-- end row -->
		<div class="row">
			<div class="news-title">
				<div class="title1">
					<h2>Sản phẩm liên quan</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="list-fruits">
				<div class="col-xs-6 col-sm-4 col-md- col-lg-3">
					<div class="one-fruit">
						<a href="#"><img src="Image/camweb.jpg" alt="" width = "100%"></a>
						<a href="#">Cam Mỹ</a>
						<p>59.000 / KG</p>
						<div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 xuatxu">
							<br><p>Tên : Cam Mỹ</p>
							<p>Xuất Xứ : Mỹ</p>
							<p>Còn Hàng</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list-fruits">
				<div class="col-xs-6 col-sm-4 col-md- col-lg-3">
					<div class="one-fruit">
						<a href="#"><img src="Image/mangcu.jpg" alt="" width = "100%"></a>
						<a href="#">Măng Cụt</a>
						<p>49.000 / KG</p>
						<div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 xuatxu">
							<br><p>Tên : Măng Cụt</p>
							<p>Xuất Xứ : Việt Nam</p>
							<p>Còn Hàng</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list-fruits">
				<div class="col-xs-6 col-sm-4 col-md- col-lg-3">
					<div class="one-fruit">
						<a href="#"><img src="Image/mamxoi.jpg" alt="" width = "100%"></a>
						<a href="#">Mâm Xôi Đen</a>
						<p>329.000 / KG</p>
						<div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 xuatxu">
							<br><p>Tên : Mâm Xôi Đen</p>
							<p>Xuất Xứ : Úc</p>
							<p>Còn Hàng</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list-fruits">
				<div class="col-xs-6 col-sm-4 col-md- col-lg-3">
					<div class="one-fruit">
						<a href="#"><img src="Image/chanhvang.jpg" alt="" width = "100%"></a>
						<a href="#">Chanh Vàng</a>
						<p>79000 / KG</p>
						<div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 xuatxu">
							<br><p>Tên : Chanh Vàng</p>
							<p>Xuất Xứ : Úc</p>
							<p>Còn Hàng</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->

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
	<br>

























	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script src="sanphamkiwi.js"></script>
</body>
</php>