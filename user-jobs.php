<?php $title = "job"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
    body {
        background: inherit;
    }

.job_search{
    margin-top: 10%;

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
                            <p><a href="/">Home</a> | <a href="#"><span><?php echo $title;?></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="job_search">


        <div class="container">

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


    </section>


</div>
<div style="clear: both"></div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
