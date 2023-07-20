



<?php
include_once('appsarray.php');


$num = 1;
$preserved = array_reverse($units, true);
$chunk = array_chunk($preserved, 18, true);

if(!empty($_GET['lastPost'])) {
$last_post_id = $_GET['lastPost'];
//remove pageination- from last_post_id
$remove_string = explode("-",$last_post_id);

$chunkey = $remove_string[1]+1; 
}
if($chunk[$chunkey] != ''){
foreach($chunk[$chunkey] as $key=>$value){

?>

<i class="tuspage" id="pagination-<?php echo $chunkey;?>"></i>
<div class="views-row views-row-<?php echo $num; ?> <?php if  ($num % 2 == 0) {?>views-row-even<?php }else{ ?>views-row-odd<?php } ?> clearfix">
<a href="/apps/<?php echo $value[0];?>">
<img src="/apps/<?php echo $value[0];?>/<?php echo $value[0];?>.jpg" width="370" height="250" alt="">
<div class="app-play-now">पता लगाएं!</div>
<div class="view-app-title" style="height: 90px;"><?php echo $value[1];?></div>
</a> </div>

        <?php 
		if($num == 9){ $num = 0; }
		$num++; } }?>


