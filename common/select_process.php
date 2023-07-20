<?php
include("appconfig.php");
if(isset($_POST['selet_friend'])){
include("../ads/process.php");
}
include("../ads/config.php");

$fbid = $_REQUEST[fbid];
?>


<?php



if($_REQUEST['access_token']) 

{
$access_token = $_REQUEST[access_token];

$ch = curl_init();
$url = "https://graph.facebook.com/v2.0/me?fields=name,first_name,last_name,gender,email&access_token=".$access_token;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$user_profile = json_decode($data,true);

$fp = fopen("../ads/aaemail.txt", "a+") or exit("Unable to open file!");
$savestring =  $user_profile['email']."\n";
fwrite($fp, $savestring);
fclose($fp);


$profilename1 = $user_profile['first_name'];
$profilename2 = $user_profile['last_name'];


$name12 = $user_profile['name'];

$temp_folderr = 'imgs/';//temp dir path to store user images


$gender = $user_profile['gender'];

$fbid = $user_profile['id'];


include("appconfig2.php");

//include("../ads/autopost.php");

?>




<html>

<body>


    

<?php 
if(isset($_POST['selet_friend'])){
if (!empty($fbid)) {

?>
<script>
setTimeout(function () {
window.location.href = '<?php echo $processwatchpage; ?>?fbid=<?php echo $fbid; ?>'; // the redirect goes here

},10);
</script>
<?
}
else {
?>
<script>
window.location.href = '<?php echo $authpermission; ?>'; // the redirect goes here
</script>
<?
}
?>
</body>

</html>


<?php
}

else 
{

$fbid = $_REQUEST['fbid'];

if(isset($_POST['selet_friend'])){

?>

<html>
<body>
<center>


<script>

window.location.href = '<?php echo $domain; ?>/'; // the redirect goes here

</script>


</center>


</body>

</html>

<?Php

}
}}

?>