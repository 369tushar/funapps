
<div class="quizzz">
<a style="cursor:pointer;" href="<?php echo $authpermission;?>" class="fb_quiz_click">
    <?php 
if(isset($_REQUEST[fbid])){
$dir = "img/$fbid.jpg";
 if (file_exists($dir)){ ?>

 <img src="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid;?>.jpg" width="50%" height="50%" max-width="800px" max-height="420px" >
<?php }else{ ?>

<img src="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg" width="50%" height="50%" max-width="800px" max-height="420px" >

<?php } }else{ ?>

<img src="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg" width="50%" height="50%" max-width="800px" max-height="420px" >

<?php } ?>
</a>
 

<div class="controls">
<a href="<?php echo $authpermission;?>" rel="nofollow" class="btnnn-fb btn-start-loading btn-show-loading">Start</a>
<p style="font-size:13px;"><span>You will be asked to login with Facebookk</span></p>

</div>

</div>