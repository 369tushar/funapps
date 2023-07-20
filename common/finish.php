<?php

include("appconfig.php");
include("../ads/config.php");

if(isset($_REQUEST["fbid"])){
    $fbid = $_REQUEST["fbid"];
}else if(isset($_COOKIE["usfbidp"])){
    $fbid = $_REQUEST["fbid"];
}

$share_url = ''.$domain.'/'.$foldername.'/app.php?fbid='.$fbid.'';

function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

?>

<!DOCTYPE html>
<html lang="en" data-lang="en"  >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title><?php echo $titleline;?></title>
    <meta name="description" content="<?php echo $descri;?>" />
    <meta property="og:site_name" content="<?php echo $auther; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo $domain;?>/<?php echo $foldername;?>" />
    <meta property="og:title" content="<?php echo $titleline;?>" />
    <meta property="og:description" content="<?php echo $descri;?>" />
    <meta property="og:image:type" content="image/jpeg" />    
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="420" />
    <meta property="og:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo base64_decode($fbid); ?>.jpg" />
    <link rel="canonical" href="<?php echo $domain;?>/<?php echo $foldername;?>" />
    <meta itemprop="name" content="<?php echo $titleline;?>" />
    <meta itemprop="description" content="<?php echo $descri;?>" />
    <meta itemprop="image" content="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo base64_decode($fbid); ?>.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $titleline;?>" />
    <meta name="twitter:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/img/<?php echo base64_decode($fbid); ?>.jpg" />
    <meta name="twitter:description" content="<?php echo $descri;?>" />
    <meta name="locale" content="en" />

<link rel="shortcut icon" href="<?php echo $domain;?>/images/site_og_image.jpg" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $domain;?>/images/site_og_image.jpg" />
<link rel="icon" type="image/png" href="<?php echo $domain;?>/images/site_og_image.jpg" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo $domain;?>/images/site_og_image.jpg" sizes="16x16" />



                <link rel="preload" as="style" href="<?php echo $domain; ?>/css/font-awsome/css/face.min.css" />
    <link rel="preload" as="style" href="<?php echo $domain; ?>/css/font-awsome/css/fontawesome.min.css" />

<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Heebo:800|PT+Serif:400,700&display=swap" />

            <link rel="preload" href="<?php echo $domain; ?>/css/app.css" as="style" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                    <link rel="preload" href="<?php echo $domain;?>/images/logo.png" as="image" />
                




    
    <script>
  function deferStyles(asyncStyleSheets){
    window.addEventListener('DOMContentLoaded', function () {
      setTimeout(function () {
        for (var i = 0; i < asyncStyleSheets.length; i++) {
          var link = document.createElement('link');
          link.setAttribute('rel', 'stylesheet');
          link.setAttribute('href', asyncStyleSheets[i]);
          document.head.appendChild(link);
        }
      }, 1);
    }, false);
  }
</script>

<script>
  var asyncStyleSheets = [
    '<?php echo $domain; ?>/css/font-awsome/css/face.min.css',
    '<?php echo $domain; ?>/css/font-awsome/css/fontawesome.min.css'
  ];

  asyncStyleSheets.push('https://fonts.googleapis.com/css?family=Heebo:800|PT+Serif:400,700&display=swap');

  deferStyles(asyncStyleSheets);
</script>
        <link href="<?php echo $domain; ?>/css/app.css" rel="stylesheet" />


<?php include'../ads/fb_root.php';?>



<script>

        function createCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        function eraseCookie(name) {
            createCookie(name,"",-1);
        }
        
        
        function logout() {
            eraseCookie('usimgp');
            eraseCookie('usfbidp');
            eraseCookie('usedmp');
            eraseCookie('usgenp');
            window.location.href="";
        }

        $(function () {
			
            $(".posts-list").removeClass("d-none").fadeOut(0).fadeIn(300);
            
        });
		</script>  

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
  fbq('init', '380982369239313');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=380982369239313&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Ads: 771275918 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-771275918"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-771275918');
</script>
<!-- Event snippet for Page view_Vivek conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-771275918/1VzsCMq4pMsBEI754u8C'});
</script>


</head>

<body class="body" onload="document.body.className += ' body-loaded'; ">


    
<nav class="navbar navbar-light bg-primary">
    <div class="container">
        <div class="row no-gutters">
                        <div class="col-auto"><a class="navbar-brand text-white" href="<?php echo $domain; ?>"><img src="<?php echo $domain;?>/images/logo.png" alt="<?php echo $auther; ?>"></a></div>
            
        </div>

        
    </div>
</nav>


<main class="bg-blue-soft py-3">
    <div class="container">
        
        <?php include_once'../ads/d/1.php';?>

        <div class="row">
            <div class="col-xl-18 col-lg-22 col-24 m-auto">
            
                <div class="main-container bg-white mb-4 mb-xl-0">

                    <div class="game-container">


                        
                        

						
											

                    <div class="game-finish-container py-4 px-3">
                        <div class="text-center">

                            <div class="finish-like-container">
                                <div class="text-center">
                                    <div class="block"><div class="block-head red-text"><div class="block-title no-bg">We like you. Like us back</div></div></div>
                                    <div><i class="fa fa-arrow-down"></i></div>
                                    <div class="tiny-spacer"></div>
                                                                            <div class="like"><iframe class="facebook-like-button" src="<?php echo $fb_like; ?>" width="210" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
                                                                    </div>

                                                            </div>

                            <div class="redirect-to-result pt-3">
                                <div class="text-center"><a href="<?php echo $domain; ?>/<?php echo $foldername; ?>/result.php?fbid=<?php echo $fbid; ?>" class="btn btn-light auto-width border redirect-to-result-btn" data-gtm-event="finish_back">&lt; Go back to your results</a></div>
                            </div>

                            <div class="redirect-to-more pt-4">
                                <div class="text-center">
                                    <a href="<?php echo $domain; ?>/<?php echo $foldername; ?>"><button class="static share-btn facebook-share-btn" data-gtm-event="finish_again"><span class="icon pr-2"><i class="fas fa-redo"></i></span><span class="label">Again</span></button></a>
                                    &nbsp;
                                    <a href="<?php echo $domain; ?>" class="next-game-a"><button class="static next-game-btn" data-gtm-event="finish_more"><span class="icon pr-2"><i class="fas fa-chevron-right"></i></span><span class="label">More Games</span></button></a>
                                </div>
                            </div>

                        </div>
                    </div>




                    </div>

                </div>

<?php
if(isMobileDevice()){
    ?>
                <div class="row no-gutters d-block d-md-none">
                    <div class="col m-auto text-center">
                        <div class="ya-slot ya-slot-lazy d-none show-game-start" id="ya-slot-game_mob_main">
                            <?php include_once'../ads/d/2.php';?>
                        </div>
                        <div class="ya-slot ya-slot-lazy d-none show-game-result" id="ya-slot-game_result_mob_main"></div>
                    </div>
                </div>
<?php } ?>

                <div class="game-info-bullets-container">
                    <!-- desktop bullets -->
                    <div class="d-none d-xl-none d-md-block">
                        <div class="row game-info-bullets pt-3">
                            <div class="col-md-8 col-24 game-info-bullet">
                                <div class="gib-header row no-gutters align-items-center">
                                    <div class="gib-icon col-auto"><i class="fas fa-shield-alt fa-2x"></i></div>
                                    <div class="gib-title col pl-2">Your info is in your control</div>
                                </div>
                                <div class="gib-text pt-2">We value your privacy, so we&#039;ll never share your personal information. Read our <a href="<?php echo $domain;?>/privacy.php" target="_blank">Privacy Policy</a> for more info.</div>
                            </div>

                            <div class="col-md-8 col-24 game-info-bullet">
                                <div class="gib-header row no-gutters align-items-center">
                                    <div class="gib-icon col-auto"><i class="fas fa-user fa-2x"></i></div>
                                    <div class="gib-title col pl-2">You’re at the center</div>
                                </div>
                                <div class="gib-text pt-2">Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try.</div>
                            </div>

                            <div class="col-md-8 col-24 game-info-bullet">
                                <div class="gib-header row no-gutters align-items-center">
                                    <div class="gib-icon col-auto"><i class="fas fa-medal fa-2x"></i></div>
                                    <div class="gib-title col pl-2">Best. Content. Ever.</div>
                                </div>
                                <div class="gib-text pt-2">We go for quality, that&#039;s what makes our content so fresh and super engaging. Stop by often - we&#039;ve got something new every day!</div>
                            </div>
                        </div>
                    </div>
                    <!-- /desktop bullets -->

                    <!-- mobile bullets -->
                    <div class="d-block d-md-none">
                        <div class="game-info-bullets pt-3">

                            <div class="row">
                                <div class="col-auto"><div class="gib-icon"><i class="fas fa-shield-alt fa-2x"></i></div></div>
                                <div class="col">
                                    <div class="gib-title">Your info is in your control</div>
                                    <div class="gib-text pt-1">We value your privacy, so we&#039;ll never share your personal information. Read our <a href="<?php echo $domain;?>/privacy.php" target="_blank">Privacy Policy</a> for more info.</div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-auto"><div class="gib-icon"><i class="fas fa-user fa-2x"></i></div></div>
                                <div class="col">
                                    <div class="gib-title">You’re at the center</div>
                                    <div class="gib-text pt-1">Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try.</div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-auto"><div class="gib-icon"><i class="fas fa-medal fa-2x"></i></div></div>
                                <div class="col">
                                    <div class="gib-title">Best. Content. Ever.</div>
                                    <div class="gib-text pt-1">We go for quality, that&#039;s what makes our content so fresh and super engaging. Stop by often - we&#039;ve got something new every day!</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /mobile bullets -->
                </div>
            </div>

            <div class="col-6 d-none d-xl-flex align-items-center">
                <?php
                    if(!isMobileDevice()){
                ?>
                <div class="ya-slot ya-slot-lazy d-none show-game-start" id="ya-slot-game_desk_sidebar">
                    <div id="div-gpt-ad-game_desk_sidebar">
                        <?php include_once'../ads/d/2.php';?>
                    </div>
                </div>
                <?php } ?>
                <div class="ya-slot ya-slot-lazy d-none show-game-result" id="ya-slot-game_result_desk_sidebar"></div>

                <div class="game-info-bullets-container hide-game-start d-none">
                    <!-- desktop bullets -->
                    <div>
                        <div class="row game-info-bullets" style="font-size: 95%;">
                            <div class="col-24 game-info-bullet pb-3">
                                <div class="gib-header row no-gutters align-items-center">
                                    <div class="gib-icon col-auto"><i class="fas fa-shield-alt fa-2x"></i></div>
                                    <div class="gib-title col pl-2">Your info is in your control</div>
                                </div>
                                <div class="gib-text pt-2">We value your privacy, so we'll never share your personal information. Read our <a href="<?php echo $domain; ?>/privacy.php" target="_blank">Privacy Policy</a> for more info.</div>
                            </div>

                            <div class="col-24 game-info-bullet pb-3">
                                <div class="gib-header row no-gutters align-items-center">
                                    <div class="gib-icon col-auto"><i class="fas fa-user fa-2x"></i></div>
                                    <div class="gib-title col pl-2">You’re at the center</div>
                                </div>
                                <div class="gib-text pt-2">Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try.</div>
                            </div>

                            <div class="col-24 game-info-bullet">
                                <div class="gib-header row no-gutters align-items-center">
                                    <div class="gib-icon col-auto"><i class="fas fa-medal fa-2x"></i></div>
                                    <div class="gib-title col pl-2">Best. Content. Ever.</div>
                                </div>
                                <div class="gib-text pt-2">We go for quality, that's what makes our content so fresh and super engaging. Stop by often - we've got something new every day!</div>
                            </div>
                        </div>
                    </div>
                    <!-- /desktop bullets -->
                </div>
            </div>
        </div>

<div class="row d-none d-md-flex pt-3 align-items-center">
    <div class="col m-auto text-center">
        <div class="ya-slot ya-slot-lazy show-game-start ya-slot-registered" style="display: inline-block;vertical-align: top;" id="ya-slot-game_desk_bottom" data-un="div-gpt-ad-game_desk_bottom">
			<div id="div-gpt-ad-game_desk_bottom">
			<?php include_once'../ads/d/3.php';?>
			</div>
		</div>
                <div class="ya-slot ya-slot-lazy d-none show-game-result ya-slot-registered" style="display: inline-block;vertical-align: top;" id="ya-slot-game_result_desk_bottom"></div>
            </div>
</div>
    </div>
</main>


<section class="posts-list py-3 d-none">
    <div class="container">
        <div class="row">
            <div class="col text-center pb-3"><h4 class="text-center">Other games you'll ❤️</h4></div>
        </div>

        <div class="row posts-list-container">
<?php include_once'../ads/more2.php';?>

</div>
    </div>
</section>










<footer class="page-footer">
    <div class="container py-3">
        <div class="row">
            <div class="col text-center">
                <a href="<?php echo $domain; ?>/contact.php">Contact</a> | <a href="<?php echo $domain; ?>/privacy_en.php">Privacy Policy</a> | <a href="<?php echo $domain; ?>/terms_en.php">Terms of Use</a> | <a href="javascript:logout()" class="forget-me">Logout</a>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col text-center">Disclaimer: All content is provided for fun and entertainment purposes only.</div>
        </div>
    </div>
</footer>

<div id="wrapfabtest">
    <div class="adBanner">
    </div>
</div>




<!-- start webpushr code --> <script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('init','BOQVmb52EBJE6WsUHX2HBJzitPBSfsfLSJjqcnaTxkuBUtT_TsN0iDGjYqXyOhzbZHM_04hx_eHphKpG635zgPU');</script><!-- end webpushr code -->

    

        </body>
</html>