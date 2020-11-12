<?php

if (isset($_POST['submit']) && $_POST['submit'] != '') {
    // require the db connection
    require_once 'includes/db.php';

    $first_name = (!empty($_POST['name'])) ? $_POST['name'] : '';
    $email = (!empty($_POST['email'])) ? $_POST['email'] : '';
    $course = (!empty($_POST['phone'])) ? $_POST['phone'] : '';
    $address = (!empty($_POST['address'])) ? $_POST['address'] : '';
    $id = (!empty($_POST['id'])) ? $_POST['id'] : '';

    if (!empty($id)) {
        // update the record
        $stu_query = "UPDATE `users` SET name='" . $first_name . "',email= '" . $email . "', phone='" . $course . "' ,address= '" . $address . "' WHERE id ='" . $id . "'";
        $msg = "update";
    } else {
        // insert the new record
        $stu_query = "INSERT INTO `users` (name,email,phone,address) VALUES ('" . $first_name . "', '" . $email . "', '" . $course . "', '" . $address . "' )";
        $msg = "add";
    }

    $result = mysqli_query($conn, $stu_query);

    if ($result) {
        header('location:index.php?msg=' . $msg);
    }

}

if (isset($_GET['id']) && $_GET['id'] != '') {
    // require the db connection
    require_once 'includes/db.php';

    $stu_id = $_GET['id'];
    $stu_query = "SELECT * FROM `users` WHERE id='" . $stu_id . "'";
    $stu_res = mysqli_query($conn, $stu_query);
    $results = mysqli_fetch_row($stu_res);
    $first_name = $results[1];
    $email = $results[2];
    $course = $results[3];
    $address = $results[4];

} else {
    $first_name = "";
    $email = "";
    $course = "";
    $address = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partial/head.php';?>
<body>
   <?php include 'partial/nav.php';?>

    <div class="container">
        <div class="formdiv">
        <div class="info"></div>
        <form method="POST" action="">
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Tên</label>
                <div class="col-sm-7">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $first_name; ?>">
                </div>
            </div>
            <div class="form-group row">
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-7">
                <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Số điện thoại</label>
                <div class="col-sm-7">
                <input type="text" value="<?php echo $course; ?>" name="phone" class="form-control" id="phone" placeholder="Số Điện Thoại">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Địa chỉ</label>
                <div class="col-sm-7">
                <input type="text" value="<?php echo $address; ?>" name="address" class="form-control" id="address" placeholder="Địa chỉ">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-7">
                <input type="hidden" name="student_id" value="<?php echo $stu_id; ?>">
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>