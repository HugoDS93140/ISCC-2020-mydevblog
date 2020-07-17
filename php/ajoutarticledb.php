<?php
 
include_once("singleton.php");
$pdo= connect_to_database();

$name= $_POST["name"];
$extrait= $_POST["extrait"];
$contenu= $_POST["contenu"];
$image= $_POST["image"];
$auteur= $_POST["auteur"];
  $sql= "INSERT INTO article (titre,contenu,image,extrait,auteur) VALUES ('$name','$contenu','$image','$extrait','$auteur')";
  echo "echo" . $sql;
  $return= $pdo->query($sql);
  var_dump($return)
?>