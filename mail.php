<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 28/03/18
 * Time: 08:45
 */

$apikey = '8ce09a535b51cf8884ea53f9f1bbe26eeeb995bc';

$name =$_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];


$curl = curl_init();

$json = [
    'options'=>['sandbox'=>true],
    'content'=>[
        'from'=>'contact@akostaplacment.com',
        'subject'=>$subject,
        'text'=>$message
    ],
    'recipients'=>[
        ['address'=>'contact@akostaplacement.com']
    ]
];

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sparkpost.com/api/v1/transmissions",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($json),
    CURLOPT_HTTPHEADER => array(
        "authorization: ".$apikey,
        "cache-control: no-cache",
        "content-type: application/json"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
header("index.php?mailsend");

