<?php 

 
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


    

$font_path ="fonts/font.ttf";

$random_bg = rand(1,4);
$destt = imagecreatefrompng('mygb/'.$random_bg.'.png');
$dest = imagecreatetruecolor(800, 420);

$white= ImageColorAllocate($dest, 255, 255, 255);


$black = ImageColorAllocate($dest, 0, 0, 0);
               




$size = getimagesize($usernopic);
$src = imagecreatefromjpeg($usernopic);

$dst = imagecreatetruecolor(346, 346);
    
imagecopyresampled($dst, $src, 0, 0, 0, 0, 346, 346, $size[0], $size[1]);


imagecopymerge($dest, $dst, 489, 74, 0, 0, 346, 346, 100);


imageCopy($dest,$destt, 0, 0, 0, 0, 800, 420);


imagejpeg($dest, "img/".$fbid.".jpg", $imgresolution);


imagedestroy($dest);
imagedestroy($src);


?>