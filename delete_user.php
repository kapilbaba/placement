<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 16/05/18
 * Time: 19:12
 */
?>
<?php
session_start();

$id = $_GET['id'];
include "core/database/connection_db.php";

$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:alluser.php");
$_SESSION['user_deleted'] ="User is deleted";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

