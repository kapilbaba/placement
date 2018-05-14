<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 21/03/18
 * Time: 09:35
 */
?>
<?php

include "core/database/connection_db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM jobinformation WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $jobid = $row["id"];
        $jobpost = $row["jobpost"];
        $description1 = $row["description1"];
        $description2 = $row["description2"];
        $description3 = $row["description3"];
        $description4 = $row["description4"];
        $description5 = $row["description5"];
        $description6 = $row["description6"];
        $description7 = $row["description7"];
        $sallary = $row["salary"];
        $indrustry = $row["indrustry"];
        $category = $row["jobcategory"];
        $type = $row["jobtype"];
        $skill1 = $row["skill1"];
        $skill2 = $row["skill2"];
        $skill3 = $row["skill3"];
        $skill4 = $row["skill4"];
        $skill5 = $row["skill5"];
        $candidateprofile = $row["profilecandidate"];
        $company = $row["companyaddress"];

    }
} else {
    echo "0 results";
}


?>
<?php $title = "job-information"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>

    .btn {
        padding: 8px;
        border-radius: 0px;
        margin-top: -5px;
        background: #404a5780;
        color: white;
    }
    pre{
        font-size: 14px;
        font-family: inherit;
    }
    .job_search{
        margin-top: 10%;

    }

</style>
<div id="page">

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
                            <h2><?php echo $title;?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <p><a href="/">Home</a> | <a href="/user-jobs.php">jobs</a> |<span><?php echo $title;?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="job_search">



            <div class="col-md-12  col-xs-12">



                <div class="container">
                    <div class="well">

                        <div class="panel panel-info">
                            <div class="panel-heading">Job post</div>
                            <div class="panel-body"><span><?php echo $jobpost; ?></span></div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">Job Requirement</div>
                            <div class="panel-body"><span><?php echo $candidateprofile; ?></span></div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">Job discription</div>
                            <div class="panel-body"><p><?php echo $description1; ?></p>
                            </div>
                        </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">Job skills</div>
                                <div class="panel-body"><span><?php echo $skill1; ?></span>,

                                    <span><?php echo $skill2; ?></span>,
                                    <span><?php echo $skill3; ?></span>,
                                    <span><?php echo $skill4; ?></span>,
                                    <span><?php echo $skill5; ?></span></div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">Job sallary</div>
                                <div class="panel-body">
                                    <span><?php echo $sallary; ?></span>
                                </div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading">Job category</div>
                                <div class="panel-body">
                                    <span><?php echo $category; ?></span>
                                </div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading">Job indrustry </div>
                                <div class="panel-body"><span><?php echo $indrustry; ?></span></div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading">Job Type </div>
                                <div class="panel-body"><span><?php echo $type;?></span></div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading">Company Details </div>
                                <div class="panel-body"><p><?php echo $company;?></p></div>
                            </div>

                            <a class="btn btn-default btn-lg" type="submit" href="candidate-job.php?id=<?php  echo $jobid; ?>">confirm job</a>
                        </div>
                        <div style="clear: both"></div>


                    </div>

    </section>


</div>
<div style="clear: both"></div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
