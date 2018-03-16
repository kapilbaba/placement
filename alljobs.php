<?php
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
                        <table class="table table-hover">
                            <?php

                            $sql ="select * from jobinformation";
                            $result = mysqli_query($conn,$sql);
                            while ($row = mysqli_fetch_row($result)){
                                printf ("%s (%s)\n",$row[0],$row[1]);
                            }

                            ?>
                            <tbody style="text-transform: capitalize">
                            <tr>
                                <th>ID</th>
                                <th>category</th>
                                <th>sallary</th>
                                <th>indrustry</th>
                                <th>edit</th>
                            </tr>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td>web</td>
                                <td>R.s 10000</td>
                                <td>IT</td>
                                <td><a href="">view</a></td>
                            </tr>
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


</div>

<?php include_once 'admin/includes/footer.php'; ?>


<?php include_once 'admin/includes/right-sidebar.php'; ?>

<div class="control-sidebar-bg"></div>
</div>

<?php include_once 'admin/includes/script.php'; ?>


</body>
</html>
