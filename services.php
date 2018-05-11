<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 09/05/18
 * Time: 17:29
 */
?>
<?php
$title = "services";
session_start();
?>
<?php include "layout/core/head.php" ?>
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
                        <p><a href="/">Home</a> | <a href="#"><span>Services</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--services start-->
<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="flaticon-brick-wall"></i>
                    </div>
                    <h3 class="title">HR CONSULTING SERVICES
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                    </p>

                </div>
                <a href="/cunsulting-service.php">read more</a>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="flaticon-crane-1"></i>
                    </div>
                    <h3 class="title">CONTRACT STAFFING SERVICES
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                    </p>
                </div>
                <a href="/contract-staffing-service.php">read more</a>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="flaticon-ruler-and-pencil-1"></i>
                    </div>
                    <h3 class="title">STAFF AUGMENTATION SERVICES
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                    </p>
                </div>
                <a href="/">read more</a>
            </div>
            <br>
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="flaticon-wrench"></i>
                    </div>
                    <h3 class="title">LEADERSHIP HIRING SERVICES
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                    </p>
                </div>
                <a href="/">read more</a>
            </div>
            <br>
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="flaticon-home-1"></i>
                    </div>
                    <h3 class="title">MEN POWER RECRUITMENT SERVICES
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                    </p>
                </div>
                <a href="/">read more</a>
            </div>
            <br>
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="flaticon-worker-1"></i>
                    </div>
                    <h3 class="title">IT STAFFING SERVICES
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                    </p>
                </div>
                <a href="/">read more</a>
            </div>


        </div>
    </div>
</section>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>