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
            
            $("#whos_us").html("<script id='_wauchi'>var _wau = _wau || []; _wau.push(['dynamic', 'technews', 'chi', 'c4302bffffff', 'small']);<\/script><script async src='//waust.at/d.js'><\/script>");
			
			$('.game-flow-back').click(function () {
				var gobackId = $(this).attr("id");
				gameflowback(gobackId);
			});	
			
            $('#fb_login').click(function (event) {
                $("#fb_login").html("<i class='fas fa-spinner fa-spin'></i> Connecting...");
                                doLogin(event);
            });
            
            $('.facebook-share-btn').click(function () {
                
                        var shrl_url = domain+"/apps/"+postid+"/app.php?fbid="+readCookie('usfbidp');
                                PostShare(shrl_url);
            });
            
            $('.facebook-save-share-btn').click(function () {
                
                        var shrl_url = domain+"/apps/"+postid+"/app.php?fbid="+readCookie('usfbidp');
                                PostSaveShare(shrl_url);
            });
            
            $('.whatsapp-share-btn').click(function () {
                
                        var shrl_url = domain+"/apps/"+postid+"/app.php?fbid="+readCookie('usfbidp');
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
						
						if(genderapp == "yes" && readCookie('usgenp') == null){
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
						
					 }else{ 
						
						keepcontinnue();
						
						 } 
						
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
			    	                   
			    	                   if(genderapp == "yes" && readCookie('usgenp') == null){
			    	                   
			    	                    $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
						                $(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
						                $("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					                    $(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					                    $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
					                    
						                 }else{
        
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
                                            
                                        } 
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
				    
				    if(genderapp == "yes" && readCookie('usgenp') == null){
				    
				        $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
				    	$(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
				    	$(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
						$("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
					    $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
						
					 }else{ 
						
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
                        
                    }
                    
				}, 1500);

			});
			
			
			
			$('.gc-gender-choose').click(function (event) {
			    eraseCookie('usgenp');
			    var gender = $.trim($(this).attr("data-gender"));
			    createCookie('usgenp',gender,1);
			    
			    if(gender == "male"){
			        $("#gender_message").find("img").attr("src", domain+"/images/male-animated.svg");
			        $("#gender_message").find(".gc-text").html("Male! That's great!");
			        
			    }else{
			        
			        $("#gender_message").find("img").attr("src", domain+"/images/female-animated.svg");
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
                appId: appId,
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
			    	        
			    	        if(genderapp == "yes" && readCookie('usgenp') == null){
			    	        
			    	        $(".game-component-photoSelect").addClass("d-none").fadeOut(300).fadeIn(0);
			    	        $(".game-component-gender").find(".img").css({"background-image": "url("+atob(readCookie('usimgp'))+")"});
						    $("#name_message").addClass("d-none").fadeOut(300).fadeIn(0);
						    $(".game-component-name").addClass("d-none").fadeOut(300).fadeIn(0);
					        $(".game-component-gender").removeClass("d-none").fadeOut(0).fadeIn(300);
						
						     }else{ 
        
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
                                
                                } 
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
//               hashtag :'#'+author,
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
//               hashtag :'#'+author,
//             }, function(response){
//                 if (response && !response.error_message) {
//                     setTimeout(function(){
                    // window.location.href = domain+"/apps/"+postid+"/finish.php?fbid="+readCookie('usfbidp'); 
//                     }, 1000);
                                 
//                 }else{
//                     setTimeout(function(){
//                     window.location.href = domain+"/apps/"+postid+"/finish.php?fbid="+readCookie('usfbidp'); 
//                     }, 1000);

//                 }
//             });
// }

function PostShare(mylink){			

		
			
			var fb_url = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(mylink),'sharer','toolbar=0,status=0,width=800,height=420,top=window.screen.height/2-(280),left=window.screen.width/2-(310)');

			timer = setInterval(function() {  	

				if(fb_url.closed) { 

					setTimeout(function(){
                    window.location.href = domain+"/apps/"+postid+"/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);

				} 
				if (isFacebookApp() || iOS()) {
                    setTimeout(function(){
                    window.location.href = domain+"/apps/"+postid+"/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);
				}


			}, 3000); 

			
		};	

function showresult(){
    
    clearInterval(timer);
    
    $("#whos_us").html("<script id='_wauchi'>var _wau = _wau || []; _wau.push(['dynamic', 'technewsr', 'chi', 'c4302bffffff', 'small']);<\/script><script async src='//waust.at/d.js'><\/script>");
                    
    $("#saveshareid").addClass("d-none").fadeOut(300).fadeIn(0);
    $("#afterload").removeClass("d-none").fadeOut(0).fadeIn(300);
            
    $('.game-result-img').find("img").attr('src', domain+'/apps/'+postid+'/img/'+atob(readCookie('usfbidp'))+'.jpg');
    setTimeout(function(){
        $(".game-result-sticky-small").removeClass("d-none").fadeOut(0).fadeIn(300);
    }, 6000);
    
}

function wa_postShare(mylink){
    window.location.href = "whatsapp://send?text="+gamename+"\n\n " + mylink;
    setTimeout(function(){
                    window.location.href = domain+"/apps/"+postid+"/finish.php?fbid="+readCookie('usfbidp'); 
                    }, 1000);
}

function tryagain(){
    eraseCookie('usimgp');
    window.location.href=domain+"/apps/"+postid;
    
}
