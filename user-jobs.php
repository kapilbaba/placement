<?php $title = "job"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
    body {
        background: inherit;
    }

    .btn {
        padding: 8px;
        border-radius: 0px;
        margin-top: -5px;
        background: #404a5780;
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
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3><?php echo $title; ?></h3>
            </div>
        </div>
    </section>
    <section class="job_search">


        <div class="container">

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Jobs</li>

            </ol>
            <div class="col-md-4 col-md-offset-4 col-xs-12">

                <p style="color: red; text-align: center"><?php echo $_SESSION['job-update-failed']; ?></p>


            </div>
            <div style="clear: both"></div>

            <?php
            include "core/database/connection_db.php";
            $sql = "SELECT * from jobinformation";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {

                echo "

<div class='row service_inner'>
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
<a class='more_link' href='user_job_info.php?id=" . $row['id'] . "'>Show details</a>
<br>
                            <a class='more_link' href='candidate-job?id=" . $row['id'] . "'>Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
 
    ";
            }


            ?>

        </div>


    </section>


</div>
<div style="clear: both"></div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
