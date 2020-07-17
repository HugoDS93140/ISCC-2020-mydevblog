<?php
function connect_to_database() {
     $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename ="DevBlog";
    
    try {
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "la connection c'est faite avec succès";
        return $pdo;
    }
    catch(PDOException $e){
        echo "la connection a échoué:".$e->getMessage();
    }
    
}