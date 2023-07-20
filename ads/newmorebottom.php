<div class="row m-q-p a-c-p display-on-md display-on-lg tus randgame" style="padding:10px;display:block;"><?php

function shuffle_assoc($list) { 
  if (!is_array($list)) return $list; 

  $keys = array_keys($list); 
  shuffle($keys); 
  $random = array(); 
  foreach ($keys as $key) { 
    $random[$key] = $list[$key]; 
  }
  return $random; 
} 

include'../../ads/appsarray.php';

 $units = shuffle_assoc($units);

 $num = 1;

foreach($units as $key=>$value){
 ?>
<div class="tush-custom-xs-12 tush-custom-sm-4 more-quizzes padding-spa-15 a-ac"><a href="<?php echo $domain;?>/apps/<?php echo $value[0];?>"><div class="cross-item a-ac" style="min-height:200px;"><div class="more-quizzes-cropped"><div class="item-img" style="background: url(<?php echo $domain;?>/apps/<?php echo $value[0];?>/<?php echo $value[0];?>.jpg) center center;background-size:cover;"></div></div><span><?php echo $value[1];?></span> </div></a></div>	

        <?php 
		if($num == 24){ break; }
		$num++;	} ?>
</div>