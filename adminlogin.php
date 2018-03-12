<?php

include "core/database/connection_db.php";

$submit = $_POST['submit'];
$uid = $_POST['email'];
$pwd = $_POST['password'];

if (isset($submit)) {

    if (empty($uid) == true || empty($pwd) == true) {
        $_SESSION=['id pass is not true'];
    }
    else{
        $sql = "SELECT * from admin Where email='$uid' and password ='$pwd'";

        $result = $conn->query($sql);
        if (!$row = $result->fetch_assoc()) {
            $_SESSION['error_msg'] = 'You Are Using Inncorrect E-mail & Password';
            header("location:admin-login.php");
            die();
        } elseif ($_SESSION[id] = $row[id]) {
            session_start();
            $_SESSION["authenticated"] = 'true';

            header('Location: admin.php');
        } else {
            header('Location: admin-login.php');
        }

    }
}



