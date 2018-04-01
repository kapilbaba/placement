<?php
$title = "user-dashboard";
include "core/script/user-authenticated.php";
session_start();
?>


<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<?php
$jobid = $_GET['id'];
$id = $_SESSION['id'];
include "core/database/connection_db.php";
$sql = "SELECT * from users Where id='$id'";
$result = $conn->query($sql);
$result->num_rows > 0;
while ($row = $result->fetch_assoc()) {
$applicantid = $row['id'];
    $job = $row['jobname'];
    $email = $row['email'];
    $pwd = $row['password'];
    $contact = $row['contact'];
    $resume = $row['resumes'];
    $status = $row['candidate_status'];

}
?>


<div id="page">

    <?php include "layout/header.php"; ?>
    <?php include "layout/user-navbar.php"; ?>

    <section class="registration_1">

        <?php include "layout/header2.php" ?>

        <div class="container" style="margin-top: 5%;">
            <div class="col-md-12">
                <div style="margin: 0px;" class="form_page">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">user information</a></li>
                        <li><a data-toggle="tab" href="#menu2">Resume Update</a></li>
                        <li><a data-toggle="tab" href="#menu3">Job status </a></li>
                        <li><a data-toggle="tab" href="#menu4">applicant Id</a></li>

                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <form ROLE="form" action="update_profile" method="post">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="<?php echo $email; ?>" required="required" type="email"
                                               class="form-control" id="email" name="user_email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="contact">contact no</label>
                                        <input value="<?php echo $contact; ?>" required="required" type="number"
                                               class="form-control" id="contact" name="contact_info">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input value="<?php echo $pwd; ?>" required="required" type="text"
                                               class="form-control"
                                               name="user_password">
                                    </div>
                                </div>


                                <p><?php echo $_SESSION['success']; $_SESSION['success']=null;
                                    echo $_SESSION['not-success'];
                                    $_SESSION['not-success'] = null;
                                    ?></p>


                                <p style="text-align: center">
                                    <input name="update" type="submit" class="button1" value="update"/>
                                </p>

                            </form>
                        </div>

                        <div id="menu2" class="tab-pane fade">
                            <div style="text-align: center; margin: 10px">
                                <h3>
                                   Your Resume
                                </h3>
                                <br>
                                <br>
                                <a class="btn btn-default" href="<?php echo $resume; ?>">Show My Resume</a>
                                <br>
                                <br>
                                <a class="btn btn-info" href="upload-resume.php">Resume Update</a>

                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div style="text-align: center; margin: 10px">
                              
                                <h3>
                                    recruitment process
                                </h3>
                                <p>status:</p><span
                                        style="background: red; color: white;padding: 10px; margin: 10px;"><?php echo $status; ?></span>
                                <br>
                                <br>
                                <p style="color: red; text-align: center"><?php echo $_SESSION['job-updated']; ?></p>

                            </div>


                        </div>

                        <div id="menu4" class="tab-pane fade">
                            <div style="text-align: center; margin: 10px">
                                <h3>
                                    Applicant Id
                                </h3>
                                <br>
                                <br>
                                <span style="background: red; color: white;padding: 10px; margin: 10px;"><?php echo $applicantid; ?></span>


                            </div>


                        </div>


                    </div>
                </div>

            </div>

        </div>


</div>


</section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
