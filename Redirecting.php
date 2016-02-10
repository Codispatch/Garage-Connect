<?php 
// Initialize a session:
session_start();
include ('connect.php');
if (isset($_POST['submitted'])) {
	
 $error = array();//This array will store all the error messages

 // Validate the User Input Email .
 if (empty($_POST['email'])) { //if the email supplied is empty
 $error[] = 'Please Enter your Email';
 } 
 else { //if the email supplied is valid 
 if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
 $email = $_POST['email'];
 } 
 else { //the email supplied is invalid
 $error[] = 'Your Email Address is invalid  ';
 }
}
// Validate the User Input Password .
if (empty($_POST['password'])) { //if the Password supplied is empty.
 $error[] = 'Please Enter Your Password ';
 } 
 else { //if the Password supplied is Valid.
 $password = $_POST['password'];
 $enpassword =md5($password); // MD5 - Encrypt the Password. Then $enpassword is used to check the password stored in the Database.
 }
 
//if there is no Error Found .
 if (empty($error))
 {
 $query = "SELECT * FROM profile WHERE (email='".$email."' AND password='".$enpassword."')";
 $result = mysqli_query($connection,$query);
 
 if(!$result){//If the Query is Not Processed
 echo 'Query Not Processed';
 }

 if (@mysqli_num_rows($result) == 1)
 { 
 $query_session = "SELECT username FROM profile WHERE (email='".$email."' AND password='".$enpassword."')";
 $result_s = mysqli_query($connection,$query_session);
 $result_session = mysqli_fetch_array($result_s);
 //Assign the result of this query to SESSION Global Variable named username
 $_SESSION['username']=$result_session['username'];
 
// Send user to Access Protected Profile Page.
header("Location: http://localhost/xampp/ProjectX/MainPage.php");
}
else
 {
	 $error= "Sorry, We doesn't recognize that Email / Password.  <a href='http://localhost/xampp/ProjectX/SigninPage.php'>Login Again</a>";
     echo $error;
 }
}
else
{
	echo $error;
}	
 mysqli_close($connection);
}
?>