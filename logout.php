<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 06/03/18
 * Time: 16:18
 */
session_start();
session_destroy();
header("location:index.php");