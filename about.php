<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 09/05/18
 * Time: 15:35
 */
?>
<?php $title = "about us"; ?>
<?php session_start() ?>
    <!DOCTYPE HTML>
    <html>
<?php include "layout/core/head.php" ?>

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
                            <p><a href="/">Home</a> | <a href="#"><span><?php echo $title; ?></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Three start -->
    <section class="about-area about-area-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>company profile</h3>
                        <p>Even after devastating recession, India continues to be the land of opportunities. With
                            growing socio economic development in the country, Indian job market is showing positive
                            signs of substantial growth in hiring the human workforce. Today, companies and
                            organizations are in constant lookout for the talented and professional individuals. Noida
                            based Akostaplacement services is the world leader in innovative workforce solutions as we
                            bridge the gap between talented human potential and business leaders.
                        </p>
                        <a href="/company-profile">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>company objective</h3>
                        <p>Counted amongst India’s finest executive search firms, at AkostaPlacement our main objective
                            is to provide exceptional staffing services – providing people who are true professionals to
                            organizations that demand excellence.
                            We have years of quality and committed high end placement experience right here in
                            Delhi/NCR, India. We have become experts in delivering the right fit at the right time. Over
                            the years, we have developed the systems, processes, talent network and market knowledge to
                            consistently provide the most exceptional staffing solutions. We maintain high standards of
                            ethics and fair play in our working philosophy which has helped us to meet our clients’
                            specific requirements, thus building enduring relationships.</p>
                        <a href="/company-objective">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>Our Mission</h3>
                        <p>At AkostaPlacement, we’ve put in our best efforts to align our mission with the needs of
                            everyone who are or wish to collaborate with us. Venture through our goals and mission:
                            Employees – Our employees are the most valuable asset of our company. They have a thorough
                            understanding of their personal and professional goals thus prioritizing each always. We aim
                            to foster, encourage and reward teamwork, creativity, and professionalism.
                            Clients – Our success as a company can only be measured on the basis of client satisfaction.
                            Therefore, our company always strives to provide human resource, recruitment & placement
                            services in the most effective and efficient way possible.</p>
                        <a href="/our-mission">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>Our Vision</h3>
                        <p>At AkostaPlacement Services, our vision is to eliminate the loss faced by the businesses due
                            to the dearth of talent. We believe in continued growth, and in doing so, we foresee our
                            collaboration with the finest recruiters and HR professionals across the country. We wish to
                            partner, acquire and provide business opportunities to every recruiter who is passionate
                            about recruiting. We strive to be recognized as the most Preferred & reliable Human Resource
                            partner in the industry and amongst our clients.</p>
                        <a href="/our-vision">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>Our value</h3>
                        <p>We offer perfect blend of skills, attitude, and delivery orientation. We understand your
                            requirements and optimize ourselves with your goals. We have years of experience in working
                            with companies of various sizes as Human Resources consultants and are committed to offer
                            people related services with a view to enhance net worth of Human Capital in organizations,
                            resulting in overall organizational growth & of individual at large.</p>
                        <a href="/our-value">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator Start -->
    <section class="separator-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="separator-col">
                        <h2>please feel free to contact us</h2>
                        <h4><span>Hotline:</span> +9184475 81034</h4>
                        <h4><span>Mail Address:</span>contact@akostaplacement.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Client start -->

<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>