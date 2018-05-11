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


    <?php
    if (empty($_SESSION["authenticated"]) == true) {
        include "layout/navbar.php";
    } else {
        include 'layout/user-navbar.php';
    }
    ?>

    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-col">
                        <h5>Welcome !</h5>
                        <h2> Akostaplacement Services</h2>
                        <h3 class="cd-headline clip">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">We are experienced</b>
                                <b>Also Professional</b>
                                <b>we will placed you in better place</b>
                            </span>
                        </h3>
                        <a class="btn btn-default simple-btn" href="/contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About start -->
    <section class="about-area about-area-two" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-col">
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="flaticon-wrench"></i>
                                <h4>Our mission</h4>
                            </div>
                            <p>consectetur adipisicing elit. Neque laboriosam quisquam perspiciatis error repellat ex doloremque ab consequatur.</p>
                        </div>
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="flaticon-bricks"></i>
                                <h4>Our vision</h4>
                            </div>
                            <p>consectetur adipisicing elit. Neque laboriosam quisquam perspiciatis error repellat ex doloremque ab consequatur.</p>
                        </div>
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="flaticon-worker-1"></i>
                                <h4>Our value</h4>
                            </div>
                            <p>consectetur adipisicing elit. Neque laboriosam quisquam perspiciatis error repellat ex doloremque ab consequatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-col">
                        <div class="about-image">
                            <img src="images/1.png" alt="">
                        </div>
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
                        <h4><span>Mail Address:</span> contact@akostaplacement.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--services two start-->
    <section class="services-area-two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="defult-title text-center">
                        <h1>Our <span>services</span></h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/1.jpg" alt="">
                        <div class="service-two-content">
                            <h4>HR CONSULTING SERVICES</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            <a class="btn btn-default simple-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/2.jpg" alt="">
                        <div class="service-two-content">
                            <h4>CONTRACT STAFFING SERVICES</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            <a class="btn btn-default simple-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/3.jpg" alt="">
                        <div class="service-two-content">
                            <h4>STAFF AUGMENTATION SERVICES
                            </h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            <a class="btn btn-default simple-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/4.jpg" alt="">
                        <div class="service-two-content">
                            <h4>IT STAFFING SERVICES
                            </h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            <a class="btn btn-default simple-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/5.jpg" alt="">
                        <div class="service-two-content">
                            <h4>MEN POWER RECRUITMENT SERVICES
                            </h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            <a class="btn btn-default simple-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/6.jpg" alt="">
                        <div class="service-two-content">
                            <h4>LEADERSHIP HIRING SERVICES
                            </h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            <a class="btn btn-default simple-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="appointment-area" id="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="appointment-col">
                        <div class="defult-title text-left bl-none">
                            <h1>Make An <span>Appointment</span></h1>
                            <h5>Send Us Message</h5>
                        </div>
                        <form action="mail.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="appointment-col">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="appointment-col">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="appointment-col">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="subject" name="subject">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="appointment-col center1199">
                                        <textarea class="form-control" rows="5" placeholder="Message"  name="message"></textarea>
                                        <button class="btn btn-default simple-btn" type="submit" name="submit">Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="appointment-col appointment-img wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="images/worker.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Start -->






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
                            <br>
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
