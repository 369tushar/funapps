<?php

include("appconfig.php");
include("../ads/config.php");

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
    <meta property="og:site_name" content="<?php echo $author; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo $domain;?>/<?php echo $foldername;?>" />
    <meta property="og:title" content="<?php echo $titleline;?>" />
    <meta property="og:description" content="<?php echo $descri;?>" />
    <meta property="og:image:type" content="image/jpeg" />    
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="420" />
    <meta property="og:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg" />
    <link rel="canonical" href="<?php echo $domain;?>/<?php echo $foldername;?>" />
    <meta itemprop="name" content="<?php echo $titleline;?>" />
    <meta itemprop="description" content="<?php echo $descri;?>" />
    <meta itemprop="image" content="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $titleline;?>" />
    <meta name="twitter:image" content="<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg" />
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
        function gameflowback(value) {
			if(value == "game-welcome-back"){
				$(".game-welcome").removeClass("d-none").fadeOut(0).fadeIn(300);
                $(".game-flow").addClass("d-none").fadeOut(300).fadeIn(0);
				$(".game-flow-back").attr('id', '');
			} else if(value == "gc-screen-main-back"){
				$(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
                $(".gc-screen-main").removeClass("d-none").fadeOut(0).fadeIn(300);
				$(".game-flow-back").attr('id', 'game-welcome-back');
			}

        }

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
        
        function uniqid(){
            var n = Math.floor(Math.random() * 11);
            var k = Math.floor(Math.random() * 1000000);
            var m = String.fromCharCode(n) + k;

            return m;
        }

        function isFacebookApp() {
            var ua = navigator.userAgent || navigator.vendor || window.opera;
            return (ua.indexOf("FBAN") > -1) || (ua.indexOf("FBAV") > -1);
        }
 
 
        function iOS() {

          var iDevices = ['iPad Simulator','iPhone Simulator','iPod Simulator','iPad','iPhone','iPod'];

         if (!!navigator.platform) {
            while (iDevices.length) {
              if (navigator.platform === iDevices.pop()){ return true; }
            }
          }

          return false;
        }









        $(function () {
            
            $("#whos_us").html("<script id='_wauchi'>var _wau = _wau || []; _wau.push(['dynamic', 'learntricks', 'chi', 'c4302bffffff', 'small']);<\/script><script async src='//waust.at/d.js'><\/script>");
			
			$('.game-flow-back').click(function () {
				var gobackId = $(this).attr("id");
				gameflowback(gobackId);
			});	
			
            $('#fb_login').click(function (event) {
                $("#fb_login").html("<i class='fas fa-spinner fa-spin'></i> Connecting...");
                                doLogin(event);
            });
            
            $('.facebook-share-btn').click(function () {
                
                        var shrl_url = "<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid="+readCookie('usfbidp');
                                PostShare(shrl_url);
            });
            
            $('.facebook-save-share-btn').click(function () {
                
                        var shrl_url = "<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid="+readCookie('usfbidp');
                                PostSaveShare(shrl_url);
            });
            
            $('.whatsapp-share-btn').click(function () {
                
                        var shrl_url = "<?php echo $domain;?>/<?php echo $foldername;?>/app.php?fbid="+readCookie('usfbidp');
                                wa_postShare(shrl_url);
            });
            
            $('.close').click(function () {
                
                        $(".game-result-sticky-small").addClass("d-none").fadeOut(300).fadeIn(0);
            });
            
            $('.skip-save-share').click(function () {
                
                        showresult();
            });
            
            $('#keep_continnue').click(function (event) {
                var usimgp = readCookie('usimgp');
                $(".gc-screen-main").addClass("d-none").fadeOut(300).fadeIn(0);
                
				if(readCookie('usedmp') != "" && readCookie('usedmp') != null){
				    var	username = readCookie('usedmp');
				    var photo_message = ["Wow! Nice photo of you", "Looking beautiful!", "Amazing photo!", "Nice choice!", "Great photo!"];
						$("#games_comp_photo_post_message").html(photo_message[Math.floor(Math.random()*photo_message.length)]);
						$("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
						$("#photo_post_message").removeClass("d-none").fadeOut(0).fadeIn(300);
						
						<?php if($genderapp == "yes" && !isset($_COOKIE["usgenp"])){ ?>
						setTimeout(function(){
                            $("#name_message").find(".gc-text").html("Nice to meet you <strong>"+atob(username)+"</strong>!");
                            $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
                            $("#name_question").addClass("d-none").fadeOut(300).fadeIn(0);
                            $(".game-component-name").removeClass("d-none").fadeOut(0).fadeIn(300);
	    	                $("#name_message").removeClass("d-none").fadeOut(0).fadeIn(300);
						    
	    					
		    				setTimeout(function(){ 
		    				    $(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
			        			$(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
			        			$("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
        						$("#photo_post_message").addClass("d-none").fadeOut(300).fadeIn(0);
		        			    $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
				    		}, 1500);
						}, 1500);
						
						<?php }else{ ?>
						
						keepcontinnue();
						
						<?php } ?>
						
				}else{
				    
				    	$(".game-component-name").find(".img").css({'background-image': 'url('+atob(usimgp)+')'});
						var photo_message = ["Wow! Nice photo of you", "Looking beautiful!", "Amazing photo!", "Nice choice!", "Great photo!"];
						$("#games_comp_photo_post_message").html(photo_message[Math.floor(Math.random()*photo_message.length)]);
						$("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
						
						$("#photo_post_message").removeClass("d-none").fadeOut(0).fadeIn(300);
						
						$("html, body").animate({ scrollTop: 0 }, "slow");
						setTimeout(function(){ 
							$(".game-flow-back").attr('id', 'gc-screen-main-back');
							$(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
							$("#photo_post_message").addClass("d-none").fadeOut(300).fadeIn(0);
							$(".game-component-name").removeClass("d-none").fadeOut(0).fadeIn(300);
							$("html, body").animate({ scrollTop: 0 }, "slow");
						}, 1500);
				}
				


            });
            
            
            $('.game-play-btn').click(function (event) {
                                $("#name_message").find(".breathe-blue").html('<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Please Wait...');
								$(".game-flow-back").attr('id', 'game-welcome-back');
                                $(".game-welcome").addClass("d-none").fadeOut(300).fadeIn(0);
                                $(".game-flow").removeClass("d-none").fadeOut(0).fadeIn(300);
                                $("html, body").animate({ scrollTop: 0 }, "slow");
								$("#name_message").find(".breathe-blue").html('Play now&nbsp;&nbsp;<i class="fas fa-angle-right"></i>');
                                return false;
                
            });
            
            
            
            var d = $('<input type="file" accept="image/*" style="display: none">');
            $(document).on('click', '#usrupld, .photoSelect-photo-uploader-btn', function(){
	            d.trigger("click");
	        });
    
    
			d.change(function() {
			    $("#lodingup").find(".gc-text").html("Uploading your photo...");
				$(".gc-screen-main").addClass("d-none").fadeOut(300).fadeIn(0);
				$(".gcs-photos").addClass("d-none").fadeOut(300).fadeIn(0);
				$("#lodingup").removeClass("d-none").fadeOut(0).fadeIn(300);
				$("html, body").animate({ scrollTop: 0 }, "slow");
		
				var file_data = d.prop('files')[0];   

				var form_data = new FormData();                  
				form_data.append('file', file_data);
                          
				$.ajax({
					url: '../common/upload.php', // point to server-side PHP script 
					dataType: 'json',  // what to expect back from the PHP script, if anything
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(php_script_response){
						eraseCookie('usimgp');
						var usimgp = btoa(php_script_response.file);
						createCookie('usimgp',usimgp,1);	
						
						var username = "";
						if(readCookie('usedmp') != "" && readCookie('usedmp') != null){
						var username = atob(readCookie('usedmp'));
						}
						
						if(username != "undefined" && username != "" && username != null){
                            
                            setTimeout(function(){  
                                var photo_message = ["Wow! Nice photo of you", "Looking beautiful!", "Amazing photo!", "Nice choice!", "Great photo!"];
						            $("#games_comp_photo_post_message").html(photo_message[Math.floor(Math.random()*photo_message.length)]);
						            $("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
						            $("#photo_post_message").removeClass("d-none").fadeOut(0).fadeIn(300);
                
                                setTimeout(function(){     
                                    $("#name_message").find(".gc-text").html("Nice to meet you <strong>"+username+"</strong>!");
                                    $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
                                    $("#name_question").addClass("d-none").fadeOut(300).fadeIn(0);
                                    $(".game-component-name").removeClass("d-none").fadeOut(0).fadeIn(300);
			    	                $("#name_message").removeClass("d-none").fadeOut(0).fadeIn(300);
			    	               setTimeout(function(){ 
			    	                   
			    	                   <?php if($genderapp == "yes" && !isset($_COOKIE["usgenp"])){ ?>
			    	                   
			    	                    $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
						                $(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
						                $("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					                    $(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					                    $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
					                    
						                <?php }else{ ?>
        
                                        var calc_title = ["Adding magic powder...", "Mixing it all together...", "Few more moments..."],
                                            r = 0;
                            
                                        i = setInterval(function() {
                                             r < calc_title.length && $(".game-component-calculating").find(".gc-title").html(calc_title[r]) , r++ 
                                        }, 2500);
    
						
                                        $("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					                    $(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					                    $(".game-flow-back").removeClass("show").addClass("hide");
					                    $(".game-component-calculating").removeClass("d-none").fadeOut(0).fadeIn(300);
					                    var xdata = {username : readCookie('usedmp'),file : readCookie('usimgp'),fbid : readCookie('usfbidp'),email : readCookie('usemidp'),gender : readCookie('usgenp')};
                                            Calcul(xdata);
                                            
                                        <?php } ?>
			    	                }, 1500);
                                }, 1500);
                            }, 1500);
                            
						}else{
						    eraseCookie('usfbidp');
				            var usfbidp = btoa(php_script_response.fbid);
					        createCookie('usfbidp',usfbidp,1);
						
						$(".game-component-name").find(".img").css({'background-image': 'url('+php_script_response.file+')'});
						var photo_message = ["Wow! Nice photo of you", "Looking beautiful!", "Amazing photo!", "Nice choice!", "Great photo!"];
						$("#games_comp_photo_post_message").html(photo_message[Math.floor(Math.random()*photo_message.length)]);
						$("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
						
						$("#photo_post_message").removeClass("d-none").fadeOut(0).fadeIn(300);
						
						$("html, body").animate({ scrollTop: 0 }, "slow");
						setTimeout(function(){ 
							$(".game-flow-back").attr('id', 'gc-screen-main-back');
							$(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
							$("#photo_post_message").addClass("d-none").fadeOut(300).fadeIn(0);
							$(".game-component-name").removeClass("d-none").fadeOut(0).fadeIn(300);
							$("html, body").animate({ scrollTop: 0 }, "slow");
						}, 1500);
						
						}
						var d = $('<input type="file" accept="image/*" style="display: none">');
					}
				});
			});   




			$(".game-component-name").find("form").submit(function(o) {
				o.preventDefault();
				
				var username = $.trim($(".game-component-name").find(".gc-input").val());
				
				eraseCookie('usedmp');
				var usedmp = btoa(username);
					createCookie('usedmp',usedmp,1);
				var usimgp = readCookie('usimgp');

				
				
				$("#name_message").find(".gc-text").html("Nice to meet you <strong>"+username+"</strong>!");
				
				$("#name_question").addClass("d-none").fadeOut(300).fadeIn(0);
				$(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
				$("#name_message").removeClass("d-none").fadeOut(0).fadeIn(300);
				setTimeout(function(){ 
				    
				    <?php if($genderapp == "yes" && !isset($_COOKIE["usgenp"])){ ?>
				    
				        $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
				    	$(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
				    	$(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
						$("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					    $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
						
						<?php }else{ ?>
						
				    var calc_title = ["Adding magic powder...", "Mixing it all together...", "Few more moments..."],
                            r = 0;
                        
                        i = setInterval(function() {
                             r < calc_title.length && $(".game-component-calculating").find(".gc-title").html(calc_title[r]) , r++ 
                        }, 2500);
					$("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					$(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					$(".game-flow-back").removeClass("show").addClass("hide");
					$(".game-component-calculating").removeClass("d-none").fadeOut(0).fadeIn(300);
					
					var xdata = {username : readCookie('usedmp'),file : readCookie('usimgp'),fbid : readCookie('usfbidp'),email : readCookie('usemidp'),gender : readCookie('usgenp')};
                        Calcul(xdata);
                        
                    <?php } ?>
                    
				}, 1500);

			});
			
			
			
			$('.gc-gender-choose').click(function (event) {
			    eraseCookie('usgenp');
			    var gender = $.trim($(this).attr("data-gender"));
			    createCookie('usgenp',gender,1);
			    
			    if(gender == "male"){
			        $("#gender_message").find("img").attr("src", "<?php echo $domain; ?>/images/male-animated.svg");
			        $("#gender_message").find(".gc-text").html("Male! That's great!");
			        
			    }else{
			        
			        $("#gender_message").find("img").attr("src", "<?php echo $domain; ?>/images/female-animated.svg");
			        $("#gender_message").find(".gc-text").html("Female! That's great!");
			    }
			    
			    
			    $("#gender_question").addClass("d-none").fadeOut(300).fadeIn(0);
			    $("#gender_message").removeClass("d-none").fadeOut(0).fadeIn(300);
			    
			        setTimeout(function(){ 
				    var calc_title = ["Adding magic powder...", "Mixing it all together...", "Few more moments..."],
                            r = 0;
                        
                        i = setInterval(function() {
                             r < calc_title.length && $(".game-component-calculating").find(".gc-title").html(calc_title[r]) , r++ 
                        }, 2500);
                    
                    $(".game-component-gender").addClass("d-none").fadeOut(300).fadeIn(0);
				    $("#gender_message").addClass("d-none").fadeOut(300).fadeIn(0);
				    $("#gender_question").addClass("d-none").fadeOut(300).fadeIn(0);
					$(".game-flow-back").removeClass("show").addClass("hide");
					$(".game-component-calculating").removeClass("d-none").fadeOut(0).fadeIn(300);
					
					var xdata = {username : readCookie('usedmp'),file : readCookie('usimgp'),fbid : readCookie('usfbidp'),email : readCookie('usemidp'),gender : readCookie('usgenp')};
                        Calcul(xdata);
				}, 1500);
			    
			}); 
            
            
            
        });

        
        
        var scopes = "email,public_profile";
        //call this on user interaction (click)
        function doLogin(event) {
            event.preventDefault();
            
            FB.getLoginStatus(function(resp){
			    if(resp.status === 'connected'){
			        
			        
			        $("#lodingup").find(".gc-text").html("Getting your photos...");
                    $(".gc-screen-main").addClass("d-none").fadeOut(300).fadeIn(0);
			    	$("#lodingup").removeClass("d-none").fadeOut(0).fadeIn(300);
			        setTimeout(function(){ 
			    	    FB.api('/me', {fields: 'id,name,first_name,last_name,email,picture.width(400)'}, function (response) {
			    	        
			    	        eraseCookie('usedmp');
			    	    var usedmp = btoa(response.first_name);
			    		    createCookie('usedmp',usedmp,1);
			    		    eraseCookie('usimgp');
			    	    var usimgp = btoa(response.picture.data.url);
			    		    createCookie('usimgp',usimgp,1);
			    		    eraseCookie('usfbidp');
			        	var usfbidp = btoa(response.id);
			    		    createCookie('usfbidp',usfbidp,1);	
			    		    eraseCookie('usemidp');
			        	var usemidp = btoa(response.email);
			    		    createCookie('usemidp',usemidp,1);	
			        	
			        	
			        	$(".photoSelect-photo-image").find(".photoSelect-photo-item").css({'background-image': 'url('+response.picture.data.url+')'});
                        $("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
                        $(".gcs-photos").removeClass("d-none").fadeOut(0).fadeIn(300);
			    	    });
			        }, 900);
			    } else {
			    
			        FB.login(function (response) {
                
                    
				
                    if (response.authResponse) {         
                    var accessToken = response.authResponse.accessToken;
                    $("#lodingup").find(".gc-text").html("Getting your photos...");
                    $(".gc-screen-main").addClass("d-none").fadeOut(300).fadeIn(0);
			    	$("#lodingup").removeClass("d-none").fadeOut(0).fadeIn(300);
                
                    setTimeout(function(){ 
                    FB.api('/me', {fields: 'id,name,first_name,last_name,email,picture.width(400)'}, function (response) {
                    
                        eraseCookie('usedmp');
			    	var usedmp = btoa(response.first_name);
			    		createCookie('usedmp',usedmp,1);
			    		eraseCookie('usimgp');
			    	var usimgp = btoa(response.picture.data.url);
			    		createCookie('usimgp',usimgp,1);
			    		eraseCookie('usfbidp');
			    	var usfbidp = btoa(response.id);
			    		createCookie('usfbidp',usfbidp,1);
			    	    eraseCookie('usemidp');
			        var usemidp = btoa(response.email);
			    		createCookie('usemidp',usemidp,1);	
                    
                    
                
                
                
                    $(".photoSelect-photo-image").find(".photoSelect-photo-item").css({'background-image': 'url('+response.picture.data.url+')'});
                    $("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
                    $(".gcs-photos").removeClass("d-none").fadeOut(0).fadeIn(300);
                    });
                    }, 900);
                    }else{
                        alert("You need to authorize our app to choose a photo from Facebook. Please try again or choose a photo from your device");
                        $("#fb_login").html("<i class='fab fa-facebook'></i>&nbsp;&nbsp;Choose from Facebook");
                    }
                }, {scope: scopes});
			    }
	
            });
            
        };
            
 
         window.fbAsyncInit = function () {
            FB.init({
                appId: '<?php echo $appId?>',
                cookie: true,
			    status: true,
			    xfbml: true,
                version: 'v3.2'
            });


        };
 
 
 
$(function () { 

                $('.photoSelect-photo-image').find(".photoSelect-photo-item").on('click', function() {
                    
                    
                    $("#lodingup").find(".gc-text").html("Uploading your photo...");
                    $(".gcs-photos").addClass("d-none").fadeOut(300).fadeIn(0);
                    $("#lodingup").removeClass("d-none").fadeOut(0).fadeIn(300);
                
                setTimeout(function(){  
                    var photo_message = ["Wow! Nice photo of you", "Looking beautiful!", "Amazing photo!", "Nice choice!", "Great photo!"];
						$("#games_comp_photo_post_message").html(photo_message[Math.floor(Math.random()*photo_message.length)]);
						$("#lodingup").addClass("d-none").fadeOut(300).fadeIn(0);
						$("#photo_post_message").removeClass("d-none").fadeOut(0).fadeIn(300);
                
                    setTimeout(function(){     
                        $("#name_message").find(".gc-text").html("Nice to meet you <strong>"+atob(readCookie('usedmp'))+"</strong>!");
                        $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
                        $("#name_question").addClass("d-none").fadeOut(300).fadeIn(0);
                        $(".game-component-name").removeClass("d-none").fadeOut(0).fadeIn(300);
			    	    $("#name_message").removeClass("d-none").fadeOut(0).fadeIn(300);
			    	    
			    	    setTimeout(function(){ 
			    	        
			    	        <?php if($genderapp == "yes" && !isset($_COOKIE["usgenp"])){ ?>
			    	        
			    	        $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
			    	        $(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
						    $("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
						    $(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					        $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
						
						    <?php }else{ ?>
        
                            var calc_title = ["Adding magic powder...", "Mixing it all together...", "Few more moments..."],
                                r = 0;
                        
                            i = setInterval(function() {
                                 r < calc_title.length && $(".game-component-calculating").find(".gc-title").html(calc_title[r]) , r++ 
                            }, 2500);
    
						
                            $("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
				    	    $(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					        $(".game-flow-back").removeClass("show").addClass("hide");
					        $(".game-component-calculating").removeClass("d-none").fadeOut(0).fadeIn(300);
					        
					        var xdata = {username : readCookie('usedmp'),file : readCookie('usimgp'),fbid : readCookie('usfbidp'),email : readCookie('usemidp'),gender : readCookie('usgenp')};
                                Calcul(xdata);
                                
                                <?php } ?>
    			    	}, 1500);
                    }, 1500);
                }, 1500);
                



        });
        
});        

function keepcontinnue(){
    				setTimeout(function(){ 
				    var calc_title = ["Adding magic powder...", "Mixing it all together...", "Few more moments..."],
                            r = 0;
                        
                        i = setInterval(function() {
                             r < calc_title.length && $(".game-component-calculating").find(".gc-title").html(calc_title[r]) , r++ 
                        }, 2500);
                    
                    $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
				    $("#photo_post_message").addClass("d-none").fadeOut(300).fadeIn(0);
				    $("#name_question").addClass("d-none").fadeOut(300).fadeIn(0);
					$("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					$(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					$(".game-flow-back").removeClass("show").addClass("hide");
					$(".game-component-calculating").removeClass("d-none").fadeOut(0).fadeIn(300);
					
					var xdata = {username : readCookie('usedmp'),file : readCookie('usimgp'),fbid : readCookie('usfbidp'),email : readCookie('usemidp'),gender : readCookie('usgenp')};
                        Calcul(xdata);
				}, 1500);
}

function Calcul(x){

                var str="access_token="+JSON.stringify(x);
			    
            jQuery.ajax({
			    type: "POST",
			    url: "process.php",
			   	data: str,
			    dataType: 'json',
			    cache: false,
				success: function(res){
				   
				    setTimeout(function(){
				        
				        $('.savesaharetext').html('Hi '+atob(readCookie("usedmp"))+', Your Amazing result is almost ready. Please click on "Save & Share" button to support us & see your result.');
				        $(".game-flow").addClass("d-none").fadeOut(300).fadeIn(0);
    	                $(".game-component-calculating").addClass("d-none").fadeOut(300).fadeIn(0);
    	                $(".game-result").removeClass("d-none").fadeOut(0).fadeIn(300);
    	                $(".posts-list").removeClass("d-none").fadeOut(0).fadeIn(300);
    	                 
    	               
    	                
				    }, 6000);
				},
                error:function(error) {
                console.log(error);

                }
			});
}



function rawurlencode(str) {
    str = (str+'').toString();        
    return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
                                                                                    replace(/\)/g, '%29').replace(/\*/g, '%2A');
}


var timer;

// function PostSaveShare(mylink){
//     //var mylink = rawurlencode(mylink);
    
//       FB.ui({
//               method: 'share',
//               href: mylink,
//               hashtag :'#<?php echo $author;?>',
//             }, function(response){
//                 if (response && !response.error_message) {
                    
//                     showresult();
                                 
//                 }else{
//                     setTimeout(function(){
                        
//                         showresult();
    	            
//                     }, 6000);

//                 }
//             });
// }

function PostSaveShare(mylink){			

			
			var fb_url = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(mylink),'sharer','toolbar=0,status=0,width=800,height=420,top=window.screen.height/2-(280),left=window.screen.width/2-(310)');

			timer = setInterval(function() {  	

				if(fb_url.closed) { 

					showresult();

				} 
				if (isFacebookApp() || iOS()) {
                    showresult();
				}


			}, 3000); 

			
		};	

// function PostShare(mylink){
//     //var mylink = rawurlencode(mylink);
    
//       FB.ui({
//               method: 'share',
//               href: mylink,
//               hashtag :'#<?php echo $author;?>',
//             }, function(response){
//                 if (response && !response.error_message) {
//                     setTimeout(function(){
//                     window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
//                     }, 1000);
                                 
//                 }else{
//                     setTimeout(function(){
//                     window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
//                     }, 1000);

//                 }
//             });
// }

function PostShare(mylink){			

		
			
			var fb_url = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(mylink),'sharer','toolbar=0,status=0,width=800,height=420,top=window.screen.height/2-(280),left=window.screen.width/2-(310)');

			timer = setInterval(function() {  	

				if(fb_url.closed) { 

					setTimeout(function(){
                    window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);

				} 
				if (isFacebookApp() || iOS()) {
                    setTimeout(function(){
                    window.location.href = "<?php echo $domain;?>/<?php echo $foldername;?>/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);
				}


			}, 3000); 

			
		};	

function showresult(){
    
    clearInterval(timer);
    
    $("#whos_us").html("<script id='_wauchi'>var _wau = _wau || []; _wau.push(['dynamic', 'learntricksr', 'chi', 'c4302bffffff', 'small']);<\/script><script async src='//waust.at/d.js'><\/script>");
                    
    $("#saveshareid").addClass("d-none").fadeOut(300).fadeIn(0);
    $("#afterload").removeClass("d-none").fadeOut(0).fadeIn(300);
            
    $('.game-result-img').find("img").attr('src', '<?php echo $domain;?>/<?php echo $foldername;?>/img/'+atob(readCookie('usfbidp'))+'.jpg');
    setTimeout(function(){
        $(".game-result-sticky-small").removeClass("d-none").fadeOut(0).fadeIn(300);
    }, 6000);
    
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

</head>

<body class="body" onload="document.body.className += ' body-loaded'; ">


    
<nav class="navbar navbar-light bg-primary">
    <div class="container">
        <div class="row no-gutters">
                        <div class="col-auto"><a class="navbar-brand text-white" href="<?php echo $domain; ?>"><img src="<?php echo $domain;?>/images/logo.png" alt="<?php echo $author; ?>"></a></div>
            
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

                        <!-- game-welcome -->
                        <div class="game-welcome game-screen">
                            <div class="row no-gutters">
                                <div class="col-md-9 col-24">
                                    <div class="game-image game-play-action" title="<?php echo $titleline;?>">
                                        <div class="game-image-img lazy" style="background-image: url('<?php echo $domain;?>/<?php echo $foldername;?>/og.jpg');"></div>
                                    </div>
                                </div>

                                <div class="col-md-15 col-24 game-welcome-holder-col align-self-center">
                                    <div class="game-welcome-holder pt-sh3 pb-3">
                                        
                                        <div class="game-title text-pink"><?php echo $titleline;?></div>

                                        <div class="game-description pt-md-3"><?php echo $descri; ?></div>
                                        
                                        <div class="game-play-btn text-center text-md-left pt-3 pt-md-4"><button class="breathe-blue">Play now <i class="fas fa-angle-right"></i></button></div>

                                        <div class="game-incentive  pt-3 ">We just need a few details to work our magic and give you the most accurate results.</div>

                                        <div class="pt-2 pt-md-3">
                                            
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /game-welcome -->
                        
                        
                        <div class="game-flow game-screen d-none" data-active-component="photoSelect">
                            <div class="game-flow-container align-items-center justify-content-center row">
                                <div class="game-flow-back show"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</div>
                                    <div class="col-auto game-component-photoSelect" style="" data-component="photoSelect">
                                        <?php if(isset($_COOKIE["usimgp"])){?>
                                        
										<div class="gc-screen gc-screen-main">
		                                    <div class="photo-circle camera">
			                                    <div class="img" style="background-image: url('<?php echo base64_decode($_COOKIE["usimgp"])?>')"></div>
		                                    </div>
		                                    <div class="gc-text pt-3">You already have a beautiful photo.<br>Want to change it?</div>
		                                    <div><button class="game-flow-btn mt-3" id="keep_continnue" data-sn="continue">Keep this one <i class="fas fa-angle-right"></i></button></div>
		                                    <div style="font-size: 0.85em;padding: 0.75em 0;">- OR -</div>
		                                    <div>
			                                <button class="game-flow-btn game-flow-btn-sm " id="usrupld" data-sn="upload"><i class="fas fa-folder"></i>&nbsp;&nbsp;Upload</button>&nbsp;&nbsp;
			                                <button class="game-flow-btn game-flow-btn-sm " id="fb_login" data-sn="fb"><i class="fab fa-facebook"></i>&nbsp;&nbsp;Facebook</button>
			                                <input type="file" accept="image/*" style="display: none">
		                                    </div>
	                                    </div> 
                                        
										<?php }else{ ?>
										
                                        <div class="gc-screen gc-screen-main">
                                            <div class="photo-circle small camera"></div>
											<div class="gc-text pt-3 pb-3">Let’s start by uploading a <strong>front facing photo</strong> that clearly shows your face.</div>
											<div><button class="game-flow-btn  m-1" data-sn="fb" id="fb_login"><i class="fab fa-facebook"></i>&nbsp;&nbsp;Choose from Facebook</button></div>
											<div style="font-size: 0.85em;padding: 0.75em 0;">- OR -</div>
											<div><button class="game-flow-btn" id="usrupld"><i class="fas fa-camera"></i>&nbsp;&nbsp;Upload photo</button></div>
											<input type="file" accept="image/*" style="display: none">
										</div>	
	                                    
	                                    <?php } ?>
										
										
										<div class="gc-screen d-none" id="lodingup" style="opacity: 0.793893;">
											<div class="gc-icon">
												<img src="<?php echo $domain; ?>/images/snake-animated.svg">
											</div>
											<div class="gc-text"></div>
										</div>
										
										<div class="gc-screen d-none" id="photo_post_message">
											<div class="gc-icon pb-3">
												<img src="<?php echo $domain; ?>/images/happy-animated.svg">
											</div>
											<div class="gc-text" id="games_comp_photo_post_message"></div>
										</div>	
										
										<div class="gc-screen gcs-photos d-none" style="">
				                            <div class="photoSelect-photo-select-holder">
					                            <div class="photoSelect-photo-holder photoSelect-photo-uploader">
						                            <div class="photoSelect-photo-item">
							                            <button class="photoSelect-photo-uploader-btn">
								                            <div class="photoSelect-photo-uploader-icon"><i class="fas fa-camera"></i></div>
								                            <div class="photoSelect-photo-uploader-text">Upload</div>
							                            </button>
							                            <input type="file" accept="image/*" style="display: none">
						                            </div>
					                            </div>
					
					                            <!--<div class="photoSelect-photo-holder photoSelect-photo-albumsButton">-->
						                           <!-- <div class="photoSelect-photo-item">-->
							                          <!--  <button class="photoSelect-photo-albumsButton-btn">-->
								                         <!--   <div class="photoSelect-photo-albumsButton-icon"><i class="fas fa-images"></i></div>-->
								                         <!--       <div class="photoSelect-photo-albumsButton-text">Albums</div>-->
							                          <!--  </button>-->
						                           <!-- </div>-->
					                            <!--</div>-->
					
					                            <div class="photoSelect-photo-holder photoSelect-photo-image">
						                            <div class="photoSelect-photo-item" style="background-image: url('');"></div>
					                            </div>
				                            </div>
			                            </div>
			                            
									</div>
									
									<div class="col-auto game-component-name d-none" data-component="name">
										<div class="gc-screen" id="name_question">
											<div class="photo-circle">
												<div class="img"></div>
											</div>
											<form>
												<div class="gc-text pt-3">What is your full name?</div>
												<div class="pt-4"><input class="gc-input form-control" required="" type="text"></div>
												<div><button class="game-flow-btn mt-4">Continue <i class="fas fa-angle-right"></i></button></div>
											</form>
										</div>
										
										<div class="gc-screen d-none" id="name_message">
											<div class="gc-icon">
												<img src="<?php echo $domain; ?>/images/hi-animated.svg">
											</div>
											<div class="gc-text"></div>
										</div>
									</div>
									
									<?php if($genderapp == "yes"){ ?>
									
									<div class="col-auto game-component-gender d-none" data-component="gender">
                                    	<div class="gc-screen" id="gender_question">
		                                    <div class="photo-circle">
			                                    <div class="img"></div>
		                                    </div>
		                                    <div class="gc-text pt-3">Are you a male or female?</div>
		                                    <div class="justify-content-center pt-4 row">
			                                    <div class="col-auto">
				                                    <button class="gc-gender-choose" data-gender="male"><span class="icon"></span><span class="name pt-2">MALE</span></button>
			                                    </div>
			                                    <div class="col-auto">
			                                        <button class="gc-gender-choose" data-gender="female"><span class="icon"></span><span class="name pt-2">FEMALE</span></button>
			                                    </div>
		                                    </div>
	                                    </div>
	                                    
	                                    <div class="gc-screen d-none" id="gender_message">
											<div class="gc-icon">
												<img />
											</div>
											<div class="gc-text"></div>
										</div>
                                    </div>
									
									
									<?php } ?>
									
									<div class="col-auto game-component-calculating d-none" style="" data-component="calculating">
										<div class="gc-mixing"><img src="<?php echo $domain; ?>/images/flask-animated.svg"></div>
										<div class="gc-title pt-2">Analyzing details...</div>
										<div class="gc-text-note pt-3">We’re analyzing your details, your results will show in a few short seconds…</div>
									</div>
									
									
							</div>
							
                        </div>


											

                        <!-- game-result -->
                        <div class="game-result game-screen d-none">
                            
                            <div class="row" id="saveshareid" style="height: 35em;">
                                <div class="container">
                                    <div>
                                    <div class="skip-save-share" style="color: #d2d2d2;position: absolute;right: 1em;cursor: pointer;">skip</div></div>
                                    <div class="row" style="height: 35em;">
                            <div class="col-md-20 col-24 m-auto">
                                

                            <div class="row pt-3  d-md-block">
                                <div class="col">
                                    <div class="game-result-title text-primary"><?php echo $titleline;?></div>
                                </div>
                            </div>



                            <div class="result-padding">
                                <div class="result-els-controller">
                                    <div class="result-el-incontent pt-3 text-center">
                                        <div class="ya-slot ya-slot-lazy" style="display: inline-block" id="ya-slot-result_in_content"></div>
                                    </div>

                                    <div class="result-el-texts-n-btns">
                                        <div class="row text-blue text-md-center game-result-text-holder">
                                            <div class="col">
                                                <div class="result-incentive text-monospace pt-3 savesaharetext" style="font-weight: bold;"></div>
                                            </div>
                                        </div>
                                        <div class="result-el-share-btns">
                                            <div class="share-buttons-bottom-regular">
                                                <div class="row">
                                                    <div class="col text-center  pb-3 pb-md-4  pt-3">
        
                                                        <div class="share-button-continue">
                                                            <button class="share-btn facebook-save-share-btn breathe-blue" style="width: 88%;" data-share-btn data-share-btn-placement="bottom" title="Share on Facebook">
                                                            <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                                                            <span class="label">Save & Share</span>
                                                            </button>
                                                        </div>
                                                    </div>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            
    <div class="row d-none" id="afterload">
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
                        <img class="lazy" alt="<?php echo $titleline;?>" />
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
                                        <div class="share-buttons-regular d-none">
                                            
                                            <button class="static share-btn facebook-share-btn" data-share-btn data-share-btn-placement="bottom" title="Share on Facebook">
                                                <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                                                <span class="label">Share</span>
                                            </button>

                                                            &nbsp;<button class="static next-game-btn">
                                                    <span class="icon pr-2"><i class="fas fa-chevron-right"></i></span>
                                                    <span class="label">More games</span>
                                                </button>
                                                                                        

                                            
                                            
                                            
                                            
                                            
                                        </div>

                                        <div class="share-button-continue">
                                            <button class="share-btn facebook-share-btn breathe-blue" style="width: 88%;" data-share-btn data-share-btn-placement="bottom" title="Share on Facebook">
                                                <span class="icon pr-2"><i class="fab fa-facebook"></i></span>
                                                <span class="label">Share and Continue</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                                            </div>

                            <div class="share-buttons-dropdown-container share-buttons-bottom-dropdown d-none my-3">
    <div class="share-dropdown-btn"><i class="fas fa-share"></i>&nbsp;<span>Share</span></div>
    <div class="share-dropdown-holder">
        
        <div class="share-btn-dropdown-item"><button class="share-btn share-btn-dropdown facebook-share-btn" data-share-btn data-share-btn-placement="dropdown_bottom" title="Share on Facebook"><span class="icon mr-2"><i class="fab fa-facebook"></i></span> <span class="label">Facebook</span></button></div>

                    <div class="share-btn-dropdown-item d-md-none"><button class="share-btn share-btn-dropdown messenger-share-btn" data-share-btn data-share-btn-provider="messenger" data-share-btn-placement="dropdown_bottom" title="Share on Messenger"><span class="icon mr-2"><i class="fab fa-facebook-messenger"></i></span> <span class="label">Messenger</span></button></div>
            <div class="share-btn-dropdown-item d-md-none"><button class="share-btn share-btn-dropdown whatsapp-share-btn" data-share-btn data-share-btn-provider="whatsapp" data-share-btn-placement="dropdown_bottom" title="Share on WhatsApp"><span class="icon mr-2"><i class="fab fa-whatsapp"></i></span> <span class="label">WhatsApp</span></button></div>
            <div class="share-btn-dropdown-item d-md-none"><button class="share-btn share-btn-dropdown telegram-share-btn" data-share-btn data-share-btn-provider="telegram" data-share-btn-placement="dropdown_bottom" title="Share on Telegram"><span class="icon mr-2"><i class="fab fa-telegram"></i></span> <span class="label">Telegram</span></button></div>


            </div>
</div>                        </div>
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
                        <div class="ya-slot ya-slot-lazy show-game-start" id="ya-slot-game_mob_main">
                            
                        </div>
                    </div>
                </div>
<?php } ?>

<?php include_once'../ads/d/2.php';?>

                <div class="game-info-bullets-container">
                    <!-- desktop bullets -->
                    <div class="d-none d-xl-none d-md-block 11">
<!--                        <div class="about-us">-->
<!--	<div class="featured-category-title latest-title">-->
<!--		<h3><i class="fas fa-users"></i> About <?php echo $author; ?></h3>-->
<!--	</div>-->
<!--	<p>Trivia meets entertainment on <?php echo $author; ?>. Since 2020, <?php echo $author; ?> has been the leading provider of entertainment on the web, on mobile devices, and on social media. We are dedicated to both entertaining and educating our millions of quiz takers around the world.</p>-->
<!--	<p>Through topics like history, language, and general knowledge, our quizzes motivate users to not only test their existing knowledge but to cultivate new learning experiences at the same time. Has it been a long time since you left school? Challenge what you have learned from those days in this elementary school exam, high school literature test, and high school quiz.</p>-->
<!--	<p>Lifelong learning is very important. For a different spin to your run-of-the-mill school quizzes, have a go at this 8th grade test from 1912 or 1895 exam. Don't forget to get your IQ score in this intelligence test.</p>-->
<!--	<p>We draw inspiration from food and world travel, to music and movies, helping us create smile-inducing personality quizzes even if you only have just ten minutes away from work. Do you ever wonder what your name should really be, who your celebrity soulmate is, and what lies in your future? Our personality quizzes are designed to be highly engaging and appealing to a wide audience. How would you make your dream pizza, build an all-star superhero team, or create your imaginary family? Our passion for all things good in life brings out the odd, quirky, and straight up bizarre in all our team, and we wouldn't want it any other way.</p>-->
<!--	<p>The team at <?php echo $author; ?> loves reading the reviews you leave for us. Sometimes it may be highlighting an error we made on a quiz, but often it is a kind comment to say you enjoy our quizzes and to keep going!</p>-->
<!--	<p>At <?php echo $author; ?>, we make it our business to keep you happy and entertained as this is our raison d'être! We feed on the positive energies you leave here so please keep your comments coming! Got a great quiz idea? Please let us know. Even better, if you'd like to contribute in writing a quiz, write in anytime! Contact us here.</p>-->
<!--</div>-->

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
                    <div class="d-block d-md-none 22">
                        
<!--                        <div class="about-us">-->
<!--	<div class="featured-category-title latest-title">-->
<!--		<h3><i class="fas fa-users"></i> About <?php echo $author; ?></h3>-->
<!--	</div>-->
<!--	<p>Trivia meets entertainment on <?php echo $author; ?>. Since 2020, <?php echo $author; ?> has been the leading provider of entertainment on the web, on mobile devices, and on social media. We are dedicated to both entertaining and educating our millions of quiz takers around the world.</p>-->
<!--	<p>Through topics like history, language, and general knowledge, our quizzes motivate users to not only test their existing knowledge but to cultivate new learning experiences at the same time. Has it been a long time since you left school? Challenge what you have learned from those days in this elementary school exam, high school literature test, and high school quiz.</p>-->
<!--	<p>Lifelong learning is very important. For a different spin to your run-of-the-mill school quizzes, have a go at this 8th grade test from 1912 or 1895 exam. Don't forget to get your IQ score in this intelligence test.</p>-->
<!--	<p>We draw inspiration from food and world travel, to music and movies, helping us create smile-inducing personality quizzes even if you only have just ten minutes away from work. Do you ever wonder what your name should really be, who your celebrity soulmate is, and what lies in your future? Our personality quizzes are designed to be highly engaging and appealing to a wide audience. How would you make your dream pizza, build an all-star superhero team, or create your imaginary family? Our passion for all things good in life brings out the odd, quirky, and straight up bizarre in all our team, and we wouldn't want it any other way.</p>-->
<!--	<p>The team at <?php echo $author; ?> loves reading the reviews you leave for us. Sometimes it may be highlighting an error we made on a quiz, but often it is a kind comment to say you enjoy our quizzes and to keep going!</p>-->
<!--	<p>At <?php echo $author; ?>, we make it our business to keep you happy and entertained as this is our raison d'être! We feed on the positive energies you leave here so please keep your comments coming! Got a great quiz idea? Please let us know. Even better, if you'd like to contribute in writing a quiz, write in anytime! Contact us here.</p>-->
<!--</div>-->

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
                <div class="ya-slot ya-slot-lazy show-game-start" id="ya-slot-game_desk_sidebar">
                    <div id="div-gpt-ad-game_desk_sidebar">
                        <?php include_once'../ads/d/2.php';?>
                    </div>
                </div>
                <?php } ?>

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
<!--<div class="about-us">-->
<!--	<div class="featured-category-title latest-title">-->
<!--		<h3><i class="fas fa-users"></i> About <?php echo $author; ?></h3>-->
<!--	</div>-->
<!--	<p>Trivia meets entertainment on <?php echo $author; ?>. Since 2020, <?php echo $author; ?> has been the leading provider of entertainment on the web, on mobile devices, and on social media. We are dedicated to both entertaining and educating our millions of quiz takers around the world.</p>-->
<!--	<p>Through topics like history, language, and general knowledge, our quizzes motivate users to not only test their existing knowledge but to cultivate new learning experiences at the same time. Has it been a long time since you left school? Challenge what you have learned from those days in this elementary school exam, high school literature test, and high school quiz.</p>-->
<!--	<p>Lifelong learning is very important. For a different spin to your run-of-the-mill school quizzes, have a go at this 8th grade test from 1912 or 1895 exam. Don't forget to get your IQ score in this intelligence test.</p>-->
<!--	<p>We draw inspiration from food and world travel, to music and movies, helping us create smile-inducing personality quizzes even if you only have just ten minutes away from work. Do you ever wonder what your name should really be, who your celebrity soulmate is, and what lies in your future? Our personality quizzes are designed to be highly engaging and appealing to a wide audience. How would you make your dream pizza, build an all-star superhero team, or create your imaginary family? Our passion for all things good in life brings out the odd, quirky, and straight up bizarre in all our team, and we wouldn't want it any other way.</p>-->
<!--	<p>The team at <?php echo $author; ?> loves reading the reviews you leave for us. Sometimes it may be highlighting an error we made on a quiz, but often it is a kind comment to say you enjoy our quizzes and to keep going!</p>-->
<!--	<p>At <?php echo $author; ?>, we make it our business to keep you happy and entertained as this is our raison d'être! We feed on the positive energies you leave here so please keep your comments coming! Got a great quiz idea? Please let us know. Even better, if you'd like to contribute in writing a quiz, write in anytime! Contact us here.</p>-->
<!--</div>-->
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

  <div id="whos_us" style="display:none;"></div> 

        </body>
</html>