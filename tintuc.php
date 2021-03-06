<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/bootstrap-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="sanpham.css">
	<link rel="stylesheet" href="tintuc.css">
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
					<li><a href="gioithieu.php">Liên hệ</a></li>
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
				<span><a href="#">Tin tức</a></span>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 left-menu">
				<div class="sanpham">
					<h4>Danh mục tin tức</h4>
					<div><a href="tintuc.php"><i class="fa fa-arrow-circle-right"></i>Tin tức</a></div>
				</div>
				<div class="sanpham small-news">
					<h4 style="margin-top: 30px">Tin Tức</h4>
					<div class="row hang1">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="Image/mausac.jpg" alt="" width="100%">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<a href="#">Bí mật dinh dưỡng thú vị từ màu sắc rau quả bạn nên biết</a>
							<p>5/11/2019</p>
						</div>
					</div>

					<div class="row hang1">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="Image/huuco.jpg" alt="" width="100%">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<a href="#">Phân biệt Thực phẩm Hữu cơ và thực phẩm Tự nhiên</a>
							<p>3/11/2019</p>
						</div>
					</div>

					<div class="row hang1">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="Image/duahau2.jpg" alt="" width="100%">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<a href="#">Những loại trái cây Nhật đắt như vàng ròng đổ bộ về Việt Nam</a>
							<p>4/11/2019</p>
						</div>
					</div>
				</div>

			</div> <!-- end menu trai -->

			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<h2>Tin Tức</h2>
				<div class="row tintuc">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 cot1">
						<img src="Image/cherry.jpg" alt="" width="100%">
					</div>
					
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 cot2">
						<a href="#">Tại sao Cherry tại Việt Nam lại có giá thành cao hơn rất nhiều các loại trái cây nhập khẩu</a>
						<div class="date-view">
							<i class="fa fa-calendar"></i><span>5/11/2019&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
							<i class="fa fa-eye"></i><span>22451</span>
						</div>
						<p>Cherry là sản phẩm có giá thành khá đắt nhưng lại là lựa chọn hàng đầu của nhiều người Việt Nam khi đem đi biếu tặng và sử dụng trong gia đình. Đa số…</p>
					</div>

				</div>
				<div class="row tintuc">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cot1">
						<img src="Image/giohoa.jpg" alt="" width="100%">
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cot2">
						<a href="#">Nhập khẩu rau quả vượt mốc 1 tỷ USD, Thái Lan chiếm 60% thị phần</a>
						<div class="date-view">
							<i class="fa fa-calendar"></i><span>4/11/2019&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
							<i class="fa fa-eye"></i><span>14222</span>
						</div>
						<p>Theo báo cáo từ Bộ NN&PTNT, giá trị xuất khẩu hàng rau quả tháng 9 năm 2017 ước đạt 294 triệu USD, đưa giá trị xuất khẩu hàng rau quả 9 tháng đầu năm…</p>
					</div>

				</div>
				<div class="row tintuc">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cot1">
						<img src="Image/duahau2.jpg" alt="" width="100%">
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cot2">
						<a href="#">Những loại trái cây Nhật đắt như vàng ròng đổ bộ về Việt Nam</a>
						<div class="date-view">
							<i class="fa fa-calendar"></i><span>4/11/2019&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
							<i class="fa fa-eye"></i><span>8544</span>
						</div>
						<p>Nhật Bản là đất nước có nhiều loại hoa quả có chất lượng thuộc hàng ngon nhất thế giới nhưng cũng vô cùng đắt đỏ. Đáng chú ý, nhiều loại quả do nông dân</p>
					</div>

				</div>
				<div class="row tintuc">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cot1">
						<img src="Image/huuco.jpg" alt="" width="100%">
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cot2">
						<a href="#">Phân biệt Thực phẩm Hữu cơ và thực phẩm Tự nhiên</a>
						<div class="date-view">
							<i class="fa fa-calendar"></i><span>3/11/2019&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
							<i class="fa fa-eye"></i><span>25477</span>
						</div>
						<p>Với việc xuất hiện ngày càng nhiều chuỗi cửa hàng thực phẩm hữu cơ (Organic Foods) ở Việt Nam nói chung và Thành phố Hồ Chí Minh nói riêng, mọi người…</p>
					</div>

				</div>
				<div class="row tintuc">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cot1">
						<img src="Image/mausac.jpg" alt="" width="100%">
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cot2">
						<a href="#">Bí mật dinh dưỡng thú vị từ màu sắc rau quả bạn nên biết</a>
						<div class="date-view">
							<i class="fa fa-calendar"></i><span>5/11/2019&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
							<i class="fa fa-eye"></i><span>13546</span>
						</div>
						<p>Mỗi loại thực vật có một màu sắc đặc trưng và cũng có các chất dinh dưỡng đặc trưng khác nhau. Những loại rau, củ quả, có màu sắc càng mạnh thì dinh dưỡng…</p>
					</div>

				</div>
				<div class="row tintuc">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cot1">
						<img src="Image/organic.jpg" alt="" width="100%">
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cot2">
						<a href="#">Thực phẩm hữu cơ là gì?</a>
						<div class="date-view">
							<i class="fa fa-calendar"></i><span>5/11/2019&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
							<i class="fa fa-eye"></i> <span>18425</span>
						</div>
						<p>Theo J.I Rodale – cha đẻ của ngành trồng trọt hữu cơ ở Mỹ thì Thực phẩm hữu cơ là nông sản không dùng thuốc trừ sâu và phân bón hóa học. Xuất phát từ…</p>
					</div>

				</div>


			</div>
	</div>
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
<br>






	


















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
</body>
</php>