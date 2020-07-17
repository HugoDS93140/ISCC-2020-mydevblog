<html>
<h1>liste d'article</h1>
<ul>

<?php
include_once("singleton.php");
$pdo= connect_to_database();

$sql= "SELECT * FROM article";
$return= $pdo->query($sql);
foreach ($return as $data){
    
    echo "<li>" . $data['titre'] . "</li>";
    if ($_GET['article']){
        $id= $_GET['article'];
$sql= "SELECT * FROM article WHERE id =$id";
$stmt= $pdo->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
echo $row['extrait'];
    }
}
?>
</ul>
</html>
