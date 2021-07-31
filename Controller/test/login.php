<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message

	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
			Header('Location: ../../index.php?notset=1');
		}
		else
		{
		// Define $username and $password
		
		$username=$_POST['username'];
		$password=md5($_POST['password']);

				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		include '../../Model/dbconnection.php';
		include '../../Model/queries.php';

		$sql_login="select * from login where username='$username' AND password='$password'";
		$result=selectQuery($sql_login);
		
		foreach ($result as $row) 
		{ 
			$password_db=$row['password'];	
		}
		if(!empty($password_db))
		{
				if(strcmp($password, $password_db)!=0)
				{
					Header('Location: ../../index.php?notmat=1');
				}
				else if(strcmp($password, $password_db)==0)
				{
					if (!empty($password_db)) {
						$_SESSION['login_user']=$username; // Initializing Session
						header("location: ../NiceAdmin/index.php"); // Redirecting To Other Page
						} else {
						$error = "Username or Password is invalid";
						}
				}
				else 
				{
					Header('Location: ../../index.php?notmat=1');
				}				
			}
		}
	}
?>