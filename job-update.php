<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 22/03/18
 * Time: 15:29
 */
include "core/database/connection_db.php";
session_start();
$update = $_POST['confirm'];
$job_id = $_POST['job_id'];
$job_name = $_POST['job_name'];
$id = $_SESSION['id'];
if (isset($update)) {


    $sql = "UPDATE users SET jobid='$job_id' , jobname='$job_name' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("location:user-dashboard.php");
        $_SESSION['job-updated']="your job has been sent to our HR head.";
    } else {
        header("location:user-jobs.php");
        $_SESSION['job-update-failed']="job update failed";
    }

} else {
    $conn->close();
}