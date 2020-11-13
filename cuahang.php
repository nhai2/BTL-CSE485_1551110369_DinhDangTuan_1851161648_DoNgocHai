
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

	


    
      
        <div id="wp-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                  
                        <h3 class="title-1 text-center text-uppercase">Các cửa hàng hoạt động theo quận</h3>
                        <select name="" id="list-district" class="form-control">
                            <option value="0">Chọn Quận/Huyện</option>
                            <?php 
                        require("configch.php");
                        //2.Khai báo truy vấn
                        $sql = "SELECT * FROM district";
                        mysqli_set_charset($conn,'UTF8');
                        $result = mysqli_query($conn,$sql);
                        //3.Xử ký kết quả
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='".$row['id']."'>".$row['district_name']."</option>";
                        }
                      ?>
                    
                   
                        </select>

                        <br>

                      
                       
                          <div class="list-store"></div>
                         
                                                
                   
                     </div>
                </div>
            </div>
            
        </div>
      
       
    </div><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  

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
                      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script.js"></script>
</body>

</php>