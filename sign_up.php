<?php
session_start();
include "core/database/connection_db.php";

$fname = $_POST["f_name"];
$lname = $_POST["l_name"];
$email = $_POST["user_email"];
$pass = $_POST["user_password"];
$contact = $_POST["contact_info"];


if (empty($fname) == true || empty($lname) == true || empty($email) == true || empty($pass) == true || empty($contact) == true) {
    $_SESSION['error_empty'] = 'Please Enter The Information';
    header("location:candidate-signup.php");
} else {
    $query = mysqli_query($conn, "select * from users WHERE email='$email'");


    if (mysqli_num_rows($query) > 0) {
        $_SESSION['error_exist'] = 'You Are Already Exist';
        header("location:candidate-signup.php");
        die();

    } else {
        $sql = "INSERT INTO users (firstname, lastname, email, password, contact) VALUES ('$fname', '$lname', '$email', '$pass', '$contact')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            session_start();
            $_SESSION["authenticated"] = 'true';
            $_SESSION["id"] = $last_id;
            header('Location: upload-resume.php');
        }
        $conn->close();
    }
}