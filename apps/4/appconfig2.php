<?php 


 
 
function write_multiline_text($dest, $angle, $font_size, $color, $font, $text, $start_x, $start_y, $max_width) { 
    //split the string 
    //build new string word for word 
    //check everytime you add a word if string still fits 
    //otherwise, remove last word, post current string and start fresh on a new line 
    $words = explode(" ", $text); 
    $string = ""; 
    $tmp_string = ""; 

$start = microtime(true);
$limit = 30;  // Seconds
    for($i = 0; $i < count($words); $i++) { 
  if (microtime(true) - $start >= $limit) {
    break; }
        $tmp_string .= $words[$i]." "; 

        //check size of string 
        $dim = imagettfbbox($font_size, 0, $font, $tmp_string); 

        if($dim[4] < ($max_width - $start_x)) { 
            $string = $tmp_string; 
            $curr_width = $dim[4];
        } else { 
            $i--; 
            $tmp_string = ""; 
            $start_xx = $start_x + round(($max_width - $curr_width - $start_x) / 2);        
            imagettftext($dest, $font_size, $angle, $start_xx, $start_y, $color, $font, $string); 

            $string = ""; 
            $start_y += abs($dim[5]) * 1.3; 
            $curr_width = 0;
        } 
    } 

    $start_xx = $start_x + round(($max_width - $dim[4] - $start_x) / 2);        
    imagettftext($dest, $font_size, $angle, $start_xx, $start_y, $color, $font, $string);
}

function RandomLine($filename) { 
$lines = file($filename) ; 
return $lines[array_rand($lines)] ; 
}

function centercode($fontx,$fontsize,$angle,$font,$text) { 
//center code				
$image_width2 = $fontx; 
$text_box2 = imagettfbbox($fontsize,$angle,$font,$text);
$text_width2 = $text_box2[2]-$text_box2[0];
$text_height2 = $text_box2[3]-$text_box2[1];

$x2 = ($image_width2/2) - ($text_width2/2);
return $x2 ;
//center code
}


     $ch = curl_init();
       $url = "https://graph.facebook.com/v2.0/me/invitable_friends?fields=name,picture.width(480).height(480)&limit=15&access_token=".$access_token;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        
        $rr = curl_exec($ch);
        $friends = json_decode($rr,true);
		
shuffle($friends["data"]);      
foreach($friends['data'] as $value) {
 $name[]  = $value["name"];
 $img[]  = $value["picture"]["data"]["url"];
  
  }


$font_path ="fonts/font.ttf";



$destt = imagecreatefrompng('mygb/1.png');
$dest = imagecreatetruecolor(800, 420);

$white = ImageColorAllocate($dest, 255, 255, 255);

$black = ImageColorAllocate($dest, 0, 0, 0);





 
if(empty($img[0])){
$img[0] = "../images/nofan.jpg";
}  
if(empty($name[0])){
$name[0] = "Tom";
}  

$frisize = getimagesize($img[0]);
$frisrc = imagecreatefromjpeg($img[0]);
$fridst = imagecreatetruecolor(30, 30);

imagecopyresampled($fridst, $frisrc, 0, 0, 0, 0, 30, 30, $frisize[0], $frisize[1]);

imagecopymerge($dest, $fridst, 438, 155, 0, 0, 30, 30, 100);

$frisize = getimagesize($img[0]);
$frisrc = imagecreatefromjpeg($img[0]);
$fridst = imagecreatetruecolor(30, 30);

imagecopyresampled($fridst, $frisrc, 0, 0, 0, 0, 30, 30, $frisize[0], $frisize[1]);

imagecopymerge($dest, $fridst, 27, 304, 0, 0, 30, 30, 100);

$frisize = getimagesize($img[1]);
$frisrc = imagecreatefromjpeg($img[1]);
$fridst = imagecreatetruecolor(30, 30);

imagecopyresampled($fridst, $frisrc, 0, 0, 0, 0, 30, 30, $frisize[0], $frisize[1]);

imagecopymerge($dest, $fridst, 27, 346, 0, 0, 30, 30, 100);



imageCopy($dest,$destt, 0, 0, 0, 0, 800, 420);

  
$a = array("IS IT JUST ME, OR IS"." ".strtoupper($profilename1)." "."HILARIOUS",
strtoupper($profilename1)." "."LOOKS REALLY GOOD RECENTLY",
"I WANT TO BE".strtoupper($profilename1)." "."FOR ONE DAY");

$b = array("I AGREE! HE IS INSANELY FUNNY",
"I NOTICED",
"A DAY? I'D LIKE TO BE"." ".strtoupper($profilename1)." "."FOR A LIFETIME!");

$c = array("IS IT JUST ME, OR IS"." ".strtoupper($profilename1)." "."HILARIOUS",
"THE WORD IS THAT"." ".strtoupper($profilename1)." "."IS ABOUT TO MAKE MILLIONS!",
$profilename1." "."IS THE BEST");

$d = array("I AGREE! HE IS INSANELY FUNNY",
"WELL, WE ALWAYS KNEW SHE WAS TALENTED",
"I WISH ALL PEOPLE WERE LIKE HER");

$random1 = rand(0,2);

if($gender == "male")
{
write_multiline_text($dest, 0, 12, $white, $font_path, $a["$random1"], 520, 245, 724);
write_multiline_text($dest, 0, 12, $black, $font_path, $b["$random1"], 425, 347, 629);
}
else if($gender == "female")
{
write_multiline_text($dest, 0, 12, $white, $font_path, $c["$random1"], 520, 245, 724);
write_multiline_text($dest, 0, 12, $black, $font_path, $d["$random1"], 425, 347, 629);
}
Imagettftext($dest, 14, 0, 497, 176, $black, $font_path,$name[0]);
Imagettftext($dest, 14, 0, 72, 328, $black, $font_path,$name[0]);
Imagettftext($dest, 14, 0, 72, 368, $black, $font_path,$name[1]);


imagejpeg($dest, "img/".$fbid.".jpg", $imgresolution);


imagedestroy($dest);



?>