<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "majboori";

try {
    $con = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}