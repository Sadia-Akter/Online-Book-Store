<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail'])||empty($_POST['city']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		/////////////////////////////////////////////////////////////////////

		if(!preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/",$_POST['mail']))
		{
		$msg.="<li>Please Enter Your Valid Email Address...";
		}
		if(strlen($_POST['pwd'])>10)
		{
		$uppercase = preg_match('@[A-Z]@', 'pwd');
		$lowercase = preg_match('@[a-z]@', 'pwd');
		$number    = preg_match('@[0-9]@', 'pwd');

		if(!$uppercase ) {	
	  			$msg.="<li>Please Enter one uppercase letter in Password Format....";	// tell the user something went wrong
			}
		if(!$lowercase ) {	
	  			$msg.="<li>Please Enter lowercase letter in Password Format....";	// tell the user something went wrong
			}
		if(!$number ) {	
	  			$msg.="<li>Please Enter number in Password  Format....";	// tell the user something went wrong
			}
		}

		////////////////////////////////////////////////////////////////////
		if(is_numeric($_POST['fnm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
			
			
		
			
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>