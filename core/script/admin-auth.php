<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 09/03/18
 * Time: 14:38
 */

session_start();
if (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location:admin-login.php');
}
?>
<?php
$id =$_SESSION['id'];
include "core/database/connection_db.php";
$sql = "SELECT * from admin Where id='$id'";
$result = $conn->query($sql);
$result->num_rows > 0;
while ($row = $result->fetch_assoc())
    $admin_name = $row['admin-name'];
$conn->close();
?>