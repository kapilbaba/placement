<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 20/03/18
 * Time: 10:37
 */
session_start();
include "core/script/admin-auth.php";
include "core/database/connection_db.php";
$user_id = $_POST['user_id'];
$status =$_POST['status'];


$sql = "UPDATE users SET candidate_status='$status' WHERE id=$user_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully $user_id <a href='admin.php'>go home</a>" ;
} else {
    echo "Error updating record: " . $conn->error;
}



