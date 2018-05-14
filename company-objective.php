<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "company objective"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
    body {
        background: inherit;
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
                            <h2><?php echo $title;?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <p><a href="/">Home</a> |<a href="/about">about</a> |<span><?php echo $title; ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our_about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="our_about_left_content">

                        <h3>Akostaplacement Services – Excellent Services Not a Single Act but Habit</h3>
                        <p>Counted amongst India’s finest executive search firms, at AkostaPlacement our main objective
                            is to provide exceptional staffing services – providing people who are true professionals to
                            organizations that demand excellence.</p>
                        <p>
                            We have years of quality and committed high end placement experience right here in
                            Delhi/NCR, India. We have become experts in delivering the right fit at the right time. Over
                            the years, we have developed the systems, processes, talent network and market knowledge to
                            consistently provide the most exceptional staffing solutions. We maintain high standards of
                            ethics and fair play in our working philosophy which has helped us to meet our clients’
                            specific requirements, thus building enduring relationships.</p>
                        <p>
                            Welcome to AkostaPlacement Services. We’re at your service.
                            Since inception, AkostaPlacement Services has become India’s permanent & temporary placement
                            agency of choice by offering clear workforce solutions!</p>
                    </div>
                    <br>
                    <br>

                    <H3 style="color: red">We Care, We Serve……And Together We Grow!!</H3>
                    <p>All placement services providers are recruiters, but all recruiters are not Akostaplacement. We
                        aren't just recruiters, we are the hunting experts. We not only identify the right people for
                        the right job but we also make sure that we bring together the right people for the right
                        designation and for the right organization. We match talent to requirement, ambitions to growth
                        and dreams to reality.</p>
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
