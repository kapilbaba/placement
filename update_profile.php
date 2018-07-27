<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 11/03/18
 * Time: 13:14
 */

include "core/database/connection_db.php";
include "core/script/user-authenticated.php";
session_start();
$update = $_POST['update'];

$uid = $_POST['user_email'];
$pwd = $_POST['user_password'];
$contact = $_POST['contact_info'];

$id = $_SESSION['id'];

if (isset($update)) {


    $sql = "UPDATE users SET  email='$uid', password='$pwd',contact='$contact' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('location:user-dashboard.php');
        $_SESSION['success'] ="Record updated successfully";
    } else {
        header('location:user-dashboard.php');
        $_SESSION['not-success'] ="Record update failure";
    }

}



