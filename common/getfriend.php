<?php
     $ch = curl_init();
       $url = "https://graph.facebook.com/v2.0/me/invitable_friends?fields=first_name,last_name,picture.width(480).height(480)&limit=15&access_token=".$access_token;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        
        $rr = curl_exec($ch);
        $friends = json_decode($rr,true);
		
shuffle($friends["data"]);      
foreach($friends['data'] as $value) {
 $name[]  = $value["first_name"];
 $img[]  = $value["picture"]["data"]["url"];
  
  }

?>