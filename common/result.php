<?php

include("appconfig.php");
include("../ads/config.php");

if(isset($_REQUEST["fbid"])){
    $fbid = $_REQUEST["fbid"];
}else if(isset($_COOKIE["usfbidp"])){
    $fbid = $_REQUEST["fbid"];
}else{
    header("Location:$domain/$foldername");
    exit; 
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
            
            $('.facebook-share-btn').click(function () {
                
                        var shrl_url = "<?php echo $share_url;?>";
                                PostShare(shrl_url);
            });
            
            $('.whatsapp-share-btn').click(function () {
                
                        var shrl_url = "<?php echo $share_url;?>";
                                wa_postShare(shrl_url);
            });
            
            $('.close').click(function () {
                
                        $(".game-result-sticky-small").addClass("d-none").fadeOut(300).fadeIn(0);
            });
            
            setTimeout(function(){
                    $(".game-result-sticky-small").removeClass("d-none").fadeOut(0).fadeIn(300);
    	   }, 6000);
            
});
        
 
      

         window.fbAsyncInit = function () {
            FB.init({
                appId: '<?php echo $appId?>',
                cookie: true,
			    status: true,
			    xfbml: true,
                version: 'v3.2'
            });


        };




function rawurlencode(str) {
    str = (str+'').toString();        
    return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
                                                                                    replace(/\)/g, '%29').replace(/\*/g, '%2A');
}

function PostShare(mylink){
    //var mylink = rawurlencode(mylink);
    
      FB.ui({
              method: 'share',
              href: mylink,
              hashtag :'#<?php echo $author;?>',
            }, function(response){
                if (response && !response.error_message) {
                    setTimeout(function(){
                    window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);
                                 
                }else{
                    setTimeout(function(){
                    window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);

                }
            });
}

function wa_postShare(mylink){
    window.location.href = "whatsapp://send?text=<?php echo $titleline;?>\n\n " + mylink;
    setTimeout(function(){
                    window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);
}

function tryagain(){
    eraseCookie('usimgp');
    window.location.href="<?php echo $domain; ?>/<?php echo $foldername; ?>";
    
}


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


                        
                        

						
											

                        <!-- game-result -->
                        <div class="game-result">
    <div class="row">
        <div class="col-md-20 col-24 m-auto">

            <div class="row pt-3  d-md-block">
                <div class="col">
                    <div class="game-result-title text-primary"><?php echo $titleline;?></div>
                </div>
            </div>

            <div class="row d-md-block game-result-top-share">
                <div class="col text-center pb-3 pt-3">

                    <div class="share-buttons-top-regular">
                                <button class="share-btn facebook-share-btn share-btn-sm" data-share-btn data-share-btn-placement="top" title="Share on Facebook" >
                                <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                                <span class="label">Share</span>
                            </button>

                            <button class="share-btn share-btn-sm whatsapp-share-btn no-label d-md-none ml-2" data-share-btn data-share-btn-provider="whatsapp" data-share-btn-placement="top" title="Share on WhatsApp"><span class="icon"><i class="fab fa-whatsapp"></i></span></button>

                            
                                            </div>

                    <div class="share-buttons-dropdown-container share-buttons-top-dropdown d-none ">
    <div class="share-dropdown-btn"><i class="fas fa-share"></i>&nbsp;<span>Share</span></div>
    <div class="share-dropdown-holder">
        
        <div class="share-btn-dropdown-item"><button class="share-btn share-btn-dropdown facebook-share-btn" data-share-btn data-share-btn-placement="dropdown_top" title="Share on Facebook"><span class="icon mr-2"><i class="fab fa-facebook"></i></span> <span class="label">Facebook</span></button></div>

                    <div class="share-btn-dropdown-item d-md-none"><button class="share-btn share-btn-dropdown messenger-share-btn" data-share-btn data-share-btn-provider="messenger" data-share-btn-placement="dropdown_top" title="Share on Messenger"><span class="icon mr-2"><i class="fab fa-facebook-messenger"></i></span> <span class="label">Messenger</span></button></div>
            <div class="share-btn-dropdown-item d-md-none"><button class="share-btn share-btn-dropdown whatsapp-share-btn" data-share-btn data-share-btn-provider="whatsapp" data-share-btn-placement="dropdown_top" title="Share on WhatsApp"><span class="icon mr-2"><i class="fab fa-whatsapp"></i></span> <span class="label">WhatsApp</span></button></div>
            <div class="share-btn-dropdown-item d-md-none"><button class="share-btn share-btn-dropdown telegram-share-btn" data-share-btn data-share-btn-provider="telegram" data-share-btn-placement="dropdown_top" title="Share on Telegram"><span class="icon mr-2"><i class="fab fa-telegram"></i></span> <span class="label">Telegram</span></button></div>


            </div>
</div>                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="game-result-img" data-share-btn data-share-btn-placement="result_image" data-share-btn-no-callback data-lazy-parent >
                        <img class="lazy" src="<?php echo $domain; ?>/<?php echo $foldername; ?>/img/<?php echo base64_decode($fbid); ?>.jpg" alt="<?php echo $titleline;?>" />
                    </div>
                </div>
            </div>

            <div class="result-padding">
                <div class="result-el-ext-lnks">
                    
                                    </div>

                <div class="result-els-controller">
                    <div class="result-el-incontent pt-3 text-center">
                        <div class="ya-slot ya-slot-lazy" style="display: inline-block" id="ya-slot-result_in_content"></div>
                    </div>

                    <div class="result-el-texts-n-btns">
                        <div class="row text-blue text-md-center game-result-text-holder">
                            <div class="col">
                                                                    <div class="result-description text-monospace pt-3"><?php echo $pagedescri;?></div>
                                
                                                                    <div class="result-incentive text-monospace pt-3 d-none" style="font-weight: bold;">_RESULT_SHARE_INCENTIVE_</div>
                                                            </div>
                        </div>

                        <div class="result-el-share-btns">
                            <div class="share-buttons-bottom-regular">
                                
                                <div class="row">
                                    <div class="col text-center  pb-3 pb-md-4  pt-3">
                                        

                                        <div class="share-button-continue">
                                            <button class="share-btn facebook-share-btn breathe-blue" style="width: 88%;" data-share-btn data-share-btn-placement="bottom" title="Share on Facebook">
                                                <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                                                <span class="label">Share and Continue</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                                            </div>

                      </div>
                    </div>
                </div>

                                    <div class="text-center pb-3">
                        <a href="javascript:tryagain();" class="btn btn-light auto-width game-play-again border"><i class="fas fa-redo"></i> <span>Try with another photo</span></a>
                    </div>
                            </div>


        </div>
    </div>
</div>



<div class="game-result-sticky-small d-none d-md-none">
    <div class="container py-2 px-5">
        <div class="close"><div class="fas fa-times"></div></div>

        <div class="game-result-img" data-share-btn data-share-btn-placement="result_image_sticky" data-share-btn-no-callback>
            <img alt="<?php echo $titleline;?>" />
        </div>

        <div class="share-button-continue pt-2">
            <button class="share-btn facebook-share-btn" style="width: 88%;" data-share-btn data-share-btn-placement="bottom" title="Share on Facebook">
                <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                <span class="label">Share and Continue</span>
            </button>

            <button class="share-btn vk-share-btn d-none" style="width: 88%;" data-share-btn data-share-btn-provider="vk" data-share-btn-placement="sticky_bottom" title="Share on VK">
                <span class="icon pr-2"><i class="fab fa-vk"></i></span>
                <span class="label">Share and Continue</span>
            </button>

            <button class="share-btn ok-share-btn d-none" style="width: 88%;" data-share-btn data-share-btn-provider="ok" data-share-btn-placement="sticky_bottom" title="Share on OK">
                <span class="icon pr-2"><i class="fab fa-odnoklassniki"></i></span>
                <span class="label">Share and Continue</span>
            </button>
        </div>
    </div>
</div>

<div class="game-result-sticky-big d-none d-md-none">
    <div class="container">
        <div class="game-result-sticky-container py-3">
            <div class="share-top pb-3">
                <button class="share-btn facebook-share-btn share-btn-sm" data-share-btn data-share-btn-placement="sticky_top" title="Share on Facebook">
                    <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                    <span class="label">Share</span>
                </button>

                
                <button class="share-btn share-btn-sm whatsapp-share-btn no-label d-md-none ml-2" data-share-btn data-share-btn-provider="whatsapp" data-share-btn-placement="sticky_top" title="Share on WhatsApp"><span class="icon"><i class="fab fa-whatsapp"></i></span></button>
            </div>

            <div class="game-result-img" data-share-btn data-share-btn-placement="result_image_sticky" data-share-btn-no-callback>
                <img alt="<?php echo $titleline;?>" />
            </div>

            <div class="result-text px-4">
                <div class="result-incentive text-monospace pt-3" style="font-weight: bold;"></div>

                <div class="share-button-continue pt-3">
                    <button class="share-btn facebook-share-btn" style="width: 88%;" data-share-btn data-share-btn-placement="sticky_bottom" title="Share on Facebook">
                        <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                        <span class="label">Share and Continue</span>
                    </button>

                    <button class="share-btn vk-share-btn d-none" style="width: 88%;" data-share-btn data-share-btn-provider="vk" data-share-btn-placement="sticky_bottom" title="Share on VK">
                        <span class="icon pr-2"><i class="fab fa-vk"></i></span>
                        <span class="label">Share and Continue</span>
                    </button>

                    <button class="share-btn ok-share-btn d-none" style="width: 88%;" data-share-btn data-share-btn-provider="ok" data-share-btn-placement="sticky_bottom" title="Share on OK">
                        <span class="icon pr-2"><i class="fab fa-odnoklassniki"></i></span>
                        <span class="label">Share and Continue</span>
                    </button>
                </div>

                <div class="pt-3">
                    <div class="close-btn">No, thanks</div>
                </div>
            </div>
        </div>
    </div>
</div>

                        <!-- /game-result -->
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