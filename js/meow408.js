var unusedwords=[];unusedwords["the"]=1;unusedwords["a"]=1;var Site={init:function(){Site.addConsole();Site.ajax_setup();Site.initialize_facebook();Site.init_typein_quiz();Site.share_listener();Site.common_listeners();Site.scroll_listener();},quiz_cnt:0,quiz_click:false,addConsole:function(){if(!(window.console&&console.log)){window.console={log:function(){},debug:function(){},info:function(){},warn:function(){},error:function(){}};}},ajax_setup:function(){$.ajaxSetup({cache:true});$(document).ajaxSend(function(event,xhr,settings){function getCookie(name){var cookieValue=null;if(document.cookie&&document.cookie!=''){var cookies=document.cookie.split(';');for(var i=0;i<cookies.length;i++){var cookie=jQuery.trim(cookies[i]);if(cookie.substring(0,name.length+ 1)==(name+'=')){cookieValue=decodeURIComponent(cookie.substring(name.length+ 1));break;}}}
return cookieValue;}
function sameOrigin(url){var host=document.location.host;var protocol=document.location.protocol;var sr_origin='//'+ host;var origin=protocol+ sr_origin;return(url==origin||url.slice(0,origin.length+ 1)==origin+'/')||(url==sr_origin||url.slice(0,sr_origin.length+ 1)==sr_origin+'/')||!(/^(\/\/|http:|https:).*/.test(url));}
function safeMethod(method){return(/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));}
if(!safeMethod(settings.type)&&sameOrigin(settings.url)){xhr.setRequestHeader("X-CSRFToken",getCookie('csrftoken'));}});},renderXfbml:function(){FB.XFBML.parse();},check_for_permission:function(permissions,given_callback,missing_callback){FB.api('/me/permissions',function(response_perm){var perms=response_perm.data;var permission_arr=permissions.split(",");var permitted_list=[];for(var fbperm in perms){if(perms[fbperm].status=='granted'){permitted_list.push(perms[fbperm].permission);}}
console.log('permitted lits, ',permitted_list);console.log('wanted permissions, ',permission_arr);var missing_perm_list=[];var permissions_given=true;var granted_per=permitted_list.sort().join('');for(var pos in permission_arr){var s=(granted_per.indexOf(permission_arr[pos])===-1);if(s){permissions_given=false;missing_perm_list.push(permission_arr[pos]);}}
if(permissions_given){given_callback();return;}else{if(typeof missing_callback!=="undefined"){var lost=missing_perm_list.sort().join(',');console.log("missing permissions:"+ lost)
missing_callback(lost);}
return;}});},initialize_facebook:function(){$('.login-btn').show()
$('.logout-btn').hide()
if($("#confirmok").length>0){$('#confirmok').unbind('click').on('click',function(){$("#myModal").modal("hide")
var perm='email,public_profile,user_friends,user_birthday,user_likes';if(appConfig.perm){perm=appConfig.perm;}
FB.getLoginStatus(function(response){if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.animate_body();Site.play_soulmate_quiz();},function(missing_permissions){FB.login(function(response){if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.animate_body();Site.play_soulmate_quiz();},function(missing_permissions){console.log("denied");Site.quiz_cnt++;$("#myModal").modal("show")});}else{Site.quiz_cnt++;}},{auth_type:"rerequest",scope:missing_permissions});});}else if(response.status=='unknown'){console.log("unknown logged in");Site.redirect_to_allauth_login('basic');}else{FB.login(function(response){if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.animate_body();Site.play_soulmate_quiz();},function(missing_permissions){console.log("denied");Site.quiz_cnt++;$("#myModal").modal("show")});}else{Site.quiz_cnt++;}},{scope:perm});}});});}
window.fbAsyncInit=function(){FB.init({appId:appConfig.appId,status:true,xfbml:true,version:'v2.5',cookie:true,logging:false});$('.login-btn').unbind('click').on('click',function(){FB.getLoginStatus(function(response){if(response.status=='connected'){var s=meow_getCookie("loginstats")
if(s==="1"){FB.api("me/picture?width=40&height=40",function(response){try{if(response&&response.data){$('.logout-btn').find("a").html('<img src="'+ response.data.url+'">&nbsp;&nbsp;Log-out')
$('.login-btn').hide()
$('.logout-btn').show()}}catch(err){}});}}else{FB.login(function(response){if(response.status=='connected'){meow_setCookie("loginstats","1")}});}});});$('.logout-btn').unbind('click').on('click',function(){meow_setCookie("loginstats","0")
$('.login-btn').show()
$('.logout-btn').hide()});FB.Event.subscribe('auth.authResponseChange',function(res){console.log(res);if(res.status=='connected'){var checkLike=function(callback){FB.api('/me/likes/941056372608848',function(response){console.log('aa likes-->'+ response.data);if(response&&response.data[0]){if($('.fb-like').length>0){$('.fb-like').hide();$('#analyze1').show();}
if($('.like-button').length>0){$('.like-button').hide();$('#analyze1').show();}
if(appConfig&&appConfig.calculate_url){if(appConfig.calculate_url.indexOf("?")==-1){appConfig.calculate_url=appConfig.calculate_url+"?x=1";}else{appConfig.calculate_url=appConfig.calculate_url+"&x=1";}}}else{if($('.fb-like').length>0){$('.fb-like').show();}
if($('.like-button').length>0){$('.like-button').show();}}
callback();});};var getPicture=function(callback){var s=meow_getCookie("loginstats");if(s==="1"){FB.api("me/picture?width=40&height=40",function(response){try{if(response&&response.data){$('.logout-btn').find("a").html('<img src="'+ response.data.url+'">&nbsp;&nbsp;Log-out')
$('.login-btn').hide()
$('.logout-btn').show()}}catch(err){}
callback();});}else{callback();}}
checkLike(function(){getPicture(function(){});});};});FB.Event.subscribe('edge.create',function(url,html_element){console.log("edge.create");if($('.fb-like').length>0){$('.fb-like').hide();$('#analyze1').show();}
if($('.like-button').length>0){$('.like-button').hide();$('#analyze1').show();}
if(appConfig&&appConfig.calculate_url){if(appConfig.calculate_url.indexOf("?")==-1){appConfig.calculate_url=appConfig.calculate_url+"?x=1";}else{appConfig.calculate_url=appConfig.calculate_url+"&x=1";}}});FB.getLoginStatus(function(response){if(response.status=='connected'){}else{console.log('logged out in fb or app not authorized, you should be redirected to facebook login if you click the button now');}});$('.fb_quiz_click').unbind('click').on('click',function(){Site.playCallback()});Site.init_facebook_quiz();FB.Event.subscribe('edge.create',function(href,widget){console.log("edge.create");$('.btn-nofan').toggleClass('btn-fan');});};(function(d){var js,id='facebook-jssdk';if(d.getElementById(id)){return;}
js=d.createElement('script');js.id=id;js.async=true;js.src="//connect.facebook.net/"+ appConfig.fb_lang+"/sdk.js";d.getElementsByTagName('head')[0].appendChild(js);}(document));},get_facebook_data:function(uids,callback,error_callback){var data=[];for(i in uids){data.push({method:'GET',relative_url:uids[i]+'?fields=id,name,first_name,last_name,gender,birthday,age_range,email,photos,picture'});data.push({method:'GET',relative_url:uids[i]+'/picture?height=320&width=320&return_ssl_resources=0&type=large&redirect=false'});}
FB.api('/','post',{batch:data.slice(0,50)},function(response){if(!response||response.error||response=="error"){if(typeof error_callback!=="undefined"){error_callback();}}else{console.log('RESPONSE VON / POST: ',response);var better_response=[];for(var i=0;i<response.length;i++){if(i%2){try{var data=$.parseJSON(response[i- 1].body);if(data.error||data=="error"){continue;}
data.fb_imgurl=$.parseJSON(response[i].body).data.url;}catch(err){if(typeof error_callback!=="undefined"){error_callback();}}
better_response.push(data);}}
console.log('result of request data: ',better_response);for(var m in better_response){console.log('batch response objs: ',better_response[m]);console.log(better_response[m].fb_imgurl);}
callback(better_response);}});},check_inputs:function(){if(appConfig.oid==1||appConfig.oid==2){if($('.my-quiz-result').length>0){var answer=$('.my-quiz-result').attr('eid');appConfig.loginURL_basicperms+='&ans='+ encodeURIComponent(answer);appConfig.loginURL_postperms+='&ans='+ encodeURIComponent(answer);appConfig.next_url+='&ans='+ encodeURIComponent(answer);}
return true;}
if($('#name_id').length>0){var show_error=function(target){if(target=='name'){$('.please_input_n').addClass('errorborder');$('.please_input_n').effect("shake",{times:2},1000);}
if(target=='birthday'){$('.please_input_bd').addClass('errorborder');$('.please_input_bd').effect("shake",{times:2},1000);}};var hide_error=function(target){if(target=='name'){$('.please_input_n').removeClass('errorborder');}
if(target=='birthday'){$('.please_input_bd').removeClass('errorborder');}};var validate_namequiz_inputs=function(){if($('#name_id').length>0){if(!Site.get_data_from_node('#name_id')){show_error('name');return false;}
hide_error('name');return true;}
return false;};if(!validate_namequiz_inputs()){return false;}
var answer=Site.get_data_from_node('#name_id');appConfig.loginURL_basicperms+='&ans='+ encodeURIComponent(answer);appConfig.loginURL_postperms+='&ans='+ encodeURIComponent(answer);appConfig.next_url+='&ans='+ encodeURIComponent(answer);return true;}
return true;},redirect_to_allauth_login:function(perms){console.log("redirect_to_allauth_login");if(Site.check_inputs()){var perm='email,public_profile,user_friends,user_birthday,user_likes';if(appConfig.perm){perm=appConfig.perm;}
console.log("perm "+ perm);if(perms=='basic'){var rediectURL='https://www.facebook.com/dialog/oauth?scope=';rediectURL+=encodeURIComponent(perm);rediectURL+='&redirect_uri=';rediectURL+=encodeURIComponent(appConfig.next_url);rediectURL+='&response_type=code&client_id=';rediectURL+=appConfig.appId;window.location.replace(rediectURL);}else if(perms=='posts'){var rediectURL='https://www.facebook.com/dialog/oauth?auth_type=rerequest&scope=';rediectURL+=encodeURIComponent(perm);rediectURL+='&redirect_uri=';rediectURL+=encodeURIComponent(appConfig.next_url);rediectURL+='&response_type=code&client_id=';rediectURL+=appConfig.appId;window.location.replace(rediectURL);}}},anim_timeout:8000,anim_end_time:0,reset_anim_end_time:function(){Site.anim_end_time=new Date().getTime()+ Site.anim_timeout;},expried_time:function(){return Site.anim_end_time- new Date().getTime();},update_tries:3,update_shared_url:function(share_url,success){var times=Site.expried_time();if(times<=0){success(share_url);}else{setTimeout(function(){success(share_url);},times);}},calculate:function(me,answer,res_id,soulmates,before,success,failure){var retry=appConfig.retry||0;if($('#name_id').length>0){answer=Site.get_data_from_node('#name_id');}
if($('.my-quiz-result').length>0)answer=$('.my-quiz-result').attr('eid');data={'retry':retry,'me':me,'answer':answer,'resid':res_id,'soulmates':soulmates};$.ajax({url:appConfig.calculate_url,type:'post',beforeSend:function(){before();},data:{'game':JSON.stringify(data)},dataType:"json",timeout:12000}).done(function(ans){if(ans.code==4000){Site.update_tries=3;success(ans.result);}else{failure();}}).fail(function(jqXHR,textStatus,error){failure(error);});},play_soulmate_quiz:function(quiz_shared_callback){Site.reset_anim_end_time();if(!Site.check_inputs())return;var candidates=[];var user_numbers={post_numbers:0,like_numbers:0,friend_numbers:0};var mephotos=[];var mepages=[];var allwords=[];var filter_words=function(str){str=str.toLowerCase();var array=str.match(/[a-z\-']+/gi);for(var i=0;i<array.length;i++){var key=array[i];if(!unusedwords[key]){!allwords[key]?allwords[key]=1:allwords[key]++;}}};var get_hotwords=function(){var hotwords=[];var nums=[];for(var k in allwords){nums.push({word:k,num:allwords[k]});}
nums.sort(function(a,b){return b["num"]- a["num"];});for(i=0;i<10&&i<nums.length;i++){hotwords.push(nums[i]);}
return hotwords;};var gather_candidates=function(id,chance){if(candidates[id]){candidates[id]['chance']+=chance;}else{var new_candidate={id:id,chance:chance};candidates[id]=new_candidate;}};var analyze_photos=function(callback){if(appConfig.perm&&appConfig.perm.indexOf('user_photos')==-1){callback();return;}
FB.api("/me/photos?fields=picture&type=uploaded&return_ssl_resources=0",{limit:20},function(response){try{if(response&&response.data){console.log("/me/photos",response);for(var img in response.data){var photo=response.data[img];mephotos.push(photo.picture);}
console.log('candidates /me/photos',candidates);}}catch(err){}
callback();});};var get_likes=function(get_likes_step,get_likes_nextid,callback){var bakurl="/me/likes?since=1420070400&limit=100";if(typeof get_likes_nextid!='undefined'&&get_likes_nextid!=''){bakurl="/me/likes?since=1420070400&limit=100&after="+ get_likes_nextid;}
FB.api(bakurl,function(response){try{if(response&&response.paging&&response.data&&response.data.length>0){user_numbers.like_numbers+=response.data.length;for(var f in response.data){if(mepages.length>=20)break;var page=response.data[f];mepages.push(page);}
if(response.paging.next&&response.paging.cursors&&response.paging.cursors.after){get_likes_nextid=response.paging.cursors.after;}}}catch(err){}
callback(get_likes_step- 1,get_likes_nextid,callback);});};var analyze_likes=function(callback){get_likes(5,'',function(get_likes_step,get_likes_nextid,myback){if(get_likes_nextid!=''&&get_likes_step>0){get_likes(get_likes_step,get_likes_nextid,myback);}else{callback();}});};var analyze_friends=function(callback){FB.api("/me/friends",function(response){try{if(response&&response.data&&response.data.length>0){user_numbers.friend_numbers=response.data.length;for(var f in response.data){gather_candidates(response.data[f].id,1);}}}catch(err){}
callback();});};var analyze_posts=function(callback){if(appConfig.perm&&appConfig.perm.indexOf('user_posts')==-1){candidates=Object.keys(candidates).sort(function(a,b){return candidates[b]['chance']- candidates[a]['chance'];});callback(candidates);return;}
FB.api('/me/posts?fields=message&since=1420070400&limit=1',function(response){try{if(response&&response.data&&response.data.length>0){user_numbers.post_numbers=response.data.length;for(var stat in response.data){var interaction=response.data[stat];if(interaction.message){filter_words(interaction.message);}}}}catch(err){}
candidates=Object.keys(candidates).sort(function(a,b){return candidates[b]['chance']- candidates[a]['chance'];});callback(candidates);});};var get_user_and_soulmate_data=function(soulmates){Site.get_facebook_data(['me'],function(response){var me=response[0];console.log(soulmates);Site.get_facebook_data(soulmates,function(response){console.log('soulmates-->'+ soulmates);console.log(response);var final_candidates=[];for(sm in response){console.log('response sm,',response[sm]);console.log('candidate name: ',response[sm].first_name);if(response[sm].id!=me.id){final_candidates.push(response[sm]);}}
console.log('start playing soulmate quiz.. ');console.log('user_image:'+ me.fb_imgurl);console.log(me);console.log('final_candidates-->'+ final_candidates);me.like_numbers=user_numbers.like_numbers;me.post_numbers=user_numbers.post_numbers;me.friend_numbers=user_numbers.friend_numbers;me.photos=mephotos;me.pages=mepages;me.hotwords=get_hotwords();var res_id=Site.select_proper_gender_result(me.gender);var cachefbstr={'me':me,'candidates':final_candidates,};meow_setCookie('meows',JSON.stringify(cachefbstr));Site.calculate(me,'',res_id,final_candidates,function(){Site.switch_calculation_animations();},function(succ_msg){Site.update_shared_url(succ_msg.url,function(url){if(typeof quiz_shared_callback=='undefined'){Site.redirect_to_result(url);}else{quiz_shared_callback(url);}});},function(error){Site.deanimate_body();$('.soulmate_click').unbind('click').on('click',function(){Site.redirect_to_allauth_login('posts');});});});});};var post_datas=function(){Site.calculate([],'',0,[],function(){},function(succ_msg){Site.update_shared_url(succ_msg.url,function(url){if(typeof quiz_shared_callback=='undefined'){Site.redirect_to_result(url);}else{quiz_shared_callback(url);}});},function(error){});};if(typeof quiz_shared_callback=='function'){post_datas();return;}
analyze_photos(function(){analyze_likes(function(){analyze_friends(function(){analyze_posts(function(soulmates){console.log(soulmates);meow_setCookie("loginstats","1")
get_user_and_soulmate_data(soulmates);});});});});},playCallback:function(){if(Site.quiz_cnt>0){$("#myModal").modal("show")
return}
if(Site.quiz_click)return;Site.quiz_click=true;FB.getLoginStatus(function(response){Site.quiz_click=false;Site.deanimate_body();var perm='email,public_profile,user_friends,user_birthday,user_likes';if(appConfig.perm){perm=appConfig.perm;}
if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.animate_body();Site.play_soulmate_quiz();},function(missing_permissions){Site.deanimate_body();console.log('permission not given, asking to permit....');FB.login(function(response){if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.animate_body();Site.play_soulmate_quiz();},function(missing_permissions){console.log("denied");Site.quiz_cnt++;$("#myModal").modal("show")});}else{Site.quiz_cnt++;}},{auth_type:"rerequest",scope:missing_permissions});});}else if(response.status=='unknown'){Site.redirect_to_allauth_login('basic');}else{FB.login(function(response){if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.animate_body();Site.play_soulmate_quiz();},function(missing_permissions){console.log("denied");Site.quiz_cnt++;$("#myModal").modal("show")});}else{Site.quiz_cnt++;}},{scope:perm});}});},init_facebook_quiz:function(){if($('.fb_quiz_click').length>0){if(appConfig.start_quiz){Site.animate_body();FB.getLoginStatus(function(response){var perm='email,public_profile,user_friends,user_birthday,user_likes';if(appConfig.perm){perm=appConfig.perm;}
if(response.status=='connected'){Site.check_for_permission(perm,function(){Site.play_soulmate_quiz();},function(){Site.deanimate_body();$('.fb_quiz_click').unbind('click').on('click',function(){Site.playCallback()});});}else if(response.status=='unknown'){Site.deanimate_body();console.log('11 unknown logged out in fb or app not authorized, you should be redirected to facebook login if you click the button now');$('.fb_quiz_click').unbind('click').on('click',function(){Site.redirect_to_allauth_login('basic');});}else{Site.deanimate_body();console.log('logged out in fb or app not authorized, you should be redirected to facebook login if you click the button now');$('.fb_quiz_click').unbind('click').on('click',function(){Site.playCallback()});}});}else{$('.fb_quiz_click').unbind('click').on('click',function(){Site.playCallback()});}}},init_typein_quiz:function(){if($('.typein_quiz_click').length>0){$('.typein_quiz_click').unbind('click').on('click',function(){Site.play_typein_quiz();});$('input[name=answer]').keypress(function(e){if(e.which==13){Site.play_typein_quiz();}});}},play_typein_quiz:function(){var show_error=function(target){if(target=='name'){$('.please_input_n').addClass('errorborder');$('.please_input_n').effect("shake",{times:2},1000);}
if(target=='birthday'){$('.please_input_bd').addClass('errorborder');$('.please_input_bd').effect("shake",{times:2},1000);}};var hide_error=function(target){if(target=='name'){$('.please_input_n').removeClass('errorborder');}
if(target=='birthday'){$('.please_input_bd').removeClass('errorborder');}};var validate_birthday=function(birthday){var year=birthday.split('-')[0];if(year.length>4||+year<=1900){return false;}
return true;};var validate_namequiz_inputs=function(){if($('#birthday_id').length>0){if(!validate_birthday(Site.get_data_from_node('#birthday_id'))){show_error('birthday');console.log('birthday error');return false;}
hide_error('birthday');return true;}else if($('#name_id').length>0){if(!Site.get_data_from_node('#name_id')){show_error('name');console.log('name error');return false;}
hide_error('name');return true;}
return false;};if(!validate_namequiz_inputs()){console.log('validation didnot pass, deanimating the body again');return;}
console.log('validation passed');var res_id=0;var answer=Site.get_data_from_node('#name_id');var birthday=Site.get_data_from_node('#birthday_id');Site.animate_body();if(birthday!==""){var me={'birthday':birthday};}else{var me={};}
Site.calculate(me,answer,res_id,[],function(){console.log('switching calculation steps');Site.switch_calculation_animations();},function(ans){Site.update_shared_url(ans.url,function(url){Site.redirect_to_result(url);});},function(error){Site.deanimate_body();});},shared_clicked:function(){$.ajax({url:appConfig.shared_click_url,type:'get',data:{'id':appConfig.id,'t':new Date().getTime()},dataType:"json",}).done(function(ans){}).fail(function(jqXHR,textStatus,error){});},test_clicked:function(){$.ajax({url:appConfig.click_url,type:'get',data:{'id':appConfig.id,'t':new Date().getTime()},dataType:"json",}).done(function(ans){}).fail(function(jqXHR,textStatus,error){});},newwindow:null,openShareDialog:function(){var ua=navigator.userAgent;Site.shared_clicked();var left=(screen.availWidth- 572)/ 2;
var top=(screen.availHeight- 567)/ 2;
var shareurl=$('.share_in_fb_click').data('sharelink');var sharepicture=$('.img-responsive').data('sharepicture');Site.update_tries=3;Site.update_shared_url(shareurl,function(url){});var newurl='https://www.facebook.com/sharer/sharer.php?u='+ encodeURIComponent(shareurl);if(ua&&ua.indexOf("FB")===-1){FB.ui({method:'share',redirect_uri:appConfig.forward_link,href:shareurl,mobile_iframe:true,},function(response){console.log('share result-->'+ response);window.location.href=appConfig.forward_link;});}else{FB.ui({method:'share',redirect_uri:appConfig.forward_link,href:shareurl,mobile_iframe:true,},function(response){console.log('share result-->'+ response);window.location.href=appConfig.forward_link;});}},share_listener:function(){$('.share_in_fb_click').unbind('click').on('click',function(){Site.openShareDialog();});$('.share_in_tw_click').unbind('click').on('click',function(){window.open('http://twitter.com/share?url='+ encodeURIComponent($(this).data('sharelink')),'twitter-share-dialog','width=572,height=467');});$('.share_in_fb_click_no_redirect').unbind('click').on('click',function(){$('.ll-share').toggleClass('hidden');$('.op-50').toggleClass('op-100');window.open('https://www.facebook.com/sharer/sharer.php?u='+ encodeURIComponent($(this).data('sharelink')),'facebook-share-dialog','width=572,height=567');});},common_listeners:function(){var slide=function(css_class){$(css_class).delay(50).show().animate({opacity:1,top:"45px"},'fast');};slide(".ll-like");if($("#divtoBlink").length){setInterval(function(){$("#divtoBlink").toggleClass("backgroundRed");},300);}
$('.ll-close').unbind('click').on('click',function(){$('.ll-like').toggleClass('hidden');$('.llayer').toggleClass('hidden');$('.ll-share').toggleClass('show-res');$('.op-50').toggleClass('op-100-res');slide(".ll-share");});$('.ll-close2').unbind('click').on('click',function(){$('.ll-share').toggleClass('hidden');$('.op-50').toggleClass('op-100');});},animate_body:function(){$('.fb-comments').hide();$('.hidablead').hide();$('.randgame').show();$("html, body").animate({scrollTop:0},"slow");$('.jumbotron').hide();$('#loader').show();if($('.full_loading').length>0)$('.full_loading').show();},deanimate_body:function(){console.log('deanimating ...');if($('.full_loading').length>0)$('.full_loading').hide();$('#loader').hide();$('.jumbotron').show();$('#step1').hide();$('#step2').hide();$('.fb-comments').show();$('.hidablead').show();$('.randgame').show();},redirect_to_result:function(url){console.log(url);window.location.href=url;},get_data_from_node:function(selector){return $.trim($(selector).val());},get_random_result_from:function(results){return results[Math.floor(Math.random()*results.length)];},select_proper_gender_result:function(gender){var res_id=0;return res_id;},switch_calculation_animations:function(){$('#step1').hide();$('#step2').show();},rand_game:function(){$.ajax({url:appConfig.rand_game_url,type:'get',dataType:'json',data:{t:Math.random()},timeout:12000}).done(function(ans){if(ans.code==4000&&ans.result&&ans.result.length>0){var data=ans.result;if($('.randgame'))$('.randgame').empty();if(data.length>3){$('#lefto-oct').empty();}
var i=0;for(i=0;i<24&&i<data.length;i++){var g=data[i];if(cureva&&cureva!=""){if(g.testurl.indexOf("?")==-1){g.testurl=g.testurl+"?eva="+ cureva;}else{g.testurl=g.testurl+"&eva="+ cureva;}}
var item='<div class="meow-custom-xs-12 meow-custom-sm-4 more-quizzes padding-spa-15 a-ac"><a href="'+ g.testurl+'"><div class="cross-item a-ac" style="min-height:200px;"><div class="more-quizzes-cropped"><div class="item-img" style="background: url('+ g.cover_pic+') center center;background-size:cover;"></div></div><span>'+ g.title+'</span> </div></a></div>';if($('.randgame'))$('.randgame').append(item);}
Site.next_page(24,function(){});}}).fail(function(jqXHR,textStatus,error){if(typeof failure=='function')failure(error);});},showLoadingItem:function(){},hideLoadingItem:function(){},next_page:function(pagesize,callback){pagesize=pagesize||24;if(!Site.fetch&&appConfig.pageIndex<appConfig.totalPage){Site.fetch=true;$.ajax({url:appConfig.list_game_url,type:'get',dataType:'json',data:{page:appConfig.pageIndex,t:Math.random(),'pagesize':pagesize},beforeSend:function(){Site.MORE_PANEL.remove();if($('.randgame').text()==''||$('.randgame').html()==''){Site.hideLoadingItem();}else{Site.showLoadingItem();}},complete:function(){Site.hideLoadingItem();Site.fetch=false;},error:function(){Site.hideLoadingItem();Site.fetch=false;},timeout:12000}).done(function(ans){if(ans.code==4000&&ans.result&&ans.result.list){var pageinfo=ans.result.pageinfo;appConfig.totalPage=pageinfo.totalPage;appConfig.pageIndex=pageinfo.pageIndex+ 1;appConfig.totalCount=pageinfo.totalCount;var data=ans.result.list;for(var i in data){if(i>2){var g=data[i];if(cureva&&cureva!=""){if(g.testurl.indexOf("?")==-1){g.testurl=g.testurl+"?eva="+ cureva;}else{g.testurl=g.testurl+"&eva="+ cureva;}}
var item='<div class="meow-custom-xs-12 meow-custom-sm-4 o-oct meow-custom-md-12 padding-spa-15 meox"><a href="'+ g.testurl+'"><div class="cross-item a-ac"><div class="o-oct-cropped"><div class="item-img" style="background: url('+ g.cover_pic+') center center;background-size:cover;"></div></div><span>'+ g.title+'</span> </div></a></div>';$('#lefto-oct').append(item);}}
if(appConfig.pageIndex<appConfig.totalPage){$('#lefto-oct').append(Site.MORE_PANEL);}}
Site.fetch=false;if(typeof(callback)!='undefined')callback();}).fail(function(jqXHR,textStatus,error){if(typeof failure=='function')failure(error);Site.fetch=false;});}},fetch:false,MORE_PANEL:$('<div class="buttons-layout loading-layout"><div class="row"><span class="drag-font"><strong>Drag Up to Show More</strong></span></div><div></div></div>'),scroll_listener:function(){$(document).unbind("scroll");$(document).bind("scroll",function(event){if($(document).scrollTop()+ $(window).height()>=$(document).height()- 50){Site.next_page();}});}}
$(function(){if(cureva){cureva=encodeURIComponent(cureva);}
Site.init();if(appConfig.oid&&appConfig.oid==2){Site.test_clicked();}
if(appConfig.rand_game){Site.rand_game();}
if(typeof addQuizItemWatch!='undefined'){addQuizItemWatch();}
$("#share").unbind("click").on("click",function(){Site.openShareDialog()})})
function meow_getCookie(name){var arr,reg=new RegExp("(^| )"+ name+"=([^;]*)(;|$)");if(arr=document.cookie.match(reg))return unescape(arr[2]);else
return'';}
function meow_setCookie(name,value){var Days=1;var exp=new Date();exp.setTime(exp.getTime()+ Days*24*60*60*1000);document.cookie=name+"="+ escape(value)+";expires="+ exp.toGMTString()+'; path=/';}