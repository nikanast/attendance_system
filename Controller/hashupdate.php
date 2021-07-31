<?php
	include '../Model/dbconnection.php';
	include '../Model/queries.php';

	if((isset($_GET['id']))&&(!empty($_GET['id'])))
	{
		$id=$_GET['id'];
		
				
		$sql_upd="UPDATE candidates SET status='1' WHERE id='$id'";
		executeQuery($sql_upd);
		
		Header('Location: ../NiceAdmin/search.php');
	}
	else 
	{
		Header('Location: ../NiceAdmin/index.php?notset=1');
	}
?>