<?php
$title = "user-dashboard";
include "core/script/user-authenticated.php";
session_start();
?>


<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<?php
$id = $_SESSION['id'];
include "core/database/connection_db.php";
$sql = "SELECT * from users Where id='$id'";
$result = $conn->query($sql);
$result->num_rows > 0;
while ($row = $result->fetch_assoc()) {

    $email = $row['email'];
    $pwd = $row['password'];
    $contact = $row['contact'];
    $resume = $row['resumes'];
    $status = $row['candidate_status'];
    $conn->close();
}
?>
<style>
    .form_page{
        background: #ffffff00;
    }
</style>


<div id="page">

    <?php include "layout/header.php"; ?>
    <?php include "layout/user-navbar.php"; ?>

    <section class="registration">

<?php include "layout/header2.php" ?>

        <div class="container">
            <div class="col-md-6">
                <div style="margin: 0px;" class="form_page">
                    <form ROLE="form" action="update_profile.php" method="post">
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
                                <input value="<?php echo $pwd; ?>" required="required" type="text" class="form-control"
                                       name="user_password">
                            </div>
                        </div>
                        <p><?php echo $_SESSION['success'];
                            $_SESSION['not-success']; ?></p>


                        <p style="text-align: center">
                            <input name="update" type="submit" class="button1" value="Update"/>
                        </p>

                    </form>
                </div>

            </div>

            <div class="col-md-6">
                <div class="form_page">
                    <form ROLE="form" action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label style="margin: 5px 0px 5px 0px" for="resume">Upload Resume</label>
                                <input value="resume_upload" required="required" type="file"
                                       class="" id="resume" name="resume_upload">
                            </div>
                        </div>
                        <p><?php echo $_SESSION['upload-done'];
                            echo $_SESSION['upload-error']; ?></p>
                        <p style="text-align: left">
                            <input style="margin-left: 15px" name="upload" type="submit" class="button1"
                                   value="Update"/>
                        </p>
                        <button style="margin-left: 15px;" TYPE="button" class="btn btn-block"><a href="<?php echo $resume; ?>">show resume</a>
                        </button>
                    </form>
                </div>

            </div>

        </div>
        <div style="text-align: center; margin: 10px">
            <h3>
                reqruitment process
            </h3>
            <p>status:</p><span style="background: red; color: white;padding: 10px; margin: 10px;"><?php echo $status; ?></span>

        </div>



    </section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
