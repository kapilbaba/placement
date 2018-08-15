<?php $title = "404"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>

<div id="page">
    <?php
    if (empty($_SESSION["authenticated"])== true){
        include "layout/navbar.php"; }
    else{
        include 'layout/user-navbar.php';
    }
    ?>




    <div style="margin-bottom: 20%;" class="confirmed">



        <div style="margin-top: 20%" class="container">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <h3 style="text-align: center">
                    404 page is not found
                    <a href="/">Go Back To home</a>
                </h3>

            </div>
        </div>

    </div>

</div>




<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
