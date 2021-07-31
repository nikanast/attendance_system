<?php

function executeQuery($sql)
{
    global $dbh;
    global $qflag;
    $qflag = 0;
         
    try {
        $result = $dbh->prepare($sql);
        
        $result->execute();
        $qflag = 1;
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        die();
    }
}

function selectQuery($sql)
{
    global $dbh;
       
    try {
        $result = $dbh->prepare($sql);
        
        $result->execute();
    
    
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        die();
    }
    
    return $result;
}


function register_query($pass, $name, $tel, $addr, $test)
{
        global $dbh;
        global $qflag;    
        
        $hpass = md5($pass);
    
        $query1  = "UPDATE login SET ";
        $query1 .= "password = '{$hpass}', fullname = '{$name}', ";
        $query1 .= "phone = '{$tel}', ";
        $query1 .= "address = '{$addr}' ";
        $query1 .= "WHERE code = '{$test}' ";

        executeQuery($query1);
        
        
        if ($qflag)
        {
            echo "<script>(function(){alert('Registration successfuly completed!');})();</script>";
            header("Location: http://162.209.108.79/"); 
        }
        else
        {
            echo "<script>(function(){alert('Registration failed!');})();</script>";
        }
}

?>