<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 20/04/18
 * Time: 00:51
 */
?>
<?php $title = "Men power  services"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
    .container {
        text-align: left;
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
                            <p><a href="/">Home</a> | <a href="/services">services</a>|<a
                                        href="#"><span><?php echo $title ?></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">


        <div style="text-align: center" class="container">

            <div class="container">
                <section class="carrers_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="carrers_left">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class=""><a href="/cunsulting-service">HR cunsulting-service</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/Staff-Augmentation-Services">Staff-Augmentation-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/Leadership-Hiring-Services">Leadership-Hiring-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/IT-Staffing-Services">IT-Staffing-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/contract-staffing-service">contract-staffing-service</a>
                                        </li>
                                        <li role="presentation" class=" active"><a href="man-power-services">man-power-services</a>
                                        </li>
                                    </ul>
                                    <?php include "contact-info.php"; ?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="carrers_right_content">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in">


                                            <p>An Ability to Perform and Measure the Success<br>

                                                At certain times, there arises a situation when you have no other option
                                                but to look for outsourcing extra manpower for your work. It becomes
                                                difficult to work on every detailed project of your company single
                                                handedly. You have limited time and limited resources to cover up
                                                massive work. Therefore, it is during such instances, you have to work
                                                on the best manpower recruitment services. And for that, relying on a
                                                reputed company is a clever choice.<br>
                                                Whenever you are in need of quick and affordable manpower services in
                                                India, AkostaPlacement is the first one to come up in your mind. We are
                                                glad to offer you with quality recruitment, which you have asked for so
                                                long. Our international agency is already known for serving various
                                                kinds of industries. Therefore, working on your service is not that of a
                                                difficult task for us. Other than working on the leading international
                                                recruiting market, we might want to offer help under multinational
                                                manpower consulting packages.<br>
                                                It is always interesting for you to work in the best Manpower services.
                                                And, you are in need of skilled personalities for that. We have been
                                                associated with this sector for years, and have chosen to work with the
                                                finest experts under manpower skills.</p>
                                            <br>
                                            <ul>
                                                <li>• Excellent Database</li>
                                                <li>• Experienced Staff Members</li>
                                                <li>• Extensive Working Knowledge</li>
                                                <li>• Procedure Is Flawlessly Handled</li>
                                            </ul>
                                            <br>
                                            <h3>Manpower Recruitment Services in India Made Quick and Affordable</h3>
                                            <br>
                                            <p>Fulfill Your Needs and Requirements – We always provide you with the
                                                required manpower, after checking in your needs and requirements. We
                                                will help you in choosing the best resource. <br>
                                                Separate Manpower For Separate Industries – We have separate skilled
                                                team manpower for separate industries, so you will get a well trained
                                                one whenever you need it. <br>
                                                Great Work Ethics – Work ethics is the one which we pay heed the most.
                                                Each company has its own sets of rules, and manpower will adjust its
                                                routines accordingly. <br>
                                                No Quality Compromise – Whether national or international clients, we
                                                never compromise on the quality. Practically it remains the same and
                                                with great thoughts, too. <br>
                                                Global Recruiting Service- We are here to offer global recruiting
                                                services to our clients. We know what you want, and can customize our
                                                sources, accordingly.</p>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>

</div>


</section>


</div>
<div style="clear: both"></div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>

