
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Managers Dashboard</title>
  <style>
	* {
  box-sizing: border-box;
}
  body {
  font-family: Roboto,Roboto Draft,Arial,Open Sans;
  font-size: 14px;
  line-height: 1.42857143;
  color:#0e1703;
  background-color: #efffee !important;
  min-height: 100%;
  top: 0px;
  margin: 0px;
}

#leftsidebar {
  position: fixed;
  background-color: #eee;
  border-right: 1px solid #ccc;
  width:16.4%;
  padding-right: 0px;
  height: auto;
  max-width: 270px;
  overflow: hidden;
  border: none;
  top: 0;
  bottom: 0;
  left: 0;
  z-index:-999;
}
#menu {
  background-color: #2c3e50;
  position: absolute;
  padding: 0;
  width:16.4%;
  top: 112px;
  bottom: 0;
  left: 0;
  width:100%;
  max-width: 270px;
  height: 100%;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
  z-index: 10000;
  transform: translate(0%, 0px);
  transition: all 200ms ease-in-out;
}

#menu ul {
  color: white;
  margin: 0;
  padding: 0;
  list-style: none;
}

#menu ul li {
  padding: 10px 20px 15px 10px;
  transition: all 500ms ease-in-out;
  border-bottom: 0;
}

#menu ul li:hover {
  color: #bdc3c7;
  cursor: pointer;
}
#menu ul li.active{
border-left:3px solid #fff;
border-radius:none;
transition: all 100ms ease-out;
-webkit-transform: translate(0.6%, 0px);
transform: translate(0.6%, 0px);
}
#menu ul li a {
  display: block;
  color:#fff;
  height: 100%;
  padding: 10px 12px;
  font-weight: bold;
  text-decoration: none;
}

#menu.active {
  -webkit-transform: translate(0%, 0px);
  transform: translate(-150%, 0px);
  transition: all 200ms ease-in-out;
}

.fixed {
top:0 !important;
}
#container {
  background-color: #efffee !important;
  position: relative;
  width: 83.33333333%;
  height: auto;
  min-height: 530px;
  float: left;
  overflow: hidden;
  display: table;
  padding: 20px;
  margin: 0;
  margin-left: 16.5%;
  z-index: -1;
}
.navbar {
  background-color: #efefef;
  padding: 10px;
  border-bottom: 1px solid #eee;
  min-height: 50px !important;
  width: 100%; 
}
.container-fluid {
  background-color: #0091EA;
  padding: 7px;
  height: 70px !important;
}

#cnfmbox {
  display:none;
  position: absolute;
  background:#f9edbe;
  border: 1px solid #F0C369;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  width: 400px;
  max-width: 450px;
  padding: 5px;
  top: .5%;
  left: 27.5%;
  border-radius: 2px;
}

#cnfmbox p {
margin: 0;
line-height: 1.2;
color: #222;
text-align: center;
font-weight: 700;

}
#ajaxContent {
  background-color:#efffee !important;
  padding: 12px;
  min-height: 520px;
  margin-top: 1%;
  margin: -1%;
}
.loading {
  position: absolute;
  top: 40%;
  left: 42.5%;
  opacity: 0.6;
}
.navbar-header {
  overflow: auto;
  width: 20%;
  float: left;
  margin-top: -12px;
}
.navbar-brand {
  font-size: 24px;
  font-weight: bold;
  color: #fff !important;
  text-decoration: none;

}

input#s { 
  position: relative;
  line-height: 25px;
  z-index: 1;
  box-sizing: border-box;
  width: 530px;
  font-size: 15px;
  padding: 7px 60px 7px 10px;
  color: rgba(0,0,0,0.54);
  margin: 0 !important;
  border: none;
  box-shadow: 0 1px 0 1px rgba(0, 0, 0, 0.2);
  -webkit-appearance: none !important;
  border-radius: 2px;
  font-family: Roboto,RobotoDraft,open sans,Arial;
  height: 35px;
  font-weight:bold;
} 
.search-input.form-search {   
  overflow: auto;
  width: 40%;
  float: left;
  left: 300px;
  position: absolute;
  top: 1%;
  overflow-x: hidden;
}

#livesearch {
  display:none;
  z-index: 1;
  width: 530px;
  padding: 10px;
  background: #fff;
  border: 1px solid #ccc;
  border-top-color: #d9d9d9;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  cursor: default;
  border-radius: 2px;
}
#livesearch a {
text-decoration:none;
font-weight:bold;
color:#000;
}
#livesearch a:hover  {
text-decoration:none;
font-weight:bold;
color:#000;
background-color:#eee;
}
.search-input.form-search .fa-search { margin-left: -28px; z-index: 10; position: relative; font-size: 16px; }
#search {overflow:hidden;}
    </style>
<script src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script>
$(document).ready(function(){
loadPage('activityPage.php',1);
 $(".sidebar-toggle").click(function() {
  $("#menu").toggleClass("active");
});

$(".sidebar-toggle").click(function() {
  $("#trigger").toggleClass("active");
});
});
$(document).scroll(function () {
    var y = $(document).scrollTop(),
        header = $("#menu");
    if (y >= 110) {
        header.addClass('fixed');
    } else {
        header.removeClass('fixed');
    }
});
</script>
<script>
function loadPage(urlToLoad,index) {  

// Load Page Fragment using AJAX Request
$.ajax({
  type: 'POST',
  url:urlToLoad,
  beforeSend:function(){
    // Show loading image while it is fetching Data from Serverc
    $('#ajaxContent').html('<div class="loading"><img src="http://localhost/xampp/ProjectX/Flip%20Flop.gif" alt="Loading..." /></div>');
  },
  success:function(data){
    // On Successful request; do something with the data
	$('#ajaxContent').empty();
    $('#ajaxContent').html(data); // I am Just Displaying Data here
	$('#cnfmbox').fadeIn("fast").delay(300).fadeOut("fast"); // Confirming things with the Manager
	$('.msg').html("Page Loading Successful ... "); // Status Message to the Manager
	$('.msg').append('<span class="close_box" style="font-weight:500">[close]</span>'); // Adding Close Button ...
	$(document).on('click','.close_box',function(){$('.msg').parent().toggle();}); // Close the Msg ...
    $("#menu ul li:nth-child("+index+")").addClass("active").siblings().removeClass('active'); //On Click Tab Change Event
  },
error:function(xhr,status){
    // If failed request; give feedback to user
    $('#cnfmbox').fadeIn("fast").delay(1500).fadeOut("fast"); // Confirming things with the Manager
	$('.msg').html("Oops "+xhr.status+"-"+xhr.statusText+" Please Try Again ..."); // Status Message to the Manager
	$('.msg').append('<span class="close_box" style="font-weight:500">[close]</span>'); // Adding Close Button ...
	$(document).on('click','.close_box',function(){$('.msg').parent().remove();}); // Close the Msg ...
  }
});
}
</script>
<script>
function showResult(str) {
  if (str.length==0) { 
    $(function(){
    $("#livesearch").hide();}); // Hide the Live Results if Length is Zero
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
	$(function(){$("#livesearch").show();}); // Show Live Results Only if Successful ... 
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
	
</head>
<body>

<!-- HEADER -->
    <div class="container-fluid">
        <div class="navbar-header">
           <h2 ><a style="position: absolute;left: 12px;top: 2%;" class="navbar-brand" href="http://localhost/xampp/ProjectX/MainPage.php">Garage Connect</a></h2>
        </div>
		<div style='margin-left:85%;'>
		click here to <a href="SignoutPage.php">LogOut</a> 
		</div>
    </div>
	 
<!-- NAVBAR -->
<div class="navbar">
    <a class="sidebar-toggle" href="#"><img style="margin-left: 10px;" src="http://localhost/xampp/ProjectX/hamburger.svg" alt="Slider" /></a>
</div>



<!--MainPage Wrapper -->
<div id="Wrapper">

<!-- SIDEBAR Wrapper-->
<div id="leftsidebar">
<div id="menu">
  <ul>
    <li><a onclick="loadPage('activityPage.php',1);" href="javascript:void(0)">List of Activity </a></li>
	<li><a onclick="loadPage('updatePage.php',2);" href="javascript:void(0)">Update Information</a></li>
    <li><a onclick="loadPage('statusPage.php',3);" href="javascript:void(0)">Status Information</a></li>
    <li><a onclick="loadPage('breakdownPage.php',4);" href="javascript:void(0)">Breakdown Request</a></li>
	<li><a onclick="loadPage('sparecheckPage.php',5);" href="javascript:void(0)">Spare Availability</a></li>
    <li><a onclick="loadPage('manpowerPage.php',6);" href="javascript:void(0)">Manpower Activity</a></li>
	<li><a onclick="loadPage('paymentPage.php',7);" href="javascript:void(0)">Payment Settings</a></li>
	<li><a onclick="loadPage('ProfilePage.php',8);" href="javascript:void(0)">Profile Settings</a></li>
  </ul>
</div>
  </div>
  
<!-- CONTENT Wrapper-->
<div id="container">
            <div id="ajaxContent">
			</div>
			<div id="cnfmbox"><p class="msg"></p></div>
</div>
<div>
</body>
<!-- SEARCHBAR -->
<div class='search-input form-search'>
<form action='/search' method='get'>
<input id='s' name='q' onblur='if (this.value == &apos;&apos;) {this.value = &apos;Search Managers Dashboard&apos;;}' onfocus='if (this.value == &apos;Search Managers Dashboard&apos;) {this.value = &apos;&apos;;}' type='text' value='Search Managers Dashboard' onkeyup="showResult(this.value)" autocomplete="off" />
<div id="livesearch" style="background:#fff;clear:both;max-height: 295px;overflow-y: hidden;"></div>  
  </form>
</div>
</html>
