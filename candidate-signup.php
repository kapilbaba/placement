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

    #pswd_info h4 {
        margin: 0 0 10px 0;
        padding: 0;
        font-weight: normal;
    }

    #pswd_info::before {
        content: "\25B2";
        position: absolute;
        top: -12px;
        left: 45%;
        font-size: 14px;
        line-height: 14px;
        color: #ddd;
        text-shadow: none;
        display: block;
    }

    .invalid {

        padding-left: 22px;
        line-height: 24px;
        color: #ec3f41;
    }

    .valid {

        padding-left: 22px;
        line-height: 24px;
        color: #3a7d34;
    }

    #pswd_info {
        display: none;
    }
</style>
<div id="page">
    <?php
    if (empty($_SESSION["authenticated"]) == true) {
        include "layout/navbar.php";
    } else {
        include 'layout/user-navbar.php';
    }
    ?>
    <section class="innerpage-titlebar">
        <div class="container">
            <div class="titlebar-box">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <p><a href="/">Home</a> | <a href="#"><span><?php echo $title; ?></span></a></p>
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
                            <input type="text" required="required" class="form-control" id="fname" name="f_name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="lname">last name</label>
                            <input type="text" required="required" class="form-control" id="lname" name="l_name">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input data-validation="email" required="required" type="email" class="form-control"
                                   id="email" name="user_email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="contact">contact no</label>
                            <input required="required" type="text" data-validation="number" class="form-control"
                                   id="contact"
                                   name="contact_info" maxlength="10">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="password">password</label>
                            <input required="required" type="password" class="form-control" id="password"
                                   name="user_password">
                        </div>


                    </div>


                    <div id="pswd_info">
                        <h4>Password must meet the following requirements:</h4>
                        <ul>
                            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                            <li id="number" class="invalid">At least <strong>one number</strong></li>
                            <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="confirm-password">confirm password:</label>
                            <input required="required" type="password" class="form-control" id="confirm-password">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p style="color: red; font-size: small"><?php echo $_SESSION['error_exist'];
                                    $_SESSION['error_exist'] = null; ?></p>
                                <span class="pass_match"
                                      style="display: none; color: red; font-size: small; text-align: center">Password Is Not Matched</span>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p style="color: black; font-size: small">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <label for="checkbox"><input required type="checkbox" name="remember_me"
                                                                 id="remember_me"> By proceeding you agree to the<a
                                                href="/terms%20and%20condition">Terms of Use </a>and <a
                                                href="/privacy-policy"> Privacy Policy</a></label>
                                </div>
                                </p>
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
