<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 19/03/18
 * Time: 11:20
 */
include "core/database/connection_db.php";
session_start();
$update = $_POST['status_submit'];
$status = $_POST['status'];

echo $_SESSION['id_user'];