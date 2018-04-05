<?php $title = "home"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>

    button:hover, a:hover {
        opacity: 0.7;
    }
    .jobtitle{
        width: 100%;
        font-size: 36px;
        background: #46b5da;
        padding: 5px;
        color: white;
    }
</style>
<div id="page">

    <?php include "layout/header.php"; ?>
    <?php include "layout/navbar.php"; ?>

    <section class="container banner">
        <div class="back"
        ">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="row">
                <div class="intro">
                    <h1 class="jobtitle">Search Here For Jobs</h1>
                    <a style="color: white; text-decoration: none" href="user-jobs">
                    <button type="button" class="btn btn-block start-now">Start From Now &nbsp; <span
                                class="glyphicon glyphicon-chevron-right"></span></button></a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 ">
            <div class="row">

                <form action="sign_up.php" method="post" role="form" class="form">

                    <div class="container_home_register" >

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
                            <input required="required" type="number" class="form-control" name="contact_info"
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
                            <a style="text-decoration: none" class="button button1" href="candidate-login">Login here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div style="clear: both"></div>
        <div style="background: #fcfffa; padding: 10px; opacity: 0.75" class="banner_footer">

            <p style="text-align: center; color: #000000;">submit your resume now &nbsp;
                <a href="candidate-signup">
                    <button type="button" class="btn home_btn">
                        Register Now
                    </button>
                </a>

            </p>
        </div>
</div>

</section>

<section id="into">
    <div class="container home_intro" style=" color: white">

        <div class="col-md-8 col-xs-12-col-sm-12" >
            <div class="col-sm-12 col-xs-12 col-md-11  block">
                <h1>Welcome to A.J. Placement Consultants</h1>
                <p>A.J. Placement Consultants is a leading brand in International recruitment consultancy for last
                    28
                    years. Since our inception in 1989, we have been dully approved by Ministry of Overseas Indian
                    Affairs, Government of India, Vide registration No. ( B-0211/DEL/PER/1000+/5/2591/1989 ) and
                    registered with prestigious International Bench-marking & Certifications ISO 9001:2008 (QMS) We
                    at
                    A.J. Placement Consultants are determined to prov... <a href="">readmore</a></p>
            </div>

            <div class="col-sm-6 col-xs-12 col-md-5  block">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>
                <a class="btn-block" type="" href="">read more</a>
            </div>
            <div class="col-sm-6 col-xs-12 col-md-5 block ">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>
                <a class="btn-block" type="" href="">read more</a>
            </div>
            <div class="col-sm-6 col-xs-12 col-md-5  block">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>
                <a class="btn-block" type="" href="">read more</a>
            </div>
            <div class="col-sm-6 col-xs-12 col-md-5 block">
                <h4>Benefits of working in Middle East</h4>
                <p>Tax free salaries. Offered according to experience and negotiable to fit your needs• Free
                    furni.</p>
                <a class="btn-block" type="" href="">read more</a>
            </div>
        </div>

        <div style="text-align: center" class="col-md-4 col-xs-12 col-sm-12" >
            <h3>message of CEO</h3>
            <img class="ceo_img" src="images/ceo.jpg" alt="">
            <p>
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

<section class="submit_job">
    <h1>apply job online</h1>
    <a href="user-jobs">click here</a>
</section>

<section class="sector">
    <div class="container">
        <div class="row" style="margin-left: 10%">
            <div>
                <h1 style="text-align: center; color: white">services</h1>
            </div>
            <div style="letter-spacing: 1px;" class="col-sm-5 col-xs-12 col-md-3 col-md-offset-2 box">
                <h4>HR
                    Consulting
                    Services
                </h4>
                <a class="btn_apply" href="/cunsulting-service">read more</a>
            </div>

            <div class="col-sm-5 col-xs-12 col-md-3 box">
                <h4>Staff
                    Augmentation
                    Services
                </h4>
                <a class="btn_apply" href="/Staff-Augmentation-Services">read more</a>
            </div>
            <div class="col-sm-5 col-xs-12 col-md-3 box">
                <h4>Leadership
                    Hiring
                    Services
                </h4>
                <a class="btn_apply" href="/Leadership-Hiring-Services">read more</a>
            </div>
            <div  class="col-sm-5 col-xs-12 col-md-offset- col-md-3 box itbox">
                <h4>IT
                    Staffing
                    Services
                </h4>
                <a class="btn_apply" href="/IT-Staffing-Services">read more</a>

            </div>

            <div class="col-sm-5 col-xs-12 col-md-3 box margin">
                <h4>Contract
                    Staffing
                    Services</h4>
                <a class="btn_apply" href="contract-staffing-service">read more</a>
            </div>
        </div>



    </div>

</section>
<section class="latest_job">
    <div style="text-align: center;background: white;opacity:  0.76;"><h1>latest job </h1><span
                style="color: black;"><a style="color: black; text-decoration: none" href="user-jobs" >see all jobs</a></span></div>

    <?php
    include "core/database/connection_db.php";
    $sql = "SELECT * from jobinformation ORDER BY id desc limit 3";
    $result = mysqli_query($conn, $sql);
    echo "";
    while ($row = mysqli_fetch_array($result)) {

        echo "<div class='container latest_contain'>
        <div class='col-xs-12 col-sm-6 col-md-3 job_container' > <h3 class='job_profile'>" . $row['jobpost'] . "</h3>
    <p>salary : <span>rs" . $row['salary'] . "</span> -per month</p>
    <p>job category : <span>" . $row['jobcategory'] . "</span></p>
    <a class='btn_apply' href='candidate-job?id=".$row['id']."'>apply online</a>
    </div>
    ";
    }


    ?>


</section>




</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
