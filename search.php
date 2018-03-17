<?php $title = "search-job"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
  body{
      background: inherit;
  }

    .btn {
        padding: 8px;
        border-radius: 0px;
        margin-top: -5px;
        background: #404a5780;
        color: white;
    }

</style>
<div id="page">

    <?php include "layout/header.php"; ?>
    <?php include "layout/navbar.php"; ?>
    <section class="job_search">
        <div class="container">
            <h3 style="text-align: center"><span style="border-bottom: solid 5px black">search job here</span></h3>
            <div class="col-md-4 col-md-offset-4 col-xs-12">
                <h1 style="text-align: center">akostaplacement services</h1>
                <p style="text-align: center">
                    <input type="search" placeholder="search job here">
                    <button type="submit" class="btn">search</button>
                </p>
            </div>
            <div style="clear: both"></div>

            <?php
            include "core/database/connection_db.php";
            $sql = "SELECT * from jobinformation";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {

                echo "  <div style='background: #62c1e2' class='container latest_contain'>
                <div class='col-xs-12 col-sm-6 col-md-3 job_container' > <h3 class='job_profile'>" .$row['jobpost']."</h3>
    <p>salary : <span>rs".$row['salary']."</span> -per month</p>
    <p>job category : <span>".$row['jobcategory']."</span></p>
    <a class='btn_apply' href=''>apply online</a>
    </div>
    ";
            }


            ?>

        </div>

    </section>


</div>
<div style="clear: both"></div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
