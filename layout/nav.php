<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/04/18
 * Time: 09:06
 */

if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    echo include 'navbar.php';
}
else{
    echo include 'user-navbar.php';
}
?>