openurl = "https://www.facebook.com/sharer/sharer.php?u=" + domain + "/" + fldname + "/app.php?fbid="  + fbid;


function rawurlencode(str) {
    str = (str+'').toString();        
    return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
                                                                                    replace(/\)/g, '%29').replace(/\*/g, '%2A');
}

if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
        var x = 0;
        var intervalId = setInterval(function(){
          displayresultskipsave();

        }, 3000);
}

function displayresultskipsave(){
    
var counurl = domain + "/" + fldname + "/app.php?fbid="  + fbid;
counturl = rawurlencode(counurl);

$.ajax({
                    type:'GET',
                    url:"http://graph.facebook.com/" + counturl,
                    dataType:'JSON',
                    success:function(json){
var rescount = json.share.share_count;
if(rescount > 0){
    window.location = "result.php?fbid="  + fbid;
}else{
$('#before_share').hide();
$('#share_error').show();
}
                    }

});
 return false;  
}


function tussehear(){
ff = window.open(openurl, "popup", "width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0");

 var interval = setInterval(function () {
setTimeout(function(){
displayresultskipsave();
}, 60000);
if (ff.closed !== false) {
clearInterval(interval);
displayresultskipsave();
}
}, 300);

} 