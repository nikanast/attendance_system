<?php
	
		include 'queries.php';
		include 'dbconnection.php';
		

		
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
		
		//echo "t? id einai".$email."<br><br>";
		
		$sql_delete="DELETE FROM users WHERE id = '$id'";
		executeQuery($sql_delete);
		Header('Location: users.php');
?>	