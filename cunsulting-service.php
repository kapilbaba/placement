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
    p {
        text-align: justify;
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
                            <p><a href="/">Home</a> | <a href="/services.php">services</a>|<a
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
                                        <li role="presentation" class="active"><a href="/cunsulting-service">cunsulting-service</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/Staff-Augmentation-Services">Staff-Augmentation-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/Leadership-Hiring-Services">Leadership-Hiring-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/IT-Staffing-Services">IT-Staffing-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/contract-staffing-service">contract-staffing-service</a>
                                        </li>
                                        <li role="presentation" class=""><a href="man-power-services.php">man-power-services</a>
                                        </li>
                                    </ul>
                                    <?php include "contact-info.php"; ?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="carrers_right_content">
                                    <div class="tab-content">

                                        <div class="about_company">

                                            <div class="section_title">
                                                <h2>HR Consulting Services</h2>
                                            </div>
                                            <p>We Have the Perfect Solutions for All Your Hiring Requirements
                                                Organizations are finding it difficult to attract, nurture and retain
                                                right kind of talented workforce for the optimal organizational growth.
                                                At AkostaPlacement Services, we provide comprehensive HR consulting
                                                services through a single window across various domains to enhance the
                                                success of your organization. Our tailor made HR solutions have been
                                                formulated keeping in mind the needs of the organization. Our services
                                                are designed to make a difference to human resource management through
                                                our unique methodologies.</p>
                                            <br>
                                            <p>AkostaPlacement Services has exceptional strengths in ensuring well timed
                                                and dependable delivery of HR Solutions to clients across various
                                                sectors. Furthermore, in case of urgent ad-hoc requirements we depute
                                                our expert staff with the client. As an end to end HR Consulting firm,
                                                we support your growth and eliminate all your worries by eliminating
                                                your non core activities.
                                                Our delivery of HR consulting services is based upon timely execution of
                                                agreed upon deliverables and performance results. Here, a few reasons to
                                                choose HR consulting services from AkostaPlacement services:
                                            </p>
                                            <ul>
                                                <li> • You get exactly what you need.</li>
                                                <li> • We take the time to understand your business.</li>
                                                <li> • We begin with the end in mind.</li>
                                                <li>• We provide professional, easy to understand communications</li>
                                            </ul>
                                            <br>
                                            <br>
                                            <h3>HR Consulting Services That Drive Value To Your Business</h3>
                                            <br>
                                            <p>Workplace
                                                Investigations – Comprehensive, professional, third party examination of
                                                workplace that require organized, documented, non biased investigation.
                                                HR Transformations – We transform your HR department from an administrative
                                                framework to one that encourages employee engagement and drives business
                                                success.
                                                Other HR Needs – Need assistance with other HR projects? Our team of HR
                                                professionals is positioned to assist with the knowledge, expertise, and
                                                friendly service to get the job done.
                                                Performance Management – We address employee performance issues in a non
                                                emotionally charged yet legally compliant manner that minimizes the impact
                                                on employees and business productivity.
                                                Compliance – Mitigate risk by ensuring your workforce management practices
                                                are compliant with federal, state, and local regulations.</p>
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
