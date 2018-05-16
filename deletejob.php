<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 16/03/18
 * Time: 18:46
 */
session_start();
$id = $_GET['id'];
include "core/database/connection_db.php";

    $sql = "DELETE FROM jobinformation WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("location:alljobs.php");
        $_SESSION['job_deleted'] ="job is deleted";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
