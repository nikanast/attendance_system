<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		include '../Model/dbconnection.php';
		include '../Model/queries.php';
		// Selecting Database

		session_start();// Starting Session
		// Storing Session
		$user_check=$_SESSION['login_user']; 
		// SQL Query To Fetch Complete Information Of User
		$sql_login="SELECT * FROM login WHERE username='$user_check'";
		$result=selectQuery($sql_login);
		
		foreach ($result as $row) 
		{ 
			$login_name=$row['name'];	
			$login_surn=$row['surname'];
			$login_session=$row['username'];
                        $role=$row['role'];
                        $id=$row['id'];
		}

                

                
         
               
		/*$ses_sql=mysql_query("select username from data where username='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);*/
		//$login_session =$row['username'];
		if(!isset($login_name) && !isset($login_surn)){
			Header('Location: ../index.php'); // Redirecting To Home Page
		}
?>