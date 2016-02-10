<head>
<style>
*{  
  margin:0;
  padding:0;
}

body{ 
  background-color:#d34836;
  font-family:helvetica;
}

a{
  display:block;
  color:#ad5482;  
  text-decoration:none;
  font-weight:bold;
}
.module{
  position:relative;
  height: 90%;
  width:600px;
  margin-left:auto;
  margin-right:auto;
  margin-top:2%;
  border-radius:5px;
  background:RGBA(255,255,255,1);
  -webkit-box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .45);        
  box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .45);
  
}
</style>
</head>
<div class="module">
<div style="padding: 20px;">
<?php
session_start(); 
if(empty($_SESSION['password']) && empty($_SESSION['username']))
      {
           echo "You Have Already been Logged Out.</br></br> If you Want to Login Again Please use the below Link .</br></br></br>";
           echo "<a href='http://localhost/xampp/ProjectX/SigninPage.php'>Login to Garage Connect</a>";
      }
	  else 
	  {
		  $_SESSION['username']=NULL;
		  $_SESSION['password']=NULL;
		  unset($_SESSION['username']);
		  unset($_SESSION['password']);
echo "Thank you for using Garage Connect .</br></br> You Have Been Successfully Logged Out now. </br></br></br>";
echo "<a href='http://localhost/xampp/ProjectX/SigninPage.php'>Login to Garage Connect</a>";
      }
?>
</div>
</div>