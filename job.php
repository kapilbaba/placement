<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 10/03/18
 * Time: 14:02
 */

$title = "allusers";
session_start();
?>
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
    <?php include_once 'admin/includes/left-sidebar.php'; ?>
    <div class="content-wrapper">
        <?php

        $id = $_GET['id'];

$sql = "SELECT * FROM jobinformation WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $jobid =  $row["id"];
        $description1 =$row["description1"];
        $description2 =$row["description2"];
        $description3 =$row["description3"];
        $description4 =$row["description4"];
        $description5 =$row["description5"];
        $description6 =$row["description6"];
        $description7 =$row["description7"];
        $sallary= $row["salary"];
        $indrustry= $row["indrustry"];
        $category= $row["jobcategory"];
        $type= $row["jobtype"];
        $skill1= $row["skill1"];
        $skill2= $row["skill2"];
        $skill3= $row["skill3"];
        $skill4= $row["skill4"];
        $skill5= $row["skill5"];
        $candidateprofile= $row["profilecandidate"];
        $company= $row["companyaddress"];

    }
} else {
    echo "0 results";
}


?>


        <style>
            .border{

                border: solid 1px black;
                margin:10px;
                padding:10px;
                background: white;
                font-size: medium;

            }
            .line{
                display: inline-block;
                text-decoration: none;
            }
            .bg{
                width: 200px;
                padding: 10px;
                background: #ed5888;
                display: inline-block;
                text-decoration: none;
            }

        </style>
<div class="container">
    <div class="well">

        <ul class="border">
            <li class="bg line">Job Id</li>
            <li class="line"><p><?php echo $jobid;?></p></li>
        </ul>
            <ul class="border">
                <li class="bg line">Job description 1 :</li>
                <li class="line"><p><?php echo $description1;?></p></li>

            </ul>
        <ul class="border">
            <li class="bg line">Job description 2 :</li>
            <li class="line"><p><?php echo $description2;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">Job description 3 :</li>
            <li class="line"><p><?php echo $description3;?></p></li>

        </ul> <ul class="border">
            <li class="bg">Job description 4 :</li>
            <li class="line"><p><?php echo $description4;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">Job description 5 :</li>
            <li class="line"><p><?php echo $description5;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">Job description 6 :</li>
            <li class="line"><p><?php echo $description6;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">Job description 7 :</li>
            <li class="line"><p><?php echo $description7;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">salary :</li>
            <li class="line"><p><?php echo $sallary;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">indrustry</li>
            <li class="line" ><p><?php echo $indrustry;?></p></li>

        </ul>

        <ul class="border">
            <li class="bg">category</li>
            <li class="line"><p><?php echo $category;?></p></li>

        </ul>

        <ul class="border">
            <li class="bg">job type</li>
            <li class="line"><p><?php echo $type;?></p></li>

        </ul>

        <ul class="border">
            <li class="bg">skill1</li>
            <li class="line"><p><?php echo $skill1;?></p></li>

        </ul>


        <ul class="border">
            <li class="bg">skill2</li>
            <li class="line"><p><?php echo $skill2;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">skill3</li>
            <li class="line"><p><?php echo $skill3;?></p></li>

        </ul>
        <ul class="border">
            <li class="bg">skill4</li>
            <li class="line"><p><?php echo $skill4;?></p></li>

        </ul>

        <ul class="border">
            <li class="bg">skill5</li>
            <li class="line"><p><?php echo $skill5;?></p></li>

        </ul>

        <ul class="border">
            <li class="bg">candidate profile</li>
            <li class="line"><p><?php echo $candidateprofile;?></p></li>

        </ul>

        <ul class="border">
            <li class="bg">company address</li>
            <li class="line"><p><?php echo $company;?></p></li>

        </ul>






        <h1>

        </h1>
        <p1>

        </p1>
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
