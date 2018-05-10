<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 23/03/18
 * Time: 08:49
 */

$title = "user-job confirmed";
include "core/script/user-authenticated.php";
session_start();
?>


<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
   body{
        width: 100%;
        background: url('/images/jobconfirm.jpeg')!important;
        background-attachment: fixed!important;
        background-position: center!important;
        background-repeat: no-repeat!important;
        background-size: cover!important;
    }
</style>




    <div class="confirmed">



        <div style="margin-top: 20%" class="container">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <h3 style="text-align: center">
                Your job is confirmed and sent to our HR Head.
                    <a href="user-dashboard">Go Back To your profile</a>
                </h3>

            </div>
        </div>

    </div>






</html>
