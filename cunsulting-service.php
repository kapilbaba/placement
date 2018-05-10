<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "cunsulting services"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>

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
                            <h2></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <p><a href="/">Home</a> | <a href="/services.php">services</a>|<a href="#"><span><?php echo $title?></span></a></p>
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
                                        <li role="presentation" class="active"><a href="/cunsulting-service"  >cunsulting-service</a></li>
                                        <li role="presentation" class=""><a href="/Staff-Augmentation-Services" >Staff-Augmentation-Services</a></li>
                                        <li role="presentation" class=""><a href="/Leadership-Hiring-Services" >Leadership-Hiring-Services</a></li>
                                        <li role="presentation" class=""><a href="/IT-Staffing-Services">IT-Staffing-Services</a></li>
                                        <li role="presentation" class=""><a href="/contract-staffing-service" >contract-staffing-service</a></li>
                                        <li role="presentation" class=""><a href="man-power-services.php">man-power-services</a></li>  </ul>
                                    <?php include "contact-info.php";?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="carrers_right_content">
                                    <div class="tab-content">

                                            <div class="about_company">

                                                <div class="section_title">
                                                    <h2>We give best advice for your business</h2>
                                                </div>
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
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
