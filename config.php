<?php
 $dsn = "mysql:dbname=db_login;host=localhost";
 $dbuser = "root";
 $dbpass = "";


 try{
    $pdo = new PDO($dsn,$dbuser,$dbpass);

}catch(PDOException $e){
    echo "Falhou na conexão! ".$e->getMessage();
 }
 



?>