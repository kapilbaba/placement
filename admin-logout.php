<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 10/03/18
 * Time: 13:40
 */
session_start();
session_destroy();
header("location:admin-login.php");