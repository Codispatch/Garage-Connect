<html>
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
  margin-top:40px;
  text-align:center;
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

.form{
  float:left;
  height:90%;
  width:100%;
  box-sizing:border-box;
  padding:40px;
}

.textbox{
  height:50px;
  width:49%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 2px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
}

.textbox:focus{
  outline:none;
   border:rgba(24,149,215,1) 2px solid;
   color:rgba(24,149,215,1);
}

.button{
  height:50px;
  width:100%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 0px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
  background:#90c843;
  color:#FFF;
  font-weight:bold;
  font-size: 12pt;
  transition:background .4s;
  cursor:pointer;
}

.button:hover{
  background:#80b438;
  
}
</style>
</head>
<body>
  <div class="module">  
 <div style="color:#d34836;padding-left: 35px;padding-top:15px;margin-bottom: -30px;">All Fields are Required (*)</div>
<form class="form" name="registration" method="post" action="registration.php" enctype="multipart/form-data" >
<input type="text" name="username" value=""  placeholder="Username" class="textbox" style="width:100%" >
<input type="password" name="password" value=""  placeholder="Enter Password (Must be Numbers)" class="textbox" > <input type="password" name="repassword" value=""  placeholder="Confirm Password (Must be Numbers)" class="textbox" >
<input type="text" name="phone" value=""  placeholder="Enter Phone Number (eg: 897*****29)" class="textbox" style="width:100%">
<input type="text" name="firstname" value=""  placeholder="Enter First Name (eg: Ram)" class="textbox" > <input type="text" name="lastname" value=""  placeholder="Enter Last Name (eg: Shriram)" class="textbox" >
<input type="text" name="email" value=""  placeholder="Enter Email Address (eg: username@domain.com)" class="textbox" style="width:100%">
<div style="width:100%">
Male :<input type="radio" name="gender" value="male"  placeholder="Male">
Female :<input type="radio" name="gender" value="female"  placeholder="Female">
</div>
</br>
<div style="width:100%">
Upload Profile Photo: <input type="file" name="image" /> 
</div> 
</br></br>
<input type="submit" name="submit" value="Register to Garage Connect" class="button">
</form>
  </div>
</body>
</html>