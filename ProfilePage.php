<?PHP
require_once("session.php");
if(!checkSession())
{
    RedirectTo("http://localhost/xampp/ProjectX/SigninPage.php");
    exit;
}	
?>
<div class="profile">
<?php
 include ('connect.php');
 $username=$_SESSION['username'];
 $password=$_SESSION['password'];
 $query = "SELECT username,phone,firstname,lastname,email,gender,photopath FROM profile WHERE (username='".$username."' AND password='".$password."') AND activation IS NULL";
 $result = mysqli_query($connection,$query);
 $result_array = mysqli_fetch_array($result);
 $photopath=$result_array['photopath'];
 
 echo "<img src='".$photopath."' /> </br></br>";
 echo "Username   :".$result_array['username']."</br>";
 echo "Phone no.  :".$result_array['phone']."</br>";
 echo "FirstName  :".$result_array['firstname']."</br>";
 echo "LastName   :".$result_array['lastname']."</br>";
 echo "Email      :".$result_array['email']."</br>";
 echo "Gender     :".$result_array['gender']."</br>";

?>
</div>