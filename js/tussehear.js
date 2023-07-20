openurl = "https://www.facebook.com/sharer/sharer.php?u=" + domain + "/" + fldname + "/app.php?fbid="  + fbid;


function displayresultskipsave(){

 window.location.href="result.php?fbid="  + fbid;

}


function tussehear(){
ff = window.open(openurl, "popup", "width=700,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0");
   
 var interval = window.setInterval(function () {
setTimeout(function(){
displayresultskipsave();
}, 10000);
if (ff.closed !== false) {
window.clearInterval(interval);
displayresultskipsave();
}
}, 300);

} 