<?php

$servername="localhost";
$mydb="attendance_system";
$username="root";
$password="";

try
{
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=attendance_system', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $dbh->exec("SET CHARACTER SET 'utf8'");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}

catch(PDOException $e)
{
    echo "Connection failed : " . $e->getMessage();
}

?>