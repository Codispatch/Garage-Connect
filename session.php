<?php
// This is a Generic Session Function to check Session username and Password .
function checkSession()
{
if(!isset($_SESSION)){ session_start(); }

         $username=$_SESSION['username'];
         $password=$_SESSION['password'];
         
         if(empty($username) && empty($password))
         {
            return false;
         }
         return true;
}
 
    function RedirectTo($url)
    {
        header("Location: $url");
        exit;
    }
?>