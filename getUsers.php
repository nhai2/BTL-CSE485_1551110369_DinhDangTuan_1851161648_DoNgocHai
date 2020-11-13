<?php
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    require('configch.php');
    // 2. Khai bao Truy van
    $sql = "SELECT * FROM store_by_districtch WHERE district = '$id'";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $userid = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        $address = $row['address'];

        $users_arr[] = array("id" => $userid, "name" => $name,"phone" =>$phone,"address"=>$address);
    }
    echo json_encode($users_arr);

?>