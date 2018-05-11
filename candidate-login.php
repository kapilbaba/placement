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
                        <?php echo $_SESSION['message']; $_SESSION['message'] = null; ?>
                        <?php echo $_SESSION['error_msg']; $_SESSION['error_msg'] = null; ?>
                        <?php echo $_SESSION['login-now']; $_SESSION['login-now'] = null; ?>


                    </p>
                    <p style="text-align: center">
                        <button type="submit" name="submit" class="btn btn-default simple-btn">login</button>
                    </p>
                    <p style="color: black; text-align: center; font-size: small" >Don't have Id Register
                        <a style="font-size: 20px" href="candidate-signup"> here!</a>
                    </p>

                </form>
            </div>

        </div>

    </section>


</div>

<?php include "layout/core/script.php"; ?>

</html>
