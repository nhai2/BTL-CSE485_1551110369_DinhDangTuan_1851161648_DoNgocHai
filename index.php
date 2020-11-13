<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
			echo "<script>alert('Bạn đã thêm sản phẩm vào giỏ hàng!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Web Bán Thực Phẩm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/bootstrap-theme.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	<link rel="stylesheet" href="index.css">
	
	<link rel="stylesheet" href="stylesc.css">
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
							<li><a href="gioithieu.php">Giới Thiệu</a></li>
							<li><a href="tintuc.php">Tin tức</a></li>
							<li><a href="lienhe.php">Liên hệ</a></li>
							<li><a href="cuahang.php">Cửa hàng</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Đăng Kí</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
							<li><a href="cart.php" class="cart"><span class="fa fa-shopping-cart cart"></span> Giỏ
									hàng</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav> <!-- end nav -->

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<ul class="sanpham">
					<h4>Danh mục sản phẩm</h4>
					<li><a href="haisannhapkhau.php"><i class="fa fa-arrow-circle-right"></i> Hải sản nhập khẩu</a>
					</li>
					<li><a href="haisantuoi.php"><i class="fa fa-arrow-circle-right"></i> Hải sản tươi</a></li>
					<li><a href="hoaquanhapkhau.php"><i class="fa fa-arrow-circle-right"></i> Hoa quả nhập khâu</a>
					</li>
					<li><a href="raucusach.php"><i class="fa fa-arrow-circle-right"></i> Rau , củ sạch</a></li>
					<li><a href="thittuoi.php"><i class="fa fa-arrow-circle-right"></i> Thịt tươi</a></li>
					<li><a href="donglanh.php"><i class="fa fa-arrow-circle-right"></i> Sản phẩm đông lạnh</a></li>
					<li><a href="traicaytuoi.php"><i class="fa fa-arrow-circle-right"></i> Trái cây tươi</a></li>
					<li><a href="douong.php"><i class="fa fa-arrow-circle-right"></i> Đồ uống</a></li>

				</ul>
			</div> <!-- end menu trai -->

			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="wrapper">
					<div class="slide">
						<div class="slide-item noname out">
							<img src="Image/banner1.png" style="width:100%">
						</div>
						<div class="slide-item noname out">
							<img src="Image/banner2.png" style="width:100%">
						</div>
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div> <!-- end slide -->
				</div> <!-- end wraper -->
			</div> <!-- end col-->
		</div> <!-- end row slide -->
		<div class="row">
			<!-- small banner -->
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 small-banner">
				<img src="Image/banner-1-0x0.png" alt="" class="img-responsive">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 small-banner">
				<img src="Image/banner-3-0x0.png" alt="" class="img-responsive">
			</div>
			<div
				class="col-xs-6 col-xs-push-3 col-sm-6 col-sm-push-3 col-md-push-0 col-lg-push-0 col-md-4 col-lg-4 small-banner">
				<img src="Image/banner-2-0x0.png" alt="" class="img-responsive">
			</div>
			<!-- end small banner -->
		</div>


		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3 class="title">Rau củ quả</h3>
			</div>
		</div>

		<!-- pills -->
		<ul class="nav nav-pills clearfix sanpham_1">
			<li class="active"><a data-toggle="pill" href="#home">Hoa quả nhập khẩu</a></li>
			<li><a data-toggle="pill" href="#menu1">Rau , củ sạch</a></li>
			<li><a data-toggle="pill" href="#menu2">Trái cây tươi</a></li>
		</ul>
		<!-- end pills -->

		<!-- start tab -->
		<div class="tab-content">
			<div id="home" class="tab-pane in active">
				<div class="row">
					<div class="list-fruits">

						
						
						<div class="container">
								<div class="row text-center py-5">
									<?php
										$result = $database->getData();
										while ($row = mysqli_fetch_assoc($result)){
											component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
										}
									?>
								</div>
						</div>

						<div class="row">
							<div class="news-title">
								<div class="title1">
									<h2>Tin tức</h2>
								</div>
							</div>
						</div>



						<div class="row newss">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="news">
									<img src="Image/rauhuuco.jpg" alt="" width="100%">
									<h4>Bí mật dinh dưỡng thú vị từ màu sắc rau quả bạn nên biết</h4>
									<p>Mỗi loại thực vật có một màu sắc đặc trưng và cũng có các chất dinh dưỡng đặc
										trưng khác nhau. Những loại rau, củ quả, có màu sắc càng mạnh thì dinh dưỡng…
									</p>
									<a href="mausac.php">Xem thêm</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="news">
									<img src="Image/oganic.jpg" alt="" width="100%">
									<h4>Phân Biệt thực phẩm hữu cơ và thực phẩm tự nhiên</h4>
									<p>Với việc xuất hiện ngày càng nhiều chuỗi cửa hàng hữu cơ ở Việt Nam Nói Chung và
										ở Thành Phố Hà Nội Nói Riêng ,mọi người vẫn có thể nhầm lẫn hoặc cảm thấy...</p>
									<a href="phanbiet.php">Xem thêm</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="news">
									<img src="Image/tao.jpg" alt="" width="100%">
									<h4>Những loại trái cây nhật đắt như vàng ròng đổ bộ về Việt Nam</h4>
									<p>Nhật Bản là đất nước có nhiều loại hoa quả thuộc hàng ngon nhất thế giới nhưng
										cũng vô cùng đắt đỏ.Đáng chú ý nhiều loại quả do nông dân Nhật Bản trồng được
										đem bán đấu giá...</p>
									<a href="#">Xem thêm</a>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="news-titles">
								<div class="title1">
									<h2>Phản hồi</h2>
								</div>
								<p class="text-center"><i>Phản hồi của những khách hàng đã và đang sử dụng sản phẩm
										trong suốt những năm qua</i></p>
							</div>
						</div>



						<div class="row newss" id="cuoitrang">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="news">
									<img src="Image/kh1.jpg" alt="" width="100%">
									<h4>Nhân Viên - Linh</h4>
									<p>Là 1 người khá kĩ tính tôi luôn chọn lựa những thực phẩm sạch sẽ nhất.Và đây là
										nơi tôi đặt trọn niềm tin của mình</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="news">
									<img src="Image/kh2.jpg" alt="" width="100%">
									<h4>Nhân viên - Thu Phương</h4>
									<p>Tôi rất tin tưởng mua thực phẩm ở Freshfood , mỗi lần công ti có liên hoan tôi
										lại đặt hoa quả ở đây , tôi sẽ ủng hộ freshfood dài dài</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="news">
									<img src="Image/kh3.jpg" alt="" width="100%">
									<h4>Nội Trợ - Hoàng Yến</h4>
									<p>Đối với người làm nội trợ như tôi thì việc thực phẩm xuất xứ rõ nguồn gốc , đảm
										bảo an toàn thực phẩm sẽ rất quan trọng vì vậy tôi rất tin tưởng ở freshfood</p>
								</div>
							</div>
						</div>

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

					</div> <!-- end container -->

					<div class="container-fluid footer">
						<div class="row">
							<div class="footer-left">
								<h2>Liên Hệ</h2>
								<p>Địa Chỉ :  175 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội </p>
								<p>Số điện thoại :0379734977 - 0987481877 - </p>
								<p>Email : dongochai28800@gmail.com</p>
							</div>

						</div>
					</div>

					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
					<script type="text/javascript" src="JS/jquery-3.4.1.js"></script>
					<script type="text/javascript" src="JS/bootstrap.min.js"></script>
					<script type="text/javascript" src="index.js"></script>
</body>

</php>