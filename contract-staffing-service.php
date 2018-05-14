<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "contract staffing services"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
   .container{
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
                            <h2><?php echo $title ?></h2>
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
                                        <li role="presentation" class="active"><a href="/contract-staffing-service">contract-staffing-service</a>
                                        </li>
                                        <li role="presentation" class=""><a href="man-power-services">man-power-services</a>
                                        </li>
                                    </ul>
                                    <?php include "contact-info.php"; ?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="carrers_right_content">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in">
                                            <div class="about_company">


                                                <p>Our Staff Recruiting Helps You Achieve Your Professional Objectives
                                                    Across the nation, there are many outstanding opportunities for
                                                    contract professionals to rewardingly engage with companies who
                                                    experience spikes in seasonal workloads, want access to specialized
                                                    professionals, or are seeking to improve their cost management
                                                    through focused staffing. These are professional, skilled positions
                                                    that are simply employed on a shorter term basis.</p>
                                                <p>At AkostaPlacement Services, we make use of one of the most
                                                    sophisticated and extensive networks of professional contacts in the
                                                    country to identify the finest short-term, professional talent
                                                    available. More importantly, we draw candidates from that same
                                                    network to fill our executive recruiting needs as well. So if you
                                                    meet our qualifications for identifying transcendent talent, we
                                                    welcome you to become part of our national network of professionals.
                                                    Great people make great candidates, regardless of the time horizon.
                                                    Regardless of the tenure, we approach each and every engagement as
                                                    an opportunity to establish a mutually beneficial long term
                                                    relationship.</p>
                                                <p>For contract staffing, we focus our efforts on professional talent on
                                                    areas such as accounting, finance, and information technology. A
                                                    sample of the types of positions we recruit for include:</p>
                                                <br>
                                                <ul>
                                                    <li> • Month / Year End Closing</li>
                                                    <li> • Audit / Financial Reporting</li>
                                                    <li> • Audit and Tax Professionals</li>
                                                    <li>• Financial System Upgrade / Implementation</li>
                                                    <li>• Mergers and Acquisitions</li>
                                                </ul>
                                                <br>
                                                <h3>Our Culture and Business Systems Drive Success of Our
                                                    Candidates</h3>
                                                <p><b>Managed Service Provider</b> – Is your contingent workforce
                                                    program doing
                                                    what it should? Our Managed Service Program works to ensure you
                                                    achieve the efficiencies and cost savings your organization
                                                    requires. </p>
                                                <p><b>Talent Based Outsourcing</b> – We provide talent driven
                                                    outsourcing of
                                                    operations, functions and services to drive the productivity you
                                                    need to succeed in a more demanding world. We deliver and manage
                                                    flexible, competitively-priced teams of talent to deliver a discrete
                                                    task, function or service.</p>
                                                <p><b>Engineering</b> – We provide recruitment & contract staffing for
                                                    leading
                                                    companies in the various Sector. We help you find Design Engineers,
                                                    Engineers across streams (Civil, Mechanical, Electrical, and
                                                    Instrumentation etc.), and other high-level professionals across the
                                                    Energy space.</p>
                                                <p><b>Information Technology</b> – We will help you meet your need for
                                                    technical skill areas. We deliver skilled IT professionals to fir
                                                    your business needs. The enterprise level solutions are customized
                                                    to offer unique business intelligence for impactful insights for
                                                    effective decision-making.</p>
                                                <br>

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
