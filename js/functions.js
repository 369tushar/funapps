// JavaScript Document
$(document).ready(function() {
    $("#en_title_tooltip").mouseover(function() { $(".tooltip-custom").removeClass("hide");})
    $("#en_title_tooltip").mouseout(function() { $(".tooltip-custom").addClass("hide"); });
    
    $("#fb_login_start").click(function()
    {
        $("#fb_login_start i").removeClass("fa-facebook-square");
        $("#fb_login_start i").addClass("fa-spinner fa-pulse fa-3x fa-fw");
        $("#fb_login_start i").css({ "padding-right":"0" });

        $("#fb_login_start span").text("Loading..Please Wait!");
        $("#fb_login_start").attr("disabled","disabled");
    });
    
    
});

function autoshare() {
	if (document.cookie.indexOf("cid1") >= 0) { 
		document.cookie = "cid1=2; path=/; domain=.fruityfifty.com; expires=Thu, 18 Dec 2013 12:00:00 UTC";
	} else {
		document.cookie = "cid1=1; path=/; domain=.fruityfifty.com";
	}
}


function show_pp_menu()
{

	if(document.getElementById('pp_menu').style.display == "none")

	{

		document.getElementById('pp_menu').style.display = "inline-block";

	}

	else

	{

		document.getElementById('pp_menu').style.display = "none";

	}

}

function record_activity(category,action,label)
{
    try{
        //category,action,label
        dataLayer.push({
          'gaEventLabel': label,
          'gaEventAction': action,
          'gaEventCategory': category,
          'event': 'gaTriggerEvent'
        });
    }
    catch(err)
    {}
} 



function check_name_feild() {

	if(document.getElementById('name_feild').value == "")

	{

		document.getElementById('name_feild').style.borderColor = "#900"

		return false;

	}

	else

	{

		return true;

	}

}

function delayed_popup_result(folk)

{

	if(document.getElementById('delayed-popup-content'))

	{

		if(folk == 1)

		{

			//document.getElementById('delayed-popup-content').style.display = "block";

			//document.getElementById('delayed-popup-bg').style.display = "block";

		}

		else if(folk == 0)

		{

			//document.getElementById('delayed-popup-content').style.display = "none";

			//document.getElementById('delayed-popup-bg').style.display = "none";

		}

	}

}



function show_lang_dropdown()

{

	if(document.getElementById('more_lang_dropdown').style.display == "none")

	{

		document.getElementById('more_lang_dropdown').style.display = "inline-block";

		document.getElementById('more_lang_button').className = "auto-lang-button auto-lang-button-border";

	}

	else

	{

		document.getElementById('more_lang_dropdown').style.display = "none";

		document.getElementById('more_lang_button').className = "auto-lang-button";

	}

}

function toggle_lang(lang) {

	var e = document.getElementById('language-selector-dd').value;

	window.location = "http://"+e+".fruityfifty.com";

}


function related_app_popsup(act)

{

	if(act == "open")

	{

		document.getElementById('related_app_popup_bg').style.display = "block";

		document.getElementById('related_app_popup').style.display = "block";

	}

	if(act == "close")

	{

		document.getElementById('related_app_popup_bg').style.display = "none";

		document.getElementById('related_app_popup').style.display = "none";		

	}

}

function opennew(url)

{

newwindow=window.open(url,'mywindow','menubar=1,resizable=1,width=870,height=390');

	if (window.focus) {newwindow.focus()}

	return false;

}





/*

$(document).ready(function() {

	$('.popup-with-zoom-anim').magnificPopup({

		type: 'inline',

		fixedContentPos: false,

		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,

		preloader: false,

		

		midClick: true,

		removalDelay: 300,

		mainClass: 'my-mfp-zoom-in'

	});

	

});

$(window).load(function() {

    

                var clientText = new ZeroClipboard( $("#text-to-copy"), {

              moviePath: "http://static.swf.fruityfifty.com/ZeroClipboard.swf",

              debug: false

            } );

            clientText.on( "load", function(clientText)

            {

                $('#flash-loaded').fadeIn();

                clientText.on( "complete", function(clientText, args) {

                    clientText.setText( args.text );

                    $('#text-to-copy-text').fadeIn();

                    document.getElementById('copied_status_ok').style.display='block';

				

                } ); 

            } );

        });

        

if(document.getElementsByClassName('popup-with-zoom-anim') && document.getElementsByClassName('fbshare'))

{

    

    var anc = document.getElementsByClassName("popup-with-zoom-anim")[0];

    if(anc)

    {

        var str = anc.getAttribute('onclick');

        var res = str.replace("return false;", "")+'return false;'; 

    }

    

    

    if(!FlashDetect.installed)

    {

        document.getElementsByClassName('popup-with-zoom-anim')[0].className = 'fbshare fr tooltip-right';

        document.getElementsByClassName('fbshare')[0].setAttribute("onclick", res);

        document.getElementsByClassName('fbshare')[0].href = 'javascript:void(0);';

    }

}

*/





function loadMore_Apps()

{

	var result = "";

	var last_href = "";

	console.log("More loaded");

	

	//Getting Next URL

	var last_href = $(".fa-infinite-scroller a.more_apps_scroller").attr('href');

	console.log(last_href);

	$(".fa-infinite-scroller a.more_apps_scroller").remove();

	

	//Loading Image

	var fa_loading = '<div class="small-box-iflow fa-loading"><img src="http://www.fruityfifty.com/templates/leechi/images/fa_loading.gif"></div>';

	

	if(last_href)

	{



		$.ajax({

		   type: "GET",

		   url: last_href,

		   success:function(result) {

				if(result)

				{

					$(".fa-infinite-scroller").append(fa_loading);

					setTimeout(function(){

					$(".fa-infinite-scroller .fa-loading").remove();

					$(".fa-infinite-scroller").append(result);

					}, 3000);

				}

			}

		});   

	   var result = "";

	   var last_href = "";

	}

	else

	{

		$(".fa-infinite-scroller .fa-loading").remove();

	}

	setTimeout(function(){ $(window).bind('scroll', bindScroll); }, 1000);

}





//Suggestion Box

function load_suggestion_captcha()

{

    grecaptcha.render('captcha_container', 

    {

      'sitekey' : '6LeqxgoTAAAAAMViBktZ_BjHmUOHhqlLZorf8tqA',

      'callback' : verifyCallback,

      'theme' : 'light'

    });

}

var verifyCallback = function(response) 

{

}

function load_suggestions_box(action) 

{

    if(action == '1')

    {

        document.getElementById('suggestions-popup-bg').style.display = "block";

        document.getElementById('suggestions-popup-content').style.display = "block";

        load_suggestion_captcha();

    }

    else

    {

        document.getElementById('suggestions-popup-bg').style.display = "none";

        document.getElementById('suggestions-popup-content').style.display = "none";

    }

}



function submit_suggestions_form(home_link) 

{

    $("#suggestion_button_box").html('<i class="fa fa-spinner fa-spin"></i> Please Wait');

    var form_data = $("#suggestions_form").serialize();

    $.ajax({

			url:  home_link+"/suggestions_submittions.php",

			type: "POST",

            data: form_data,

			success:function(response)

			{

                if(response == "1")

				{

				    $("#main_suggestion_box").css("color", "#004F00");

				    $("#main_suggestion_box").html('<i class="fa fa-check"></i> Thanks For Your Suggestion!');

                    setTimeout(function(){ load_suggestions_box('0'); }, 2000);

                }

                else

                {

                    $("#suggestion_info_box").css("color", "#AA0000");

                    $("#suggestion_info_box").html('<i class="fa fa-times"></i> '+response);

                    $("#suggestion_button_box").html('<button type="button" onclick="submit_suggestions_form()" name="submit" class="fbshare fr tooltip-right"><i class="fa fa-lightbulb-o"></i><strong> Send My Idea!</strong></button>');

                }

			}

	});

}









function bindScroll(){

   if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {

       $(window).unbind('scroll');

       loadMore_Apps();

   }

}



$(window).scroll(bindScroll);