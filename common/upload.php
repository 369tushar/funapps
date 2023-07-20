<?php


$file_name = "";
	if(isset($_FILES['file']['name'])){ $file_name = $_FILES['file']['name']; }
   if($file_name != "")
	{
   $tmp_name = $_FILES['file']['tmp_name'];
   $size = getimagesize($tmp_name);
   $ratio = $size[0]/$size[1];
   $width = $size[0];
   $height = $size[1];
	if ($width > 500)
	{
		$width = 500;
		$height = $height * 500 / $size[0];
	}
   $ext = pathinfo($file_name, PATHINFO_EXTENSION);
   $file_name = uniqid();
   $path= "../userpics/".$file_name.".jpg";

	if (move_uploaded_file($tmp_name, $path))
	{
   require_once 'SimpleImage.php';
    $image = new SimpleImage();
    $image->load($path);
    $image->resize($width,$height);
    $image->save($path);		
    
    $arr = array("fbid"=>"$file_name","file"=>"$path");
    echo json_encode($arr);
	}
	
		
	}



?>