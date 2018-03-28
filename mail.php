<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 28/03/18
 * Time: 08:45
 */
$name =$_POST['name'];
$email = $_POST['email'];
$message = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "contact@akostaplacement.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";