<?php
include ('connect.php');
//Get the Email 
if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',
 $_GET['email'])) {
 $email = $_GET['email'];
 }
 //Get the Activation key which is 32 in length
if (isset($_GET['key']) && (strlen($_GET['key']) == 32))
{
 $key = $_GET['key'];
}

if (isset($key)) {
 // Update the database to set the "activation" field to null to tell Activation Completed .
 $query_activated = "UPDATE profile SET activation=NULL WHERE(email='".$email."' AND activation='".$key."') LIMIT 1";
 $result_activated = mysqli_query($connection,$query_activated);

 // Print a customized message:
 if (mysqli_affected_rows($connection) == 1) //if update query was successful
 {
 echo '<div>Your account is now activated. You may now <a href="SigninPage.php">Log In</a>to your Account.</div>';

 } else {
 echo '<div>Oops !Your account could not be Activated. Please recheck the link or contact the system administrator.</div>';

 }

 mysqli_close($connection);

} else {
 echo '<div>Error Occured .</div>';
}
?>