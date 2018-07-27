<?php

include 'database/connection_db.php';
$jobcategoryid =$_POST['job_categoryid'];
$jobsubcategoryid =$_POST['job_subcategoryid'];

if(!empty($jobcategoryid == true)){

    $query = $conn->query("SELECT * FROM job_subcategory WHERE job_categoryid =".$jobcategoryid);
    $rowCount = $query->num_rows;

    if($rowCount > 0){
        echo '<option value="">Select job sub category</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['job_subcategoryid'].'">'.$row['job_subcategoryname'].'</option>';
        }
    }else{
        echo '<option value="">subcategory not available</option>';
    }
}elseif(!empty($jobsubcategoryid==true)){

    $query = $conn->query("SELECT * FROM job_special_category WHERE job_subcategoryid = ".$jobsubcategoryid);


    $rowCount = $query->num_rows;

    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['job_special_categoryid'].'">'.$row['job_special_categoryname'].'</option>';
        }
    }else{
        echo '<option value="">special category is not available</option>';
    }
}

