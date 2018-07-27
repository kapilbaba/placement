<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "staff augmentation services"; ?>
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
                                        <li role="presentation" class=""><a href="/hr-consulting-service.php"> HR consulting-service</a>
                                        </li>
                                        <li role="presentation" class="active"><a href="/staff-Augmentation-Services.php">Staff-Augmentation-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/leadership-Hiring-Services.php">Leadership-Hiring-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/it-Staffing-Services.php">IT-Staffing-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/contract-staffing-service">contract-staffing-service</a>
                                        </li>
                                        <li role="presentation" class=""><a
                                                    href="man-power-services">man-power-services</a></li>
                                    </ul>
                                    <?php include "contact-info.php"; ?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="carrers_right_content">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in">
                                            <div class="about_company">

                                                <p>Quality Talent Where and When You Need It <br>
                                                    The market for highly qualified candidates is very competitive – and
                                                    it isn’t getting any easier. At AkostaPlacement Services, our expert
                                                    team has knowledge in the tech industry and in your local job market
                                                    thereby helping you find the right IT professionals, whether you
                                                    need them simply for few hours, a couple of months or for the long
                                                    term. With the flexibility to help organizations scale up or down
                                                    depending on their workflow, we enable you to maximize your
                                                    resources and leverage opportunities.</p>
                                                <br>
                                                <br>



                                                <p>At AkostaPlacement Services, we help you avoid the process of writing
                                                    and posting job openings, sifting through resumes and laboring
                                                    through the lengthy interview process. Our IT and engineering staff
                                                    augmentation services allow you to sidestep those consuming tasks
                                                    and place top tech professionals in the positions you need to fill –
                                                    saving you time and money, while putting you in the best position to
                                                    take on new business opportunities.
                                                    <br>
                                                    As a leading provider of staffing augmentation, we provide you with
                                                    customized solutions keeping in mind the specific skills you need
                                                    and your overall business goals. The benefits to this approach
                                                    include:</p>
                                                <br>
                                                <ul>
                                                    <li>• Shorter hiring timelines</li>
                                                    <li>• Reduced cost of attaining talent</li>
                                                    <li>• Increased knowledge of business</li>
                                                    <li>• Knowing about industry trends and practices</li>
                                                </ul>
                                                <br>
                                                <h3>
                                                    Full Range of Our Staff Augmentation Services</h3>
                                                <p><b>IT Consulting Services</b> – We offer customized application development
                                                    services to our clients in order to address their changing business
                                                    logic thereby increasing the scalability and performance</p>
                                                <br>
                                                <p>
                                                    <b>Business Analysis Consulting</b> – AkostaPlacement Services’ application
                                                    maintenance services help you get the best out of your existing IT
                                                    applications thereby reducing the maintenance costs.</p>
                                                <br>
                                                <p>
                                                    <b>Engagement Models</b> – Our highly skilled team will build a browser
                                                    based version for your existing legacy applications that retain the
                                                    essential features and take advantage of the web platform.</p> <br>
                                                <p>
                                                    <b> Managed Services></b> – Our team of professionals specialize in providing
                                                    our customers with complete CRM solutions by carefully analyzing
                                                    their requirements and business model. </p> <br>
                                                <p>
                                                    <b> Dedicated Teams Model</b>
                                                    – AkostaPlacement Services’ e-learning
                                                    solutions enable effective knowledge propagation and transforming
                                                    learning into an exciting and engaging experience.</p>
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
