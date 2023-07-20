<?php
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


include_once('appsarray.php');


 $num = 1;
 $units = shuffle_assoc($units);
foreach($units as $key=>$value){
 ?>

<?php 
if($num == 2){
// include '../../ads/d/4.php'; 
}
?>

<article class="col-24 col-md-12 col-lg-8 recommendation">
    <a class="card " href="<?php echo $domain;?>/apps/<?php echo $value[0];?>" >
        <span class="post-image">
            <span class="post-image-img lazy" style="background-image: url(&quot;<?php echo $domain;?>/apps/<?php echo $value[0];?>/<?php echo $value[0];?>.jpg&quot;);"></span>
        </span>
        <span class="post-title">
            <button class="post-category badge cta solid shadow" data-theme="pink">Play Now</button>
            <?php echo $value[1];?>
        </span>
    </a>
</article>

<div class="col-24 d-md-none text-center" style="padding-bottom: 2em;"><div class="ya-slot ya-slot-lazy ya-slot-registered" style="display: inline-block" id="ya-slot-result_mob_lazy_1"></div></div>


<?php 
		if($num == 30){ break; }
		$num++;	} ?>