<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 10/03/18
 * Time: 14:02
 */

$title = "allusers";
session_start();
?>
<?php include "core/script/admin-auth.php" ?>
<!DOCTYPE html>
<html>
<?php
include "core/database/connection_db.php";
?>
<?php include_once 'admin/includes/head.php' ?>

<body class="hold-transition skin-red sidebar-mini">
<style>
    h4 ,p {
        background: white;
        color: black;
        padding: 10px;
        font-size: 15px;
    }
</style>
<div class="wrapper">
    <?php include_once 'admin/includes/header.php'; ?>
    <?php include_once 'admin/includes/left-sidebar.php'; ?>
    <div class="content-wrapper">
        <?php

        $id = $_GET['id'];

        $sql = "SELECT * FROM jobinformation WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $jobpost = $row["jobpost"];
                $jobid = $row["id"];
                $description1 = $row["description1"];

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


        <style>
            .border {

                border: solid 1px black;
                margin: 10px;
                padding: 10px;
                background: white;
                font-size: medium;

            }

            .line {
                display: inline-block;
                text-decoration: none;
            }

            .bg {
                width: 200px;
                padding: 10px;
                background: #ed5888;
                display: inline-block;
                text-decoration: none;
            }

        </style>


        <div class="container">
            <div style="margin-top: 10px; margin-bottom: 10px;" class="row">
                <div class="col-md-12">
                    <form method="post" action="postjob.php">
                        <input type="hidden" name="_token" value="">

                        <div class="panel panel-danger">
                            <div class="panel-heading"><h3 class="panel-title">Job Description</h3></div>
                        </div>

                        <div class="form-group input-field">
                            <label for="post">Job Post</label>
                            <p><?php echo $jobpost?></p>
                        </div>
                        <div class="form-group input-field">
                            <label for="description_1">job Description</label>
                            <p><?php echo $description1?></p>   </div>

                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Job Information</h3></div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="salary">salary</label>
                                    <p><?php echo $sallary?></p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="indrustry">Indrustry</label>
                                    <p><?php echo $indrustry?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="category">job category</label>
                                    <p><?php echo $category?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="typ">employment type</label>
                                    <p><?php echo $type?></p>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Job Skills</h3></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-field">
                                    <label for="skill1">key skills 1</label>
                                   <p><?php echo $skill1?></p>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-group input-field">
                                    <label for="skill2">key skills 2</label>
                                    <p><?php echo $skill2?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-field">
                                    <label for="skill3">key skills 3</label>
                                    <p><?php echo $skill3?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input-field">
                                    <label for="skill4">key skills 4</label>
                                    <p><?php echo $skill4?></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group input-field">
                                    <label for="skill5">key skills 5</label>
                                    <p><?php echo $skill5?></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Required Candidate Profile</h3></div>
                            </div>
                            <div class="form-group input-field">
                                <label for="candidate_profile">desire candidate profile</label>

                                <p><?php echo $candidateprofile?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">company address</h3></div>
                            </div>
                            <div class="form-group input-field">
                                <label for="candidate_profile">company details</label>
                                <p style="text-transform: capitalize"><?php echo $company?></p>
                            </div>
                        </div>


                    </form>
                </div>
            </div>


        </div>


    </div>
</div>


<?php include_once 'admin/includes/footer.php'; ?>


<?php include_once 'admin/includes/right-sidebar.php'; ?>

<div class="control-sidebar-bg"></div>

<?php include_once 'admin/includes/script.php'; ?>


</body>
</html>
