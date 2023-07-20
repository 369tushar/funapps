<?php
ob_start();
session_start();
include("appconfig.php");
include("../ads/config.php");
if(isset($_REQUEST['fbid'])){$fbid = $_REQUEST['fbid'];}
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
    <meta property="og:url" content="<?php echo $domain; ?>/<?php echo $foldername;?>/app.php<?php if($_REQUEST['fbid']){ $fbid = $_REQUEST['fbid'];?>?fbid=<?php echo $fbid; } ?>"/>
    <meta property="og:description" content="<?php echo $descri;?>"/>
    <meta property="og:site_name" content="<?php echo $author;?>"/>
    <meta property="og:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid; ?>.jpg"/>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="twitter:title" content="<?php echo $titleline;?>"/>
    <meta name="twitter:card" content="photo"/>
    <meta name="twitter:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo $fbid; ?>.jpg"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="420"/>
    <meta property="og:type" content="website"/>
 <?php include("../ads/indexheaderinclude.php"); ?>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR74TPD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php include("../ads/fb_root.php"); ?>

   <script>
   var fbid='<?php echo $fbid; ?>';var domain='<?php echo $domain ?>';var fldname='<?php echo $foldername;?>';   </script>
       <script src="<?php echo $domain ?>/js/tussehear.js"></script>

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
                          
                            <?php include '../ads/d/1.php'; ?>
                          
                </div>
            <!--APPS GRIDS-->
            <div class="row">
                <div class="col-lg-8">
                    <!--App Play Area-->
                    <div class="jumbotron">
                        <div class="row">

                            <div class="col-lg-12  show-or-hide-on-app_permission">
                                
                                <h2 class="app_h2_title"><?php echo $titleline;?></h2>
                            </div>

<div class="tush-custom-xs-12 upper-share-buttons">
 <center>


<h3 style="font-size: 20px;line-height: 35px;font-weight: 400;margin: 0 0 0px 0;color: #000000;" id="before_share">

Hi <?php echo $_SESSION['user_name']; ?>, Your result is almost ready. Please click on "Save & Share" button to see your result. <br>
</h3>


<h3 style="display:none;font-size: 20px;line-height: 35px;font-weight: 400;margin: 0 0 0px 0;color: #000000;" id="share_error">

Hi <?php echo $_SESSION['user_name']; ?>, We cannot generate your result unless you share it on facebook. Please click on "Save & Share" button to share your result on facebook <br>
</h3>


<?php
 include('../ads/ds/1.php');
?>

<center><img src="http://i.imgur.com/1VHrWbm.gif" style="width:125px;"></center>

  <a class="btn btn-fb-share" target="_blank" onclick="tussehear();">
                   <i class="fa fa-facebook-square" aria-hidden="true"></i><span>Share on Facebook</span>
               </a>

							 </center>

<br>
<?php
 include('../ads/ds/2.php');
?>

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



<script src="<?php echo $domain; ?>/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
