<html>

<header>
<h1>Page d'acueille !</h1>
<link type="text/css" rel="styleheet" href="pageA.css">
<link type="text/css" rel="styleheet" href="contact.css">
</header>
<ul>

<?php
session_start();

include_once("singleton.php");
$pdo= connect_to_database();

$sql= "SELECT * FROM article ORDER BY date DESC LIMIT 5";
$return= $pdo->query($sql);
foreach ($return as $data){
    echo "<li> <a href=?article=".$data['id'].">".$data['titre']. "</a></li>";
}
if (isset($_SESSION["login"])){
    include 'pageadmin.php';
}
?>
</ul>
</html>
