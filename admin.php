<?php
$title = "admin-dashboard";
session_start(); ?>
<?php include "core/script/admin-auth.php" ?>
<!DOCTYPE html>
<html>

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
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php
                        include "core/database/connection_db.php";
                        $sql = "SELECT * from jobinformation ORDER BY id desc limit 7";
                        $result = mysqli_query($conn, $sql);
                        echo "<div class='table-responsive'>
                            <table class='table no-margin'><thead>
                                <tr>
                                    <th>Jobs ID</th>
                                    <th>Jobs post</th>
                                    <th>salary</th>
                                    <th>category</th>
                                    <th>edit</th>
                                </tr>
                                </thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo"<tbody>
                                <tr>
                                    <td>".$row['id']."</td>
                                    <td>".$row['jobpost']."</td>
                                    <td>".$row['salary']."</td>
                                    <td>".$row['jobcategory']."</td>
                                        <td>
                                        <a href='job.php?id=" . $row['id'] . "'>view</a>
                                    </td>
                                </tr>
";
                        }

                        ?>



                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="alljobs.php" class="btn btn-sm btn-default btn-flat pull-right">View All jobs</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Candidates</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <?php
                        include "core/database/connection_db.php";
                        $sql = "SELECT * from users ORDER BY id desc limit 7";
                        $result = mysqli_query($conn, $sql);
                        echo "<div class='table-responsive'>
                            <table class='table no-margin'>
                                <thead>
                                <tr>
                                    <th>candidate id</th>
                                    <th>name</th>
                                    <th>contact</th>
                                    <th>resume</th>
                                </tr>
                                </thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo" <tbody>
                                <tr>
                                    <td><a href=''>".$row['id']."</a></td>
                                    <td>".$row['firstname']."</td>
                                    <td>".$row['contact']."</td>
                                    <td>
                                        <a href='".$row['resumes']."'>view</a>
                                    </td>
                                </tr>
";
                        }

                        ?>




                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="allusers.php" class="btn btn-sm btn-default btn-flat pull-right">View All candidates</a>
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
