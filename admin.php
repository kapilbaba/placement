<?php
$title = "admin-dashboard";
session_start(); ?>
<?php include "core/script/admin-auth.php" ?>
<!DOCTYPE html>
<html>
<?php
 $id =$_SESSION['id'];
include "core/database/connection_db.php";
$sql = "SELECT * from admin Where id='$id'";
$result = $conn->query($sql);
$result->num_rows > 0;
while ($row = $result->fetch_assoc())
    $admin_name = $row['admin-name'];
$conn->close();
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
            <div class="col-md-6 col-xs-12 col-sm-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest jobs</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Jobs ID</th>
                                    <th>date of job post</th>
                                    <th>category</th>
                                    <th>edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12/12/34</td>
                                    <td><span class="label label-success">IT</span></td>
                                    <td>
                                        <a href="">view</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                         <a href="all-user-admin.php" class="btn btn-sm btn-default btn-flat pull-right">View All jobs</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Candidates</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>candidate id</th>
                                    <th>candidate name</th>
                                    <th>Status</th>
                                    <th>edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="label label-success">pending</span></td>
                                    <td>
                                        <a href="">view</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                         <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All candidates</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
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
