<?php

$domain = "https://app.newsspad.com";
$author = "learntotricks";
$site_name = "newsspad.com";
$contact_email = "contact@newsspad.com";



$appId = '1276348592755399';
$appSecret = '520335ddbbb24c07cbe2311319d1eadd';



$myfbadmin = "966242223397117";
$imgresolution = 75;
$indexlikepopup = 0;  // if 1=Enable , 0=Disable
$resultlikepopup = 0;  // if 1=Enable , 0=Disable
$applikepopup = 0;  // if 1=Enable , 0=Disable
$fb_like = "https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FPUBG-T-shirt-464362700761109&width=210&layout=standard&action=like&size=small&show_faces=false&locale=en_US&share=false&height=35";


$processwatchpage="result.php";

$sharewatchpage= "share.php";

$scope ="email,public_profile,user_friends";

$authpermission = "http://www.facebook.com/dialog/oauth?type=user_agent&scope=".$scope."&client_id=".$appId."&client_secret=".$appSecret."&redirect_uri=".$domain."/apps/".$foldername."/auth.php";

?>