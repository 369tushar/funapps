<?php

include("appconfig.php");
include("../ads/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<title><?php echo $titleline;?></title>





    <meta name="description" content="<?php echo $descri;?>"/>
    <meta property="og:title" content="<?php echo $titleline;?>"/>
    <meta property="og:description" content="<?php echo $descri;?>"/>
    <meta property="og:site_name" content="<?php echo $author;?>"/>
    <meta property="og:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg"/>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="twitter:title" content="<?php echo $titleline;?>"/>
    <meta name="twitter:card" content="photo"/>
    <meta name="twitter:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="420"/>
    <meta property="og:type" content="website"/>
 <?php include("../ads/indexheaderinclude.php"); ?>
</head>

<body>



<?php include("../ads/fb_root.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script> $(document).ready(function() { 
if(window.location.hash) { 
var Hash=window.location.hash.split('#')[1]; 
		
			var str="access_token="+Hash;
			jQuery.ajax({
				type: "GET",
				url: "process.php",
				data: str,
				cache: false,
				success: function(res){
                                          var ress = res;
if(ress=='' || ress == 'undefined'){ window.location ="<?php echo $authpermission?>"; } else{
                                          setTimeout(function () {
                                          window.location.href = '<?php echo $processwatchpage; ?>?fbid='+ress; // the redirect goes here		
                                        	},5000);
}
				} 
			});
	 } else { window.location ="<?php echo $authpermission?>"; } 		
});
 </script>

<!--main-wrapper box-->
<div class="main-wrapper">
<div id="headbg"></div>
    <!--main-header box-->
    <header class="main-header">
    
        <!--Logo Bar-->
        <div class="header-box main-fixed-width">    
            <div class="row">
                <div class="col-xs-6">
                    <div class="header-logo-box">
                        <a href="<?php echo $domain; ?>">
                            <img src="<?php echo $domain;?>/images/logo.png" alt="<?php echo $domain;?>" title="<?php echo $domain;?>" />
                        </a>
                    </div>
                </div>
                <div class="col-xs-6">

                </div>
            </div>
        </div>
        <!--Logo Bar-->
        
    </header>
    <!--main-header box End-->
<!--CONTENT MAIN-->
    <div class="content-main main-fixed-width">
        <!--CONTENT-->
        <div class="content-home">
            
            <!--TOP AD-->
  
            <!--TOP AD-->
            <div class="top-ad-box google-ad">
                             <div class="col-lg-12 app-jumbotron-bottom-ad-box text-center google-ad">
                            <?php include '../ads/d/1.php'; ?>
                            </div>
                </div>
            <!--APPS GRIDS-->
            <div class="row">
                <div class="col-lg-8">
                    <!--App Play Area-->
                    <div class="jumbotron">
                        <div class="row">
                                  
                            
                            <div class="col-lg-12 show-or-hide-on-app_permission_reverse hide">
                                <div class="app_landing_page_waiting_state">
                                <i class="fa fa-spinner fa-pulse"></i> Please Wait...
                                </div>
                            </div>

                            <div class="col-lg-12  show-or-hide-on-app_permission">
                                
                                <h2 class="app_h2_title"><?php echo $titleline;?></h2>
                            </div>
                            
                            <div class="col-lg-12 app_landing_img show-or-hide-on-app_permission">
                                <img id="app_landing_image" class="img-responsive" style="width:128px" src="<?php echo $domain; ?>/images/loader.GIF" />
                            </div>
                            
                         <div class="col-lg-12 app-jumbotron-bottom-ad-box text-center google-ad">

                                <?php include '../ads/d/3.php'; ?>

                        </div> 
                            <div class="col-lg-12">
                                <!-- <div class="likediv" style="margin-left:48%; margin-top:10px; position:relative; height:21px;    text-align: -webkit-auto;">
                                    <span class="likearrow"></span>
                                    <iframe  src="https://www.facebook.com/plugins/like.php?locale=en_US&href=<?php echo $fb_like;?>&layout=button&action=like&size=small&show_faces=false&share=false&width=50&height=21" width="151" height="21" style="border:none;overflow:hidden; margin-left:10px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                </div> -->
              
                            </div>


                            
                            
   
                                
                            <div class="col-lg-12 show-or-hide-on-app_permission">
                                <div class="app_discription">
                                    <p class="red"></p>
                                    <!--app description-->
                                </div>
                            </div>
                            


                        </div>
                    </div>
                    <!--App Play Area-->
                    
                            <?php include '../ads/d/2.php'; ?>

<?php include_once'../ads/belowlakhan.php'; ?>
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 app-sidebar-ad-box google-ad">

						        <?php include '../ads/d/5.php'; ?>
                                

                        </div>
                        
                          <?php include("../ads/recent.php"); ?>
                                
                                

                        
                    </div>
                </div>
            </div>
            
                                
                    <div class="row">
                        <div class="col-lg-12 app-jumbotron-bottom-ad-box text-center google-ad">

                        <!--- Ads --->

                        </div>
                        <div class="col-lg-12">
                            <div class="row">
       
       <?php include("../ads/more2.php"); ?>
                                

                                
                            </div>
                        </div>
                    </div>
            <!--APPS GRIDS--> 
            
        </div>
        <!--CONTENT END-->
    </div>
    <!--CONTENT MAIN END-->


    <!--Footer-->
    <footer class="main-footer">
        <div class="footer-box  main-fixed-width">
            <div class="footer-content-box">
                <div class="footer-links-box">
                     <ul class="footer-links-list">
                        <li><a href="<?php echo $domain;?>/privacy_en.php">Privacy Policy</a></li>
                        <li><a href="<?php echo $domain; ?>/contact.php">Contact Us</a></li>
                     </ul>
                </div>

                <div class="footer-rights-box">All Rights Reserved by ©2017 - <?php echo $author; ?></div>
            </div>
        </div>
    </footer>
    <!--Footer End-->
    
</div>
<!--main-wrapper box-->

<!--JS area-->



</body>
</html>