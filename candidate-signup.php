<?php session_start(); ?>
<?php $title = "register"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>

    .form-control {
        padding: 6px 12px;
    }
    .form_page {

background: whitesmoke;
    }

</style>
<div id="page">
    <?php
    if (empty($_SESSION["authenticated"])== true){
        include "layout/navbar.php"; }
    else{
        include 'layout/user-navbar.php';
    }
    ?>
    <section class="innerpage-titlebar">
        <div class="container">
            <div class="titlebar-box">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <h2><?php echo $title;?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <p><a href="/">Home</a> | <a href="#"><span><?php echo $title;?></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="registration">

        <div class="container">
            <div class="form_page">
                <form ROLE="form" action="sign_up" method="post">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="fname">first name</label>
                            <input  type="text" pattern="[A-Za-z]{3}" required="required" class="form-control" id="fname" name="f_name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="lname">last name</label>
                            <input  type="text" pattern="[A-Za-z]{3}" required="required"  class="form-control" id="lname" name="l_name">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input  data-validation="email" required="required" type="email" class="form-control" id="email" name="user_email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="contact">contact no</label>
                            <input required="required" type="text" data-validation="number"  class="form-control" id="contact"
                                   name="contact_info" maxlength="10">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="password">password</label>
                            <input required="required" type="password" class="form-control" id="password"
                                   name="user_password">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="confirm-password">confirm password:</label>
                            <input required="required" type="password" class="form-control" id="confirm-password">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p style="color: red; font-size: small"><?php echo  $_SESSION['error_exist']; $_SESSION['error_exist']= null;  ?></p>
                                <span class="pass_match" style="display: none; color: red; font-size: small; text-align: center">Password Is Not Matched</span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p style="color: black; font-size: small"><div class="col-md-12 col-sm-6 col-xs-12">
                                    <label for="checkbox"><input type="checkbox" name="remember_me" value="1" id="remember_me"> remember me</label>
                                </div>
                                    to the <a href="/terms%20and%20condition">Terms of Use </a>and <a href="/privacy-policy"> Privacy Policy</a> </p>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: center">
                        <button id="btnSubmit" type="submit" class="btn btn-default simple-btn">Register</button>
                    </p>
                    <p style="color: red; text-align: center">
                        <a href="candidate-login">Login here</a>
                    </p>
                </form>
            </div>

        </div>

    </section>


</div>

<?php include "layout/core/script.php"; ?>

</html>
