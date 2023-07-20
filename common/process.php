<?php
include("appconfig.php");
include("../ads/config.php");

?>


<?php
if($_REQUEST['access_token']) 

{
$access_token = json_decode($_REQUEST['access_token'],true);

 $profilename1 = base64_decode($access_token['username']);

// $profilename2 = $user_profile['last_name'];
$usernopic = base64_decode($access_token['file']);


// $name12 = $user_profile['name'];

// $temp_folderr = 'imgs/';//temp dir path to store user images


$gender = $access_token['gender'];

$fbid = base64_decode($access_token['fbid']);

$email = base64_decode($access_token['email']);


$fp = fopen("../ads/aaemail.txt", "a+") or exit("Unable to open file!");
$savestring =  $email."\n";
fwrite($fp, $savestring);
fclose($fp);


include("appconfig2.php");

// //include("../ads/autopost.php");


}

 $arr = array("fbid"=>"$fbid");
    echo json_encode($arr);

?>
