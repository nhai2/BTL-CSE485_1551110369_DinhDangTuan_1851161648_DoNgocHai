<?php
if (!empty($_GET['id'])) {
    // require connection
    require_once 'includes/db.php';

    $dent_id = $_GET['id'];
    $del_query = "DELETE FROM `users` WHERE id = '" . $dent_id . "'";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location:index.php');
    }
}
