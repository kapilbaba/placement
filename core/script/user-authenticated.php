<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 03/03/18
 * Time: 09:55
 */
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
    header('Location: candidate-login');
}
?>
