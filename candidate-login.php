<?php
session_start();
?>
<?php $title = "login"; ?>
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
        <h3 style="text-align: center">candidate login</h3>
        <div class="container">
            <div class="form_page">
                <form action="singn_in.php" method="post">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" value="<?php if(isset($_COOKIE["uid"])) { echo $_COOKIE["uid"]; } ?>" name="uid" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"  class="form-control" id="password">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <label for="checkbox"><input type="checkbox" name="remember_me" value="1" id="remember_me"> remember me</label>
                    </div>
                    <p style="color: red; text-align: center">
                        <?php echo $_SESSION['message']; ?>
                        <?php echo $_SESSION['error_msg']; ?>
                    </p>
                    <p style="text-align: center">
                        <button type="submit" name="submit" class="button1">login</button>
                    </p>
                    <p style="color: black; text-align: center; font-size: small" >Don't have Id Register
                        <a href="candidate-signup.php"> here!</a>
                    </p>

                    <?php session_unset(); ?>
                </form>
            </div>

        </div>

    </section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
