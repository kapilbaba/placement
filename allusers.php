<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 18/03/18
 * Time: 14:44

 *
 * <?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 10/03/18
 * Time: 14:02
 */
$title = "allusers";
session_start(); ?>
<?php include "core/script/admin-auth.php" ?>
<!DOCTYPE html>
<html>
<?php
include "core/database/connection_db.php";
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
        <div class="container"><br>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All jobs</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">

                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">


                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <?php
                        $sql = "select * from users";
                        $result = mysqli_query($conn, $sql);
                        echo "<table class='table table-hover'>
                            <tbody><th>ID</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>contact</th>
                            <th>status</th>
                            <th>resume</th>
                            <th> jobs</th>
                            <th>edit</th>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "
                               
                                <tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['firstname'] . "</td>
                                <td>" . $row['lastname'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['password'] . "</td>
                                <td>" . $row['contact'] . "</td>
                                <td><span class='label label-success'>".$row['candidate_status']."</span></td>
                                <td><a  href='" .$row['resumes']. "'>view</a></td>
                                <td><a  href='job.php?id=" .$row['jobid']. "'>view</a></td>
                                <td><a href='candidateinfo.php?id=".$row['id']."' >edit status</a></td>
                         
                         ";
$_SESSION['candidateid']=$row['id'];
                        }

                        ?>

                        <?php



                        ?>

                        </tbody>
                        </table>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!--/.box -->
    </div>

</div>


<?php include_once 'admin/includes/footer.php'; ?>


<?php include_once 'admin/includes/right-sidebar.php'; ?>

<div class="control-sidebar-bg"></div>


<?php include_once 'admin/includes/script.php'; ?>


</body>
</html>