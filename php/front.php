<html>

<head>
    <title>mini-site-routing</title>
</head>

    
<header>
 <nav>   
<a href="?page=1">Page d'acueille</a>   
<a href="?page=2">Page liste des articles</a>  
<a href="?page=3">formulaire</a>  
<!-- <a href="?page=connexion">connexion</a>   -->
</nav>
    
<h1>  Bienvenue sur la page </h1>

 <?php  
 include_once("singleton.php");
 $pdo= connect_to_database();


     if ($_GET['page']=="2") { 
     include 'listearticle.php';
     }
     elseif ($_GET['page']=="3") { 
        include 'formulaire.php';
     }
     else  { 
        include 'pageA.php';
     }
     if ($_GET['article']){
         $id= $_GET['article'];
$sql= "SELECT * FROM article WHERE id =$id";
$stmt= $pdo->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
echo $row['extrait'];
     }

     ?> 

</header>
   
</html>