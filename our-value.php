<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "our value"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<?php session_start(); ?>
<style>
    body {
        background: inherit;
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



        <section class="our_about_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            <div class="section_title">
                                <h2>About our firm </h2>
                            </div>
                            <h3>Lorem Ipsum is  simply  text of the stry stext of the stry simply dummy text of the printing </h3>
                            <p>Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the. Lorem Ipsum is  simply  text of the stry simply dummy text of the printing and text of the stry simply dummy text of the printing and typesetting industry.</p>
                            <p>Lorem Ipsum is simply text of the. Lorem Ipsum is  simply  text of the stry stext of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the. Lorem Ipsum is  simply  text of the stry Lorem Ipsum is simply text of the. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our_about_image">
                            <img src="images/about-right-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>







</div>
<div style="clear: both"></div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
