<?php
 
include_once("singleton.php");
$pdo= connect_to_database();


session_start();



if(isset($_POST["password"])&&isset($_POST["name"])){
  $name= $_POST["name"];
  $sql= "SELECT * FROM utilisateur WHERE login='$name'";
  $return= $pdo->query($sql);
   //foreach ($return as $data){
   // echo $data['login'].' '.$data["password"];
   // var_dump($data);
    if($_POST["password"]==$data["password"]){
      echo "succès";
      include 'pageA.php';
      $_SESSION["login"]=$name;
     echo $_SESSION['login'];
     include 'pageA.php';
    }
  }
//} 

?>
<ul id="nav">
    
<li><a href="back.php">Page de Connexion</a></li>
