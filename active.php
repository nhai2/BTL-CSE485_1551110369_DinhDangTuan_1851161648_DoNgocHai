<?php
    // http://localhost/project/active.php7c2528e822d7315a
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        require("config.php");
        // B2: Khai bao truy van:
        $sql = "SELECT * FROM users WHERE activation_code = '$code'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $sql = "UPDATE users SET status = 1 WHERE activation_code = '$code'";
            if(mysqli_query($conn,$sql)){
                header("Location:login.php");
                exit();
            }else{
                echo "Liên kết không tồn tại, vui lòng liên hệ với quản trị Web";
            }
        }
    }

?>