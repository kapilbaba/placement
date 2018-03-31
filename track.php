<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 31/03/18
 * Time: 17:34
 */

session_start();
include "core/database/connection_db.php";
$number =$_POST['rack_number'];
$name =$_POST['track_name'];
$track =$_POST['track'];
if (isset($track)){
    $sql = "SELECT * from users Where id='$number' AND  firstname='$name'";
    $result = $conn->query($sql);
    $result->num_rows > 0;
    while ($row = $result->fetch_assoc()) {
$status = $row['candidate_status'];

    }
    $_SESSION['status']= $status;
    header("location:track-application");

}
else{
    header("location:track-application");
}


?>