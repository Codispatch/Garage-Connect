<?PHP
require_once("session.php");
if(!checkSession())
{
    RedirectTo("http://localhost/xampp/ProjectX/SigninPage.php");
    exit;
}	
?>
<style type="text/css">
.box {
  color: #000;
  font-weight: bold;
  font-size: 14px;
}
.Lbutton{
  color: #6e6e6e;
    font: bold 12px Helvetica, Arial, sans-serif;
    text-decoration: none;
    padding: 7px 12px;
    position: relative;
    display: inline-block;
    text-shadow: 0 1px 0 #fff;
    -webkit-transition: border-color .218s;
    -moz-transition: border .218s;
    -o-transition: border-color .218s;
    transition: border-color .218s;
    background: #f3f3f3;
    background: -webkit-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    border: solid 1px #dcdcdc;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-right: 10px;
}

.Lbutton:hover{
 color: #333;
    border-color: #999;
    -moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2); 
	-webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}
</style>
<p id="locationdata" class="box" >Use your Current Location to get Garage Details .</p>
<p class="box" >Note : Location Tracking Request will be prompted .</p>
 
<button class="Lbutton" onclick="getLocation()">Get Nearest Garage Locations</button>
<br></br>
<p class="box" >Expected Date : July 1st 2015</p>
<div id="mapholder" style="margin-top:-12%;margin-left: 40%;"></div>
<script>
var x = document.getElementById("locationdata");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
		$('#cnfmbox').fadeIn("fast").delay(1500).fadeOut("fast"); // Confirming things with the Manager
        $('.msg').html("Geolocation is not supported in this Browser, Please Update it"); // Status Message to the Manager
    }
}
function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=10&scale=2&size=320x250&sensor=false&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7CKarkala&markers=size:mid%7Ccolor:0xff0000%7Clabel:2%7Cmangalore&markers=size:mid%7Ccolor:0xff0000%7Clabel:3%7Cnitte&markers=size:mid%7Ccolor:0xff0000%7Clabel:4%7CManipal";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
		    $('#cnfmbox').fadeIn("fast").delay(1500).fadeOut("fast"); // Confirming things with the Manager
            $('.msg').html("Allow/Deny Location Request is denied for Geolocation Tracking."); // Status Message to the Manager
            break;
        case error.POSITION_UNAVAILABLE:
		    $('#cnfmbox').fadeIn("fast").delay(1500).fadeOut("fast"); // Confirming things with the Manager
            $('.msg').html("Location Information is Unavailable, Please Try Later"); // Status Message to the Manager
            break;
        case error.TIMEOUT:
		    $('#cnfmbox').fadeIn("fast").delay(1500).fadeOut("fast"); // Confirming things with the Manager
            $('.msg').html("The request to get user location Timed Out, Please Try Again"); // Status Message to the Manager
            break;
        case error.UNKNOWN_ERROR:
		    $('#cnfmbox').fadeIn("fast").delay(1500).fadeOut("fast"); // Confirming things with the Manager
            $('.msg').html("Oops ,An unknown error occurred., Please Try Again"); // Status Message to the Manager
            break;
    }
}
</script>
