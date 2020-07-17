html>
<h1> liste des utilisateurs </h1>

<?php
session_start();
include_once("singleton.php");
$pdo= connect_to_database();

if (isset($_SESSION["login"])){
    include 'pageadmin.php';
    ?>
    </html>