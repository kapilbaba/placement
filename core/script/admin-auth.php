<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 09/03/18
 * Time: 14:38
 */

session_start();
if (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location:admin-login.php');
}
?>
