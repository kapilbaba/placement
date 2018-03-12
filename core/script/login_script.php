<?php
$sql = "SELECT * from users Where email='$uid' and password ='$pwd'";

$result = $conn->query($sql);


if (!$row = $result->fetch_assoc()) {
    $_SESSION['error_msg'] = 'You Are Using Inncorrect E-mail & Password';
    header("location:candidate-login.php");
    die();
} else {
    session_start();
    $_SESSION["authenticated"] = 'true';
    $_SESSION["id"] = $row['id'];
    header('Location:user-dashboard.php');
}