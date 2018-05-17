<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 06/04/18
 * Time: 09:24
 */ ?>
<?php $title= "sitemap" ?>

<?php include "layout/core/head.php" ?>

<div id="page">


    <?php
    if (empty($_SESSION["authenticated"]) == true) {
        include "layout/navbar.php";
    } else {
        include 'layout/user-navbar.php';
    }
    ?>
    <style>
        footer.main_footer {
            color: #face48!important;
            background-color: #edf2f552!important;
            clear: both!important;
            position: relative!important;
        }
        footer.main_footer a:hover {
            color: #000!important;
        }

        @media screen and (max-width: 800px)
        footer.main_footer ul.footer_sitemap li.sitemap_block ul li {
            margin-bottom: 15px;
            display: block;
            /* padding: 10px; */
            background: rgba(0, 0, 0, .25);
            color: #fff;
            height: 25px;
            text-align: center;
            border-radius: 3px;
        }

        body{
            text-transform: capitalize;
        }
    </style>
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
                            <p><a href="/">Home</a> | <a href="#"><span><?php echo $title;?></span></a>  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<link rel="stylesheet" href="/css/footer.css" type="text/css">
<footer class="main_footer">


    <section class="lower">

        <div class="inner">

            <ul class="footer_sitemap">

                <li class="lpage"><a href="https://akostaplacement.com/" title="home">home</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/candidate-login.php" title="login">login</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/candidate-signup.php" title="register">register</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/track-application.php" title="track application status">track application status</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/about" title="about us">about us</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/services" title="services">services</a></li>

                <li class="lpage"><a href="https://akostaplacement.com/contact" title="contact-us">contact-us</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/contact.php" title="contact-us">contact-us</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/user_job_info.php?id=20" title="job-information">job-information</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/candidate-signup" title="register">register</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/company-profile" title="company profile">company profile</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/company-objective" title="company objective">company objective</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/our-mission" title="Our Mission">Our Mission</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/our-value" title="company profile">company profile</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/our-vision" title="Our vision">Our vision</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/cunsulting-service" title="cunsulting services">consulting services</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/Staff-Augmentation-Services" title="staff augmentation services">staff augmentation services</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/Leadership-Hiring-Services" title="leadership hiring services">leadership hiring services</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/IT-Staffing-Services" title="It staffing services">It staffing services</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/contract-staffing-service" title="contract staffing services">contract staffing services</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/terms%20and%20condition" title="terms and conditions">terms and conditions</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/privacy-policy" title="privacy policy">privacy policy</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/man-power-services" title="Men power recruitment services">Men power recruitment services</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/user-jobs.php" title="job">job</a></li>
                <li class="lpage"><a href="https://akostaplacement.com/services.php" title="services">services</a></li>


            </ul>

        </div>

    </section>




</footer>



<?php include "layout/core/script.php"; ?>