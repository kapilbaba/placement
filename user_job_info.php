<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 21/03/18
 * Time: 09:35
 */
?>
<?php
include "core/script/user-authenticated.php";
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
<?php $title = "job"; ?>
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
    <?php include "layout/user-navbar.php"; ?>
    <section class="job_search">
        <div class="container">
            <?php include "layout/header2.php"; ?>

            <div class="col-md-12  col-xs-12">
                <h1 style="text-align: center">Job Information</h1>


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
                            <div class="panel-body"><span><?php echo $description1; ?></span>
                                <br>
                                <span><?php echo $description2; ?></span>
                                <br>
                                <span><?php echo $description3; ?></span>
                                <br>
                                <span><?php echo $description4; ?></span></div>
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
                                <span><?php echo $sallary; ?></span><span><span><?php echo $category; ?></span>,
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
                            <div class="panel-body"><span><?php echo $company;?></span></div>
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
