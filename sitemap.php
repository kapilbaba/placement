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

                <li class="sitemap_block">
                    <ul>

                        <li class="lpage"><a href="https://akostaplacement.com/" title="home">home</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/candidate-login" title="login">login</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/candidate-signup" title="register">register</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/track-application" title="track application status">track application status</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/about" title="about us">about us</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/services" title="services">services</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/user-jobs" title="job">job</a></li>

                    </ul>
                </li>
                <li class="sitemap_block">
                    <ul>

                        <li class="lpage"><a href="https://akostaplacement.com/contact" title="contact-us">contact-us</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/company-profile" title="company profile">company profile</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/company-objective" title="company objective">company objective</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/our-mission" title="Our Mission">Our Mission</a></li>
                        <li class="phantom"><a>&nbsp;</a></li>
                        <li class="phantom"><a>&nbsp;</a></li>
                        <li class="phantom"><a>&nbsp;</a></li>

                    </ul>
                </li>


                <li class="sitemap_block">

                    <ul>

                        <li class="lpage"><a href="https://akostaplacement.com/terms%20and%20condition" title="terms and conditions">terms and conditions</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/privacy-policy" title="privacy policy">privacy policy</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/man-power-services" title="Men power recruitment services">Men power recruitment services</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/user-jobs" title="job">job</a></li>
                        <li class="lpage"><a href="https://akostaplacement.com/services" title="services">services</a></li>
                        <li class="lpage last-page"><a href="https://akostaplacement.com/man-power-services" title="Men power recruitment services">Men power recruitment services</a></li>
                        <li><a href="/user-jobs">user jobs</a></li>

                    </ul>
                </li>


            </ul>

        </div>

    </section>




</footer>



<?php include "layout/core/script.php"; ?>