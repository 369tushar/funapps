<?php
    $ch = curl_init();
       $url = "https://graph.facebook.com/v2.0/me/photos/uploaded?limit=20&access_token=".$access_token;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        
        $rr = curl_exec($ch);
        $alb = json_decode($rr,true);
        
foreach($alb['data'] as $key=>$pp) {
 $id  = $pp['id'];

   
$like 	= "https://graph.facebook.com/".$id."/likes?&access_token=".$access_token;	
	curl_setopt($ch, CURLOPT_URL, $like);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        
        $data= curl_exec($ch);
        $user_profile_a[] = json_decode($data,true);
        
   

  }



function checkold($ppid,$arrrrray) {
	$ff= array();
        if(in_array($ppid,$arrrrray)){	
    		}else{$ff = $ppid;}
	return $ff;
	}

$array = array(Array( "id" => "$fbid" ,"name" => "$name12" ));
foreach($user_profile_a as $key =>$f){
foreach((array)$f['data'] as $key =>$pp) {
if($pp['id'] != "NULL"){
$c1 = checkold($pp,$array); 
if($c1 != NULL){ 
$fff = $c1;
$array[] = $fff;
if(count($array) > 30) break;
}
}
}
}
$name = array();
$numbersarray = range(1, count($array));
shuffle($numbersarray);
$forrrr = 0;
for($e=0;$e < count($array) ;$e++){
if($forrrr == 4) break;
$rand = $numbersarray[$e];
if($array[$rand]['id'] != ""){
if($array[$rand]['id'] != $fbid){
$fna= explode(" ",$array[$rand]['name']);
$name[] = $fna[0];
$img[] = "https://graph.facebook.com/".$array[$rand]['id']."/picture?width=480&height=480";
}}else{ $forrrr--; }
}

?>