<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 31/03/18
 * Time: 17:34
 */

session_start();
include "core/database/connection_db.php";
$number = $_POST['track_number'];
$name = $_POST['track_emial'];
$track = $_POST['track'];

if (isset($track)){
    $sql = "SELECT candidate_status FROM users WHERE id ='$number' AND  email ='$name'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $status = $row['candidate_status'];

             header("location:track-application?status=$status");
        }
    } else {

        header("location:track-application?status=Applicant information is wrong");
    }
}
else{
    die();
}
$conn->close();
?>