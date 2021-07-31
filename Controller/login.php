<?php
	include '../Model/dbconnection.php';
	include '../Model/queries.php';
	date_default_timezone_set('Europe/Athens');
	if((isset($_POST['username']))&&(!empty($_POST['username'])) && (isset($_POST['password']))&&(!empty($_POST['password'])))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
                $timeanddate=date('d-m-Y H:i:s');
                
		session_start();
		
		$sql_login="select * from login where password='$password' AND username='$username'";
		$result=selectQuery($sql_login);
		
		foreach ($result as $row) 
		{ 
			$password_db=$row['password'];	
                        $role=$row['role'];
		}
		
		if(!empty($password_db))
		{
				if(strcmp($password, $password_db)!=0)
				{
					Header('Location: ../login.php?notmat=1');
				}
				else if(strcmp($password, $password_db)==0)
				{
					if (!empty($username)) {
						
						$_SESSION['login_user']=$username;
                                                

                                                
if ($role == "0")
{
	Header('Location: ../NiceAdmin/index.php');
}
else if($role == "1")
{
	Header('Location: ../NiceAdmin/index.php');
}

 
						} else {
						$error = "Username or Password is invalid";
					}
				}
		}
		else 
		{
			Header('Location: ../index.php?notmat=1');
		}
	}
	else 
	{
		Header('Location: ../index.php?notset=1');
	}
?>