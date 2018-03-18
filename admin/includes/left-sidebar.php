
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin_name ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/admin.php"><i class="fa fa-laptop"></i> <span>Dashboard</span></a></li>
            <li class=""><a href="/allusers.php"><i class="fa fa-users"></i> <span>All candidates</span></a></li>


            <li><a href="/alljobs.php"><i class=""></i> <span>show all jobs</span></a></li>
            <li><a href="/post_job.php"><i class=""></i> <span>post new jobs</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>