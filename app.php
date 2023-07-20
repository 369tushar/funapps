<?php

if(isset($_GET['fbid'])){
$fbid = base64_decode($_GET['fbid']);
}

$doamin = "https://app.newsspad.com";
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$portions = explode("/",$actual_link);


include("appconfig.php");
include("../../ads/config.php");
?>

<!DOCTYPE html>
<html lang="<?php echo $html_lang; ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href=<?php echo $domain;?>/images/favicon.png>
<link rel="icon" type="image/png" sizes="32x32" href=<?php echo $domain;?>/images/favicon.png>
<link rel="icon" type="image/png" sizes="16x16" href=<?php echo $domain;?>/images/favicon.png>
<link rel="shortcut icon" href=<?php echo $domain;?>/images/favicon.png>
<meta name="theme-color" content="#ffffff">
<title><?php echo $titleline;?></title>
<meta property="og:title" content="<?php echo $titleline;?>">
<meta property="og:site_name" content="<?php echo $author;?>">
<meta property="og:description" content="<?php echo $descri;?>">
<meta name="description" content="<?php echo $descri;?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $domain;?>/apps/<?php echo $foldername;?>/img/<?php echo $fbid; ?>.jpg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="420">
<meta property="og:image:type" content="image/jpeg">
<meta http-equiv="refresh" content="0; url='<?php echo $domain;?>/apps/<?php echo $foldername;?>/?app'" />
</head>

</html>
