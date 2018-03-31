<?php session_start(); ?>
<?php $title = "register"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
    .form-control {
        padding: 6px 12px;
    }

    #page {
        background: url("/images/form_img.jpeg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover
    }
</style>
<div id="page">

    <?php include "layout/header.php"; ?>
    <?php include "layout/navbar.php"; ?>

    <section class="registration">
        <h3 style="text-align: center">candidate registration</h3>
        <div class="container">
            <div class="form_page">
                <form ROLE="form" action="sign_up" method="post">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">first name</label>
                            <input required="required" type="text" class="form-control" id="name" name="f_name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">last name</label>
                            <input required="required" type="text" class="form-control" id="name" name="l_name">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input required="required" type="email" class="form-control" id="email" name="user_email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="contact">contact no</label>
                            <input required="required" type="number" class="form-control" id="contact"
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
                                <p style="color: red; font-size: small"><?php echo  $_SESSION['error_exist']; ?></p>
                                <span class="pass_match" style="display: none; color: red; font-size: small; text-align: center">Password Is Not Matched</span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p style="color: black; font-size: small">By proceeding you agree
                                    to the <a href="#">Terms of Use </a>and <a href=""> Privacy Policy</a> </p>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: center">
                        <button id="btnSubmit" type="submit" class="button1">Register</button>
                    </p>
                    <p style="color: red; text-align: center">
                        <a href="candidate-login.php">Login here</a>
                    </p>
                </form>
            </div>

        </div>

    </section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
