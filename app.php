<?php

if(isset($_GET['fbid'])){
$fbid = base64_decode($_GET['fbid']);
}

$doamin = "https://app.newsspad.com";
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$portions = explode("/",$actual_link);
$foldername = $portions[2];

$data = file_get_contents('https://app.newsspad.com/apps/'.$foldername.'/app.php?fbid='.$fbid.');

print_r($data);
?>
