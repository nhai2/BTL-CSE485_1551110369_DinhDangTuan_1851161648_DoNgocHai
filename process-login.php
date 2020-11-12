<?php
    $errors = array();

    $email = $_POST['email'];
	if (empty($email)) {
		$errors[] = 'Bạn đã quên đăng nhập email.';
	}

    $password = $_POST['password'];
    
    if (empty($password)) {
    $errors[] = 'Bạn chưa đăng nhập password.';
    }

    if (empty($errors)) {
        require("config.php");
        // B2: Khai bao truy van
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_assoc($result);// tra ve tat ca cac thuoc tinh trong object de tra ve ket qua
            if(password_verify($password, $row['password']))
            {
                session_start();
                $_SESSION['username'] = $email;
                header("Location:admin.php");
                exit();
            }
            else{
                echo "Mật khẩu không chính xác";
            }
        }
           else{
            echo "Không tồn tại tài khoản hoặc tài khoản chưa được kích hoạt";
        }

        }else{
            echo "Hien thi loi";
    }
?>