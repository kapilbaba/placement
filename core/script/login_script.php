<?php
$sql = "SELECT * from users Where email='$uid' and password ='$pwd'";

$result = $conn->query($sql);


if (!$row = $result->fetch_assoc()) {
    $_SESSION['error_msg'] = 'You Are Using Inncorrect E-mail & Password';
    header("location:candidate-login");
    die();
} else {
    session_start();
    $_SESSION["authenticated"] = 'true';
    $_SESSION["id"] = $row['id'];
    if(isset($_SESSION['redirectURL'])){
        header('Location:'.$_SESSION['redirectURL']);
    }
    else {
        header('Location:user-dashboard');
    }
}