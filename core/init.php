<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 05/03/18
 * Time: 16:16
 */

require 'database/connection_db.php';
require 'script/user-authenticated.php';

session_start();
error_reporting(0);
$error = array();
