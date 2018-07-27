<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "company profile"; ?>
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

                        <h3>Akostaplacement Services – A Gateway To Success </h3>
                        <h5>About Akostaplacement</h5>
                        <p>Even after devastating recession, India continues to be the land of opportunities. With
                            growing socio economic development in the country, Indian job market is showing positive
                            signs of substantial growth in hiring the human workforce. Today, companies and
                            organizations are in constant lookout for the talented and professional individuals. Noida
                            based Akostaplacement services is the world leader in innovative workforce solutions as we
                            bridge the gap between talented human potential and business leaders.</p>
                    <p>
                            We churn out the real talent and place them to the positions and companies they are suitable
                            for. We strive to ensure that our candidates give a long and fruitful return to their
                            employers. If you feel trapped in a wrong job losing out your real potential, look no
                            further. We help you find relevant jobs with ease based on your qualification, experience
                        and location.<br>
                            Thus, Akostaplacement is in constant chase of real talent to help it reach its real
                            destination.</p></div>
                    <br>
                    <h3>People, Knowledge and Innovation – This is what makes us unique</h3>
                    <br>
                    <p>We care about the people and role of work in their lives. We let people develop their careers
                        through planning, work, coaching and training. We are in constant touch with the world of work
                        so that we actively pursue the development and adopt the best practices to innovate. We conduct
                        personal screening of each candidate before presentation to our clients. We provide Placement
                        and Job search services to all types of industries.</p>
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

