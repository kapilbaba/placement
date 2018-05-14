<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "our values"; ?>
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
                            <h2><?php echo $title; ?> </h2>
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
                        <div class="section_title">

                        </div>
                        <h3>Akostaplacement Services – Career Growth Simplified Here!!
                            Our values </h3>
                        <p>We offer perfect blend of skills, attitude, and delivery orientation. We understand your
                            requirements and optimize ourselves with your goals. We have years of experience in working
                            with companies of various sizes as Human Resources consultants and are committed to offer
                            people related services with a view to enhance net worth of Human Capital in organizations,
                            resulting in overall organizational growth & of individual at large.</p>
                        <br>
                        <h3>OUR VALUES</h3>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> We uphold integrity above all other things.</li>
                            <li><i class="fas fa-angle-right"></i> We are passionate about our business and to serve our
                                clients the best.
                            </li>
                            <li><i class="fas fa-angle-right"></i> We never let our stakeholders down; be they clients,
                                candidates, partners or ourselves
                            </li>
                            <li><i class="fas fa-angle-right"></i> We believe in improving and excelling in everything
                                that we do.
                            </li>
                            <li><i class="fas fa-angle-right"></i> We are unified by teamwork through collaborative
                                practices.
                            </li>
                            <li><i class="fas fa-angle-right"></i> We constantly strive to enrich our professional
                                relationships.
                            </li>
                        </ul>
                        <br>
                        <h3>Dedication Towards Clients Manpower’s Needs</h3>
                        <p>Supported by a team of highly skilled and experienced HR practitioners and managers, we have
                            successfully completed several HR related projects. Our team strives hard to make both ends
                            meet to make the client satisfied.</p>
                        <p>
                            Since inception, AkostaPlacement Services has gained a number of satisfied customers. With a
                            good grasp of people and understanding client expectations, we are confident of delivering
                            expectations on time and within budget. </p>
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
