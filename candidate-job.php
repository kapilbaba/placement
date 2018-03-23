<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 22/03/18
 * Time: 14:28
 */

$title = "user-job information";
include "core/script/user-authenticated.php";
session_start();
?>


<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<?php
include "core/database/connection_db.php";
$id = $_GET['id'];
$sql = "select * from jobinformation WHERE id ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $jobid = $row["id"];
        $jobpost = $row["jobpost"];
        $sallary = $row["salary"];
        $indrustry = $row["indrustry"];
        $category = $row["jobcategory"];



    }
} else {
    echo "0 results";
}


?>

<style>
    .form_page{
        background: white;
    }
</style>


<div id="page">

    <?php include "layout/header.php"; ?>
    <?php include "layout/user-navbar.php"; ?>

    <section class="registration_1">

        <?php include "layout/header2.php" ?>

        <div class="container">
            <h3 style="text-align: center; color: black">Update Your Job inforamtion</h3>
            <div class="col-md-4 col-md-offset-4">
                <div style="margin: 0px;" class="form_page">

                    <form style="text-align: center"  action="job-update.php" method="post">
                        <div  class="col-md-12 col-sm-6 col-xs-12">
                            <div hidden class="form-group">
                                <label for="email">Job Id</label>
                                <input  value="<?php echo $jobid; ?>"  type="number"
                                       class="form-control" id="email" name="job_id">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="contact">Job Post</label>
                                <input  value="<?php echo $jobpost; ?>" type="text"
                                       class="form-control" id="contact" name="job_name">
                            </div>
                        </div>





                        <p style="text-align: center">
                            <input name="confirm" type="submit" class="button1" value="confirm job" />
                        </p>

                    </form>
                </div>

            </div>


        </div>




    </section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
