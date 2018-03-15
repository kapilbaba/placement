<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 15/03/18
 * Time: 14:02
 */

include 'core/database/connection_db.php';

$jobpost=$_POST['post'];
//job description
$jobdesription_8 =$_POST['desription_8'];
$jobdesription_1 =$_POST['desription_1'];
$jobdesription_2 =$_POST['desription_2'];
$jobdesription_3 =$_POST['desription_3'];
$jobdesription_4 =$_POST['desription_4'];
$jobdesription_5 =$_POST['desription_5'];
$jobdesription_6 =$_POST['desription_6'];
$jobdesription_7 =$_POST['desription_7'];
//job information

$jobsalary =$_POST['job_salary'];
$jobindrustry =$_POST['job_indrustry'];
$jobtype =$_POST['jobtype'];
$jobcategory =$_POST['job_category'];
//job skills
$jobskill1 =$_POST['skill_1'];
$jobskill2 =$_POST['skill_2'];
$jobskill3 =$_POST['skill_3'];
$jobskill4 =$_POST['skill_4'];
$jobskill5 =$_POST['skill_5'];
//profile
$jobcandidateprofile =$_POST['candidate_profile'];

if (isset($jobpost)){

    $sql = "insert into jobinformation(description1, description2, description3, description4, description5, description6, description7, description8, salary, indrustry, jobcategory, jobtype, skill1, skill2, skill3, skill4, skill5, profilecandidate) 
VALUE ('$jobdesription_1','$jobdesription_2','$jobdesription_3','$jobdesription_4','$jobdesription_5','$jobdesription_6','$jobdesription_7','$jobdesription_8','$jobsalary','$jobindrustry','$jobcategory','$jobtype','$jobskill1','$jobskill2','$jobskill3','$jobskill4','$jobskill5','$jobcandidateprofile')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}







