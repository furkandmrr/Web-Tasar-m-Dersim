<?php

#PHP - MYSQL BAĞLANTI SORGUSU
/*
$db_server     = "localhost";
$db_username   = "root";
$db_password   = "";
*/ 
try{
    
       $dbconnect = new PDO("mysql: host=localhost; dbname=mtalblog; charset=utf8","root","");

} catch(PDOException $e){

    print "Hata: ".$e->getMessage()."<br>";
    die();

}

?>
