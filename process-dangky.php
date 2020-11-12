<?php
    $errors = array();

    $name = $_POST['firstname'];
	if (empty($name)) {
		$errors[] = 'bạn đã quên nhập tên.';
    }
    $email = $_POST['email'];
	if (empty($email)) {
		$errors[] = 'bạn đã quên nhập email.';
    }
    
    $phone = $_POST['phone'];
	if (empty($email)) {
		$errors[] = 'bạn đã quên nhập số điện thoại.';
    }
    
    $addr = $_POST['addr'];
	if (empty($email)) {
		$errors[] = 'bạn đã quên nhập địa chỉ.';
	}

    $password1 = $_POST['password'];
    $password2 = $_POST['repassword'];
    if (!empty($password1)) {
    if ($password1 !== $password2) { 
        $errors[] = 'Mật khẩu của bạn không khớp nhau.';
    } 
    } else {
    $errors[] = 'bạn đã quên nhập mật khẩu.';
    }

    if (empty($errors)) {
        require("config.php");
        // B2: Khai bao truy van
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
        // B3: Kiem tra ban ghi co ton tai
        if(mysqli_num_rows($result)>0){
            echo "Người dùng và email đã được sử dụng. Vui Lòng sử dụng email khác ! ";
        }else{
            $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
            $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
            $sql = "INSERT INTO users (name, email, phone, address, password, activation_code) 
                    VALUES ('$name','$email','$phone', '$addr', '$hashed_passcode', '$activation_code')";
            if(mysqli_query($conn, $sql)){
                require_once "contact.php";
                $m = new sendMail();

                $to = $email;
                $tieudethu = "[tuandd53@wru.vn] Please verify your email address";           
                $noidungthu = "Bạn đã đăng kí tài khoản tại tuandd53@wru.vn, để sử dụng tài khoản, vui lòng nhấp vào liên kết
                sau đây: <a href='http://localhost/project/active.php".$activation_code."'>Click Here</a>";
                
                //dùng mail test, đừng dùng mail chính thức
                $from = "tuandd53@wru.vn";
            
                //pass email gmail
                $p = "0989978472"; //thay_mat_khau_cua_ban_vao_day
                $m -> sendMailFromLocalhost($to, $from, $tennguoigui="tuandd53", $tieudethu, $noidungthu, $from, $p, $error);
                header("Location: dangky-successful.php");
                exit();
            }else{
                echo "Lỗi. Kiểm tra lại câu truy vấn ".$sql;
            }
        }
    }else{
        echo "Hiển thị lỗi";
    }
?>