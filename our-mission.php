<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "Our Mission"; ?>
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
                            <h2></h2>
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
                            <h2><?php echo $title; ?></h2>
                        </div>
                        <h3>Akostaplacement Services – You’re Never Too Late to Set another Goal
                            Our Mission</h3>
                        <p>At AkostaPlacement, we’ve put in our best efforts to align our mission with the needs of
                            everyone who are or wish to collaborate with us. Venture through our goals and mission:
                            Employees – Our employees are the most valuable asset of our company. They have a thorough
                            understanding of their personal and professional goals thus prioritizing each always. We aim
                            to foster, encourage and reward teamwork, creativity, and professionalism.
                            Clients – Our success as a company can only be measured on the basis of client satisfaction.
                            Therefore, our company always strives to provide human resource, recruitment & placement
                            services in the most effective and efficient way possible.
                            Teamwork – Teamwork is the stepping stone of AkostaPlacement Services culture and values. We
                            always welcome and respect all team member’s contribution and take deep pride in the efforts
                            they put in. We always motivate them for their hard work in the form of rewards or good
                            incentive or appraisals.
                            Industry – To ensure that the recruitment industry continues to grow and excel in all
                            parameters, AkostaPlacement shares the mission to train and give scalable opportunities to
                            new recruiters, freelance recruiters, established HR professionals and also extend its
                            support to passionate HR professionals, who dream to contribute to the industry.</p>
                        <p>The mission of AkostaPlacement Services is to build reputation with clients for providing a
                            level of integrity and unequalled professionalism in the field of placement services. We
                            focus on every matter with highest level of professionalism to deliver quality instead of
                            quantity. We are confident that with our professional experience, highly motivated &
                            dedicated team we can face any kind of challenges in the industry. </p>
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
