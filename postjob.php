<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 15/03/18
 * Time: 14:02
 */

include 'core/database/connection_db.php';

$jobsubmit = $_POST['post'];
//job description
$jobpost = $_POST['jobpost'];

$jobdesription_1 = $_POST['desription_1'];

$companyaddress = $_POST['company_address'];
//job information

$jobsalary = $_POST['job_salary'];
$jobindrustry = $_POST['job_indrustry'];
$jobtype = $_POST['jobtype'];
$jobcategory = $_POST['job_category'];
//job skills
$jobskill1 = $_POST['skill_1'];
$jobskill2 = $_POST['skill_2'];
$jobskill3 = $_POST['skill_3'];
$jobskill4 = $_POST['skill_4'];
$jobskill5 = $_POST['skill_5'];
//profile
$jobcandidateprofile = $_POST['candidate_profile'];

if (isset($jobsubmit)) {




    $sql = "INSERT INTO jobinformation (description1, salary, indrustry, jobcategory, jobtype, skill1, skill2, skill3, skill4, skill5, profilecandidate, companyaddress, jobpost)
VALUES ('$jobdesription_1','$jobsalary','$jobindrustry','$jobcategory','$jobtype','$jobskill1','$jobskill2','$jobskill3','$jobskill4','$jobskill5','$jobcandidateprofile','$companyaddress','$jobpost')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



   echo "job posted sucessfuly"."<a href='post_job.php'>go back</a>";


}







