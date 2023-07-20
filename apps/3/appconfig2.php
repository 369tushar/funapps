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

$random_bg = rand(1,5);
$destt = imagecreatefrompng('mygb/'.$random_bg.'.png');
$dest = imagecreatetruecolor(800, 420);

$white= ImageColorAllocate($dest, 255, 255, 255);


$black = ImageColorAllocate($dest, 73, 73, 73);
               




$size = getimagesize($usernopic);
$src = imagecreatefromjpeg($usernopic);

$dst = imagecreatetruecolor(90, 90);
    
imagecopyresampled($dst, $src, 0, 0, 0, 0, 90, 90, $size[0], $size[1]);


imagecopymerge($dest, $dst, 356, 294, 0, 0, 90, 90, 100);




imageCopy($dest,$destt, 0, 0, 0, 0, 800, 420);

$rx1 = centercode(798, 20, 0, $font_path, $name12);
Imagettftext($dest, 20, 0, $rx1, 145, $black, $font_path, $name12);





imagejpeg($dest, "img/".$fbid.".jpg", $imgresolution);


imagedestroy($dest);


?>