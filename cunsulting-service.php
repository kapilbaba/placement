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
    body {
        background: inherit;
    }

    tr{
        border: solid 1px;

    }
</style>
<div id="page">

    <?php include "layout/header.php"; ?>
    <?php
    if (empty($_SESSION["authenticated"])== true){
        include "layout/navbar.php"; }
    else{
        include 'layout/user-navbar.php';
    }
    ?>
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3><?php echo $title?></h3>
            </div>
        </div>
    </section>
    <section class="">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><?php echo $title?></li>

        </ol>

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
                                        <li role="presentation" class=""><a href="#carrers6" aria-controls="carrers6" role="tab" data-toggle="tab" aria-expanded="false">financial analysis</a></li>
                                    </ul>
                                    <?php include "contact-info.php";?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="carrers_right_content">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" >
                                            <div class="about_company">
                                                <div class="row business_divider_img">
                                                    <div class="col-md-12">
                                                        <div class="our_about_image b_left_img">
                                                            <img src="images/about-company-img4.jpg" alt="">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="section_title">
                                                    <h2>We give best advice for your business</h2>
                                                </div>
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                                            </div>

                                            <div class="row analysis_business">
                                                <div class="col-md-5">
                                                    <div class="our_about_image b_left_img">
                                                        <img src="images/about-company-img5.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="analysis_text">
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.</p>
                                                        <ul>
                                                            <li><a href="#">-  Building a strategic development and expansion</a></li>
                                                            <li><a href="#">-  Plan is vital, as the tactics game</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
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
