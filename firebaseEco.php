<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://##########.firebaseio.com/ecoLog';
// --- Use your token from Firebase here
$token = 'Your token here';
// --- Here is your parameter from the http GET
$temp = $_GET['t'];
$hum = $_GET['h'];
$light = $_GET['l'];
$co2= $_GET['c'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
date_default_timezone_set("Asia/Colombo");
$d=date("Y-m-d h:i:sa");
$response = $fb->push($firebasePath, [
        'temp' => $temp,
        'hum' => $hum,
        'light' => $light,
        'co2'  => $co2,
        'time'  => $d
    ]);
sleep(2);
echo $response;

?>
