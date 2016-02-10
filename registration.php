<?php     

//include connect.php page for database connection ; This can be used generic purpose 
Include('connect.php');
//On Submit 
$msg='';
If(isset($_REQUEST['submit'])!='')
{
	
	if($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['repassword'] != $_REQUEST['password'] || $_REQUEST['phone']=='' || $_REQUEST['firstname']=='' || $_REQUEST['lastname']=='' || $_REQUEST['email']=='' || $_REQUEST['gender']=='')
	{
		Echo "Something is missing or Wrong !";
	}
	else
	{
		// username and password sent from form
         $email=$_POST['email'];
         $password=$_POST['password'];
		 // regular expression for email check
         $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
		
		 if(preg_match($regex,$email))
         {
			 $password=md5($password); // encrypted password
			 $activation=md5($email.time()); // encrypted email+timestamp for Activation Link
			 $r = mysqli_query($connection,"SELECT username from profile WHERE email='".$email."'");
			 $count= mysqli_num_rows($r);
			 $count = (int)$count;
			 
            //check if Email is Already present in Our Database 
			if($count < 1)
            {
				/*
             // sending email <---- THIS FEATURE NOW NOT SUPPORTED IN LOCAL HOST <- OPEN SSL ERROR WITH SMTP SETUP 
			 $baseurl = 'http://localhost/xampp/ProjectX/activation.php';
             include 'Send_Mail.php';
             $to=$email;
             $subject="Email verification";
             $body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'?email='.$email.'&key='.$activation.'">Activate Account</a>';
			 Send_Mail($to,$subject,$body);
			 */
			 // After Email is Sent , Next Start Working with Profile Photo
			 //If Some File is Selected then do Something 
			if(isset($_FILES['image']))
	      {
			$ERROR = array();
			$IMAGE_NAME = $_FILES['image']['name'];
			$IMAGE_SIZE =$_FILES['image']['size'];
			$IMAGE_TMP =$_FILES['image']['tmp_name'];
			$IMAGE_TYPE=$_FILES['image']['type'];   
			$IMAGE_EXT=strtolower(end(explode('.',$_FILES['image']['name']))); // to prevent the case-sensitive IMG EXTENSION
			$EXTENSIONS = array("jpeg","jpg","png");
			$USERNAME = $_REQUEST['username'];
			$TARGET_PATH = "uploads/".$USERNAME.$IMAGE_NAME;
			$MAX_SIZE = 2000000;
			// Check for Valid IMAGE EXTENSION
			if(in_array($IMAGE_EXT,$EXTENSIONS )=== false)
			{
				$ERROR[]="Image EXTENSION Not Supported , Please Select JPEG,JPG or PNG Image Format";
			}	
			// Image Size must be Less Than 2 MB 
			if($IMAGE_SIZE < $MAX_SIZE)
			{
				if(empty($ERROR)==true)
				{ 
						move_uploaded_file($IMAGE_TMP,$TARGET_PATH);
						$query = "insert into profile values ('".$_REQUEST['username']."','".$password."','".$_REQUEST['phone']."','".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$email."','".$_REQUEST['gender']."','".$activation."','".$TARGET_PATH."')";
						$result = mysqli_query($connection,$query);
						if($result)
						{
							$msg= "Registration Successful.Check Your Email for Activation Link"; 
							echo $msg;
							echo "<a href='http://localhost/xampp/ProjectX/activation.php?email=".$email."&key=".$activation."'>Activate Account</a>";
						}
					else
						{
							echo "There is some problem in inserting record , Please Try Again";
						}
				}				
			}   
			else 
			{
				echo "Please Upload Image Smaller than 2 MB Size";
			}
          }
			 
		  }
			else
		  {
				$msg= 'The email is already registered in Our Database, Please Login.';
				echo $msg;
		  }
		 }
         else 
         {
			 $msg = 'The email you have entered is invalid, please try again.'; 
		 }			 
			
    }

}

?>