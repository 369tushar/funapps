<?php
if(!isset($_POST['selet_friend'])){
     $ch = curl_init();
       $url = "https://graph.facebook.com/v2.0/me/invitable_friends?fields=first_name,last_name,picture.width(480).height(480)&limit=5000&access_token=".$access_token;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        
        $rr = curl_exec($ch);
        $friends = json_decode($rr,true);
		
shuffle($friends["data"]);      

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Find Out <?php echo $titleline;?></title>

 <?php include("../ads/indexheaderinclude.php"); ?>


<meta property="og:site_name" content="<?php echo $domain;?>"/>
<title><?php echo $titleline;?></title>
<meta name="description" content="<?php echo $descri;?>">
<meta name="author" content="<?php echo $author;?>">
<meta property="og:title" content="<?php echo $titleline;?>"/>
<meta property="og:description" content="<?php echo $descri;?>"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg"/>
<meta property="og:image:width" content="800"/>
<meta property="og:image:height" content="420"/>
<meta name="twitter:title" content="<?php echo $titleline;?>"/>
<meta name="twitter:card" content="photo">
<meta name="twitter:image" content=""> 

</head>

<body>


<?php include("../ads/fb_root.php"); ?>

<header id="header">
 <div class="container">
  <div class="col-lg-3 col-sm-3 col-xs-12 logo">
   <a href = "<?php echo $domain;?>"> <img src="../logo.png"></a>
  </div><!--col-lg-3-->
  <div class="col-lg-6 col-sm-6 col-xs-12 logo">
   
  </div>
  <div class="col-lg-3 col-sm-3 col-xs-12">
<br>
<style type="text/css">
@import url(//www.google.com/cse/api/branding.css);
</style>
<div class="cse-branding-bottom" >
  <div class="cse-branding-form">
    <form action="http://www.google.com" id="cse-search-box" target="_blank">
      <div>
        <input type="hidden" name="cx" value="partner-pub-7905943205529648:8017023815" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="text" name="q" size="23" />
        <input type="submit" name="sa" value="Search" />
      </div>
    </form>
  </div>
</div>


  </div><!--col-lg-3-->

 </div><!--container-->
</header>

<section id="main">
  <div class="container">
   <div class="row r-pad">  
   <div class="col-xs-12 col-sm-12 col-md-8">
     <div class="comment-box">
       <div class="app-details">

          <h2><?php echo $titleline;?></h2>

 <?php include("../ads/d/1.php"); ?> 
<br>
          
           <div class="widget">
          <div class="btn-o">
            <a class="btn facebook-button1" href="#_">
 
                 <?php //include("../ads/like.php"); ?>              

            </a>
         </div><!--btn-o-->
         
        </div><!--widget-->


<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("friends");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

<form action="" method="POST">
<div  class="quiz-padding">
<h3></h3>
<div class="form-group">
<input class="search form-control" id="myInput" onkeyup="myFunction()" placeholder="Search Friends"/>
</div>
<ul class="list list-unstyled row" id="friends" style="margin-left: -15px;">

<?php
foreach($friends['data'] as $value) {
 $name  = $value["first_name"];
 $img  = $value["picture"]["data"]["url"];
?>



<li class="col-sm-4">
<button class="name btn btn-default btn-block" name="selet_friend" value="<?php echo $name;?>|<?php echo $img;?>" type="submit">
<img src="<?php echo $img;?>" alt="" class="img-rounded">
<a style="color:black"><?php echo $name;?></a>
</button>
</li>


<?php
  
  }

?>

</ul>
</div>
</form>

     </div><!--app-details-->
      

     </div><!--comment-box-->
     <div class="clearfix"></div>
     <div class="ads1">
      
 <?php include("../ads/d/2.php"); ?> 

     </div>

   </div><!--col-xs-12 col-sm-6 col-md-6-->
   
   <div class="col-xs-12 col-sm-12 col-md-4">
   
      <?php include("../ads/recent.php"); ?> 
   
      <div class="ads2">
      

  <?php include("../ads/d/3.php"); ?> 



      </div>
   </div><!--col-xs-12 col-sm-3col-md-3-->
   
   
   <div class="clearfix"></div>
  
   <h3>Try More app like this</h3>
    <div class="boxarea">
       
       <?php include("../ads/more2.php"); ?>
     
     </div><!--boxarea-->
      </div><!--row-->
  </div><!--container-->
</section>

<div style="display:none;">
	<script id="_waucqe">var _wau = _wau || []; _wau.push(["classic", "c95d9b1gul", "pvo"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/classic.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
</div>

<?php include("../ads/footer.php"); ?>

  <script src="../js/main.js"></script>

<script type="text/javascript">	
$( document ).ready(function() {
<?php
$likepopup = 5000 * 1000;
echo "setTimeout(likepopup, ".$likepopup.");";
?>


    function likepopup() {
        $('#totalOverBlack').show();
    };
	});
</script>

<div id="totalOverBlack">
	<div id="fblikeus">
		<div class="fblikeus-title">
			<span class="fblikeus-fbinc"></span>
			<span class="fblikeus-close"></span>
		</div>
		<!-- <div class="fblikeus-body">
			Please Like Facebook Page to stay connected!<br/>
			<iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/amazingtechnoworld&amp;show_faces=false&amp; locale=en_US&amp; layout=button_count" scrolling="no" frameborder="0" style="height: 20px; width: 80px" allowTransparency="true"></iframe>
		</div> -->
	</div>
</div>



</body>
</html>
<?php } ?>
