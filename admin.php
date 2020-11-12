<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location:login.php");
        exit();
    }
?>

      <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Chào mừng bạn đã đăng nhập thành công ....</h3>
                <a href="index.php">Click vào đây để quay lại Trang chủ</a>
            </div>
        </div>
      </main>