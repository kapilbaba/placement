<?php $title = "home"; ?>
<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>

    button:hover, a:hover {
        opacity: 0.7;
    }

    .jobtitle {
        width: 100%;
        font-size: 36px;
        padding: 5px;
        color: white;
    }
</style>
<div id="page">

    <?php include "layout/header.php"; ?>

    <?php
    if (empty($_SESSION["authenticated"]) == true) {
        include "layout/navbar.php";
    } else {
        include 'layout/user-navbar.php';
    }
    ?>

    <section class="container banner">
        <div class="back">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="row">
                <div class="intro">
                    <h1 class="jobtitle">Search Here For Jobs</h1>
                    <a style="color: white; text-decoration: none" href="user-jobs">
                        <button type="button" class="btn btn-block start-now">Start From Now &nbsp; <span
                                    class="glyphicon glyphicon-chevron-right"></span></button>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 ">
            <div class="row">

                <form action="sign_up.php" method="post" role="form" class="form">

                    <div class="container_home_register">

                        <h3 style="text-align: center;">
                        <span class="top_register">
                           register for free
                        </span>
                        </h3>
                        <div class="form-group col-md-6 col-sm-12">
                            <input required="required" type="text" class="form-control" name="f_name"
                                   placeholder="Fist-name">

                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <input required="required" type="text" class="form-control" name="l_name"
                                   placeholder="Last-name">

                        </div>

                        <div class="form-group col-md-12 col-sm-12 ">
                            <input required="required" type="email" class="form-control" name="user_email"
                                   placeholder="E-mail">

                        </div>

                        <div class="form-group col-md-12 col-sm-12 ">
                            <input required="required" type="text" class="form-control" name="contact_info"
                                   placeholder="Contact number">

                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <input id="password" required="required" type="password" class="form-control"
                                   name="user_password"
                                   placeholder="Password">

                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <input id="confirm-password" required="required" type="password" class="form-control"
                                   name="re-enter password"
                                   placeholder="Re-enter password">

                        </div>
                        <span class="pass_match"
                              style="display: none; color: red; font-size: small; text-align: center">Password Is Not Matched</span>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <button id="btnSubmit" type="submit" class="button button1">REGISTER</button>
                                </div>
                            </div>
                        </div>

                        <br>

                        <p style="color: red; text-align: center">
                            <a class="btn home_btn" style="border: 1px solid white; color: white"
                               href="candidate-login">Login here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div style="clear: both"></div>

</div>

</section>

    <section class="helpline_area">
        <div class="container">
            <div class="helpline_inner">
                <div class="media">

                    <div class="media-body">
                        <h3 style="color: white">Are You Unemployed ?</h3>
                        <h4>start finding job today</h4>
                        <a class="btn btn-info" href="user-jobs">Apply For Job now</a>
                        <div class="contact_d">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="business_box_area">
    <div class="container">
        <div class="sec_middle_title">
            <h2><span>Consulting Service</span> for all kind of Jobs</h2>
            <p>Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the. Lorem Ipsum is  simply  text of the stry simply dummy text of the printing and.</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="business_box_item">
                    <div class="business_image">
                        <img src="images/business-1.jpg" alt="">
                    </div>
                    <div class="business_text">
                        <a href="#"><h4>PartTime Jobs</h4></a>
                        <h5>Expertness in placement field</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="business_box_item">
                    <div class="business_image">
                        <img src="images/business-2.jpg" alt="">
                    </div>
                    <div class="business_text">
                        <a href="#"><h4>Full Time Jobs</h4></a>
                        <h5>Expertness in placement field</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="business_box_item">
                    <div class="business_image">
                        <img src="images/business-3.jpg" alt="">
                    </div>
                    <div class="business_text">
                        <a href="#"><h4>Remote Jobs</h4></a>
                        <h5>Expertness in placement field</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="into">
    <div class="container home_intro" style=" color: white">

        <div class="col-md-8 col-xs-12-col-sm-12">
            <br>
            <br>
            <div class="col-sm-12 col-xs-12 col-md-11  block">
                <h1>Welcome to akosta Placement Services</h1>
                <p>Akosta Placement Consultants is a leading brand in International recruitment consultancy for last
                    28
                    years. Since our inception in 1989, we have been dully approved by Ministry of Overseas Indian
                    Affairs, Government of India, Vide registration No. ( B-0211/DEL/PER/1000+/5/2591/1989 ) and
                    registered with prestigious International Bench-marking & Certifications ISO 9001:2008 (QMS) We
                    at
                </p>
            </div>

            <div class="col-sm-6 col-xs-12 col-md-5  block">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>

            </div>
            <div class="col-sm-6 col-xs-12 col-md-5 block ">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>

            </div>
            <div class="col-sm-6 col-xs-12 col-md-5  block">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>

            </div>
            <div class="col-sm-6 col-xs-12 col-md-5 block">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>

            </div>
        </div>

        <div style="text-align: center" class="col-md-4 col-xs-12 col-sm-12">
            <h3>message of CEO</h3>
            <img class="ceo_img" src="images/ceo.jpg" alt="">
            <p style="text-align: justify">
                Thank you for taking time to visit our website. Our website is one simple communication gateway that
                will give you a better understanding of our services.
                AJPC was established for providing quality service & opportunities to our candidates desirous of working
                in Middle East and likewise our valuable clients who wish to hire the best manpower resources from
                India. We are providing manpower from various fields discipline & specialization in recruitment of
                Professional & Skilled manpower of different trades.
                Since 2003 we started recruiting for Ministry of Health, Saudi Arabia and over the years have become a
                leading agency in recruitment for Doctors, BSc. Qualified Nurses and other Para-medical staff to Saudi
                Arabia.
                Our services target to maintain long term partnership with our valuable clients and have some of them
                for over 25 years..
            </p>
        </div>

    </div>

</section>



<section class="our_service_area">
    <div class="container">
        <div class="section_title">
            <h2 style="text-align: center">Our servies</h2>
        </div>
        <div class="row service_inner">
            <div class="col-md-4 col-sm-6">
                <div class="service_item">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/icon/service-icon1-h.png" alt="">
                            <img src="images/icon/service-icon1-h.png" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>HR Consulting Services</h4></a>
                            <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is
                                simply.</p>
                            <a class="more_link" href="cunsulting-service">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_item">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/icon/service-icon2-h.png" alt="">
                            <img src="images/icon/service-icon2-h.png" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>Contract Staffing Services</h4></a>
                            <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is
                                simply.</p>
                            <a class="more_link" href="contract-staffing-service">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_item">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/icon/service-icon4-h.png" alt="">
                            <img src="images/icon/service-icon4-h.png" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>Staff Augmentation Services</h4></a>
                            <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is
                                simply.</p>
                            <a class="more_link" href="Staff-Augmentation-Services">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_item">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/icon/service-icon4-h.png" alt="">
                            <img src="images/icon/service-icon4-h.png" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>Leadership Hiring Services</h4></a>
                            <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is
                                simply.</p>
                            <a class="more_link" href="Leadership-Hiring-Services">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_item">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/icon/service-icon5-h.png" alt="">
                            <img src="images/icon/service-icon5-h.png" alt="">
                        </div>
                        <div class="media-body">
                            <a href=""><h4>Men power recruitment services</h4></a>
                            <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is
                                simply.</p>
                            <a class="more_link" href="/man-power-services.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_item">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/icon/service-icon6-h.png" alt="">
                            <img src="images/icon/service-icon6-h.png" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>IT Staffing Services</h4></a>
                            <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is
                                simply.</p>
                            <a class="more_link" href="IT-Staffing-Services">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="helpline_area">
    <div class="container">
        <div class="helpline_inner">
            <div class="media">

                <div class="media-body">
                    <h6>Need consultation for job</h6>
                    <h4>Call Us Now </h4>
                    <p>Contact our customer support team if you have any further questions. We are heare to help you
                        out</p>
                    <div class="contact_d">
                        <a href="#"> +9184475 81034</a>
                        <a style="text-transform: lowercase" href="mailto:akostaplacement@gmail.com">akostaplacement@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="our_service_area">
    <div class="container">
        <div style="text-align: center" class="section_title">
            <h2 >latest jobs</h2>
            <a href="/user-jobs">See All Jobs</a>
        </div>
        <div class='row service_inner'>
        <?php
        include "core/database/connection_db.php";
        $sql = "SELECT * from jobinformation ORDER BY id desc limit 3";
        $result = mysqli_query($conn, $sql);
        echo "";
        while ($row = mysqli_fetch_array($result)) {

            echo "

            <div class='col-md-4 col-sm-6'>
                <div class='service_item'>
                    <div class='media'>
                        <div class='media-left'>
                            <img src='images/icon/service-icon1-h.png' >
                            <img src='images/icon/service-icon1-h.png' >
                        </div>
                        <div class='media-body' style='color: white; text-transform: uppercase; letter-spacing: 2px;'>
                            <h3> " . $row['jobpost'] . "</h3>
                            <h5>Rs: " . $row['salary'] . "</h5>
                            <h5>" . $row['jobcategory'] . "</h5>

                            <a class='more_link' href='candidate-job?id=" . $row['id'] . "'>Apply Now</a>
                            <a class='more_link' href='user_job_info.php?id=" . $row['id'] . "'>Show details</a>
                        </div>
                    </div>
                </div>
            </div>

        

    ";
        }


        ?>
        </div>
    </div>
</section>



</div>

<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
