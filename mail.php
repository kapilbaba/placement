<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 28/03/18
 * Time: 08:45
 */
$name =$_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$mailto ="contact@akostaplacement.com";
$header ="from:" .$email;
$txt ="you recive a text from ".$name."./n/n".$message;

mail($mailto, $subject, $txt ,$header);
header("index.php?mailsend");

