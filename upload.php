<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 12/03/18
 * Time: 10:53
 */
include "core/database/connection_db.php";
session_start();

$id = $_SESSION['id'];
$target_dir = "resumes/";
$target_file = $target_dir . basename($_FILES["resume_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["upload"])) {
    if ($check !== false) {
        if (move_uploaded_file($_FILES["resume_upload"]["tmp_name"], $target_file)) {
            $sql = "update users set resumes= '$target_file' WHERE id='$id'";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['upload-done']="your resume is upload successfully ";
                header("location:user-dashboard.php");
            } else {
                $_SESSION['upload-error']="your resume is upload failed  ";
                header("location:user-dashboard.php");
            }

            $conn->close();
        } else {
            die();
        }
    }
}