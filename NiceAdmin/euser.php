<?php
   
   include 'dbconnection.php';
   include 'queries.php';
   

        
         $id=$_POST['id'];
         $name=$_POST['name'];	 

$sql="";

		
	 if (!empty($_POST['id'])) 
	{
		$sql2="UPDATE users SET name='$name' WHERE id='$id'";

     						 
	}
        
   
    try{
        executeQuery($sql2);
       
 Header('Location: users.php');	
        
   
    
	   
    }
    catch (Exception $e) {
         
        Header('Location: pending.php');
    } 
    
    ?>
    
									 						 

   
 
    