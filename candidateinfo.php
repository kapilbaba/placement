<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 19/03/18
 * Time: 10:54
 */
$title = "allusers";
session_start(); ?>
<?php include "core/script/admin-auth.php" ?>
<!DOCTYPE html>
<html>
<?php

include "core/database/connection_db.php";
 $get =$_GET['id'];
$sql = "select * from users WHERE id =' $get '";
$result = $conn->query($sql) or die($conn->error);
$result->num_rows > 0;
while ($row = $result->fetch_assoc()) {

    $email = $row['email'];
    $pwd = $row['password'];
    $contact = $row['contact'];
    $resume = $row['resumes'];
    $status= $row['candidate_status'];
    $conn->close();
}
$get = $_SESSION['id_user'];


?>

<?php include_once 'admin/includes/head.php' ?>


<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    <?php include_once 'admin/includes/header.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include_once 'admin/includes/left-sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">
            <div class="col-md-12">
                <div style="margin: 0px;" class="form_page">
                    <form ROLE="form" action="status.php" method="post">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input disabled value="<?php echo $email; ?>" required="required" type="email"
                                       class="form-control"  name="user_email">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="contact">contact no</label>
                                <input disabled value="<?php echo $contact; ?>" required="required" type="number"
                                       class="form-control"  name="contact_info">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="contact">password</label>
                                <input disabled value="<?php echo $pwd; ?>" required="required" type="text"
                                       class="form-control"  name="contact_info">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="password">status</label>
                                <input placeholder="panding | on process | placed " value="<?php echo $status; ?>" required="required" type="text"
                                       class="form-control"  name="contact_info">
                            </div>
                        </div>

                        <p><?php echo $_SESSION['update-success'];
                            $_SESSION['update-not-success']; ?></p>


                        <p style="text-align: center">
                            <input name="status_submit" type="submit" class="button1" value="Update"/>
                        </p>

                    </form>
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