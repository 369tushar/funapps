<?php

$url = 'https://graph.facebook.com/'.$fbid.'/feed';

$args = array(  
                'link' => ''.$domain.'/apps/'.$foldername.'/app.php?fbid='.$fbid.'',
                'access_token' => $access_token);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $args);

curl_exec($ch);
curl_close($ch);

?>