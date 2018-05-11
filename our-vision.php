<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "Our vision"; ?>
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
                        <h3>Akostaplacement Services – On The Path to Become One Of The best
                            Our Vision </h3>
                        <p>At AkostaPlacement Services, our vision is to eliminate the loss faced by the businesses due
                            to the dearth of talent. We believe in continued growth, and in doing so, we foresee our
                            collaboration with the finest recruiters and HR professionals across the country. We wish to
                            partner, acquire and provide business opportunities to every recruiter who is passionate
                            about recruiting. We strive to be recognized as the most Preferred & reliable Human Resource
                            partner in the industry and amongst our clients.</p>
                        <p>It is our vision to provide better opportunity and progressive career. Candidates who are
                            motivated to make change, as a career advisor, we can help them achieve their professional
                            goals. We offer a brand new career and plenty of new opportunities to grow and excel.
                            We at AkostaPlacement Services, provide recruitment platform where employers and employees
                            get in touch to reach common milestone. To accomplish this, we are always easily accessible
                            to our clients and associates. We have a highly skilled team of experts who fulfills the
                            requirements of various highly professional companies.
                            We are confident that, as AkostaPlacement Services, we inspire our associates to get Better
                            Opportunity, with Progressive Career. </p>
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
