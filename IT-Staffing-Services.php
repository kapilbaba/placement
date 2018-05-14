<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 01/03/18
 * Time: 14:08
 */
?>
<?php $title = "IT Staff Augmentation"; ?>
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
                            <h2><?php echo $title;?></h2>
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
                                        <li role="presentation" class=""><a href="/cunsulting-service">HR cunsulting-service</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/Staff-Augmentation-Services">Staff-Augmentation-Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="/Leadership-Hiring-Services">Leadership-Hiring-Services</a>
                                        </li>
                                        <li role="presentation" class="active"><a href="/IT-Staffing-Services">IT Staff Augmentation</a>
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
                                        <div role="tabpanel" class="tab-pane fade active in">
                                            <div class="about_company">

                                                <div class="section_title">

                                                </div>
                                                <p> Offshore IT Consulting and Staffing Services For Organizations
                                                    Staff Augmentation is an easy to implement outsourcing strategy
                                                    opted usually by large enterprises and organizations to get skilled
                                                    IT professionals for the respective projects. IT staff augmentation
                                                    is a quick and efficient method of increasing your resources and
                                                    skill sets without worrying about the infrastructure setup,
                                                    management activities, hiring procedures etc. Just a few
                                                    modifications and additions will complete the absorption procedure
                                                    of the newly hired staff.
                                                    We at AkostaPlacement Services offer expert consulting and IT Staff
                                                    augmentation services to enterprises and organizations requiring
                                                    additional manpower and skills set for their projects. In-housing a
                                                    vast pool of highly experienced IT specialists, AkostaPlacement
                                                    successfully caters to the IT staff requirements of its global
                                                    clients. We are actively involved in innovating and deploying client
                                                    oriented services and solutions to more than 500 clients since
                                                    establishment.
                                                    We thoroughly go through your requirements, functionalities and
                                                    other preferences to formulate a well managed staff augmentation
                                                    strategy. We specialize in offering flexible staff augmentation
                                                    services and offer clients with on-demand skills and resources.</p>
                                                <br>
                                                <ul>
                                                    <li>• Professional, technical, and managerial talent</li>
                                                    <li>• Short- or long-term engagements</li>
                                                    <li>• Deep pool of talent</li>
                                                    <li>• Effective delivery combination of quality, speed, and
                                                        innovation
                                                    </li>

                                                </ul>

                                                <BR>
                                                <h3>IT Staff Augmentation Services That Adds Value To Your Business</h3>
                                                <br>

                                                <p>Cost Effective – No setup cost, hiring cost or long term contracts.
                                                    Leaves, medication, insurance etc for the resources is taken care by
                                                    us.
                                                </p>
                                                <P>

                                                    Experienced Staff – All the hiring and recruiting staff at
                                                    AkostaPlacement Services have a minimum 3+ years of relevant working
                                                    experience.</P>
                                                <p>

                                                    Direct Access To Resources – You will be in direct touch with your
                                                    resources and will have full control over them. Our services have
                                                    been especially designed to provide maximum flexibility.
                                                    Intellectual Copyrights – All the codes and work done by resources
                                                    assigned to you will be reserved by you. No other client or
                                                    competitor will have access to them.</p>
                                                <p>
                                                    Managed Services – AkostaPlacement Services specializes in providing
                                                    customers with complete CRM solutions by carefully analyzing their
                                                    requirements and business model.</p>
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
