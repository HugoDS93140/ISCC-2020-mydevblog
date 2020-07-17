<html>

<head>
    <title>page admin</title>
    <link type="text/css" rel="styleheet" href="pageadmin.css">
</head>
    
<header>
 <nav>   
<a href="?page=1">Page d'ajout d'article</a>   
<a href="?page=2">Page d'ajout d'utilisateur</a>  
<a href="?page=3">Page :liste des utilisateurs</a>  
<a href="?page=4">Page :accueil</a> 
</nav>
    

 <?php  
     if ($_GET['page']=="1") { 
     include 'ajoutarticle.php';
     }
     if ($_GET['page']=="2") { 
        include 'ajoutulisateur.php';
        }
        if ($_GET['page']=="3") { 
            include 'listeutilisateur.php';
            }
            if ($_GET['page']=="4") { 
                include 'pageA.php';
                }
     ?> 

</header>
   
</html>