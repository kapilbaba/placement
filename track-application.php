<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 31/03/18
 * Time: 15:29
 */

session_start(); ?>
<?php $title = "track application status"; ?>
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
    body {
        background: url("/images/jobconfirm.jpeg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover
    }
</style>
<div id="page">
    <?php $status = $_GET['status']; ?>

    <?php include "layout/header.php"; ?>
    <?php include "layout/navbar.php"; ?>

    <section class="registration">
        <h3 style="text-align: center">track applicant status</h3>
        <div class="container">
            <div class="form_page">
                <form ROLE="form" action="track.php" method="post">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">Job Seeker No</label>
                            <input required="required" type="number" class="form-control" id="name" name="track_number">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email"> Job Seeker Email</label>
                            <input required="required" type="email" class="form-control" id="email" name="track_emial">
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h3  style="color: red; "><?php   echo $status; ?></h3>

                            </div>
                        </div>
                    </div>

                    <p style="text-align: center">
                        <button id="btnSubmit" type="submit" name="track" class="button1">track</button>
                    </p>

                </form>
            </div>

        </div>

    </section>


</div>
<?php include "layout/core/script.php"; ?>

</html>
