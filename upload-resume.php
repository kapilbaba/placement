<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 31/03/18
 * Time: 15:48
 */


session_start(); ?>
<?php $title = "upload form"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
    .form-control {
        padding: 6px 12px;
    }
    .registration{
        margin-top: 10%;
        margin-bottom: 10%;
    }
    body,html {
        background: url("/images/jobconfirm.jpeg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover
    }
</style>
<div id="page">


    <section class="registration form_page">
        <h3 style="text-align: center">Upload Your resume</h3>
        <div class="container">

                <div class="col-md-4 col-md-offset-4">
                    <div class="container">
                        <form ROLE="form" action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label style="margin: 5px 0px 5px 0px" for="resume">Upload Resume</label>
                                    <input value="resume_upload" required="required" type="file" accept=".doc, .docx"
                                           class="" id="resume" name="resume_upload">
                                </div>
                            </div>
                            <p><?php echo $_SESSION['upload-error']; ?></p>
                            <p style="text-align: left">
                                <input style="margin-left: 15px" name="upload" type="submit" class="button1"
                                       value="Upload"/>
                                <br>
                                <br>
                                <a type="button"  href="user-dashboard"><?php echo $_SESSION['upload-success'];$_SESSION['upload-success']=null;?></a>
                            </p>

                        </form>
                    </div>

                </div>


        </div>

    </section>


</div>

<?php include "layout/core/script.php"; ?>

</html>
