<?php

include "core/database/connection_db.php";

$submit = $_POST['submit'];
$remember_me = $_POST['remember_me'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if (isset($submit)) {

    if (empty($uid) == true || empty($pwd) == true) {
        echo "plese enter your email and password";
    } elseif (isset($remember_me)) {
        if ($_POST["remember_me"] == '1' || $_POST["remember_me"] == 'on') {
            $hour = time() + 3600 * 24 * 30;
            setcookie('uid', $uid, $hour);
            setcookie('pwd', $pwd, $hour);
            include "core/script/login_script.php";
        }
    } else {
        include "core/script/login_script.php";
    }


}



