<?php
$HOST='localhost';
$USERNAME ='root';
$PASSWORD='root';
$DATABASE='registration';

// Create connection
$connection = new mysqli($HOST, $USERNAME, $PASSWORD,$DATABASE);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: ".$connection->connect_error);
} 
$base_url='http://www.youwebsite.com/email_activation/';

?>
