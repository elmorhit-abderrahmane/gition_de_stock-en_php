<?php
$id = $_POST['id'];
$titre = $_POST['titre'];
$type = $_POST['type'];
$prix = $_POST['prix'];
$con = new PDO ("mysql:host=localhost;dbname=extincteur","root","");
$querySql = "UPDATE ordenateur SET titre = '$titre', type = '$type', prix = '$prix' WHERE id = '$id' ";
$aplySQL = $con -> prepare($querySql);
$aplySQL -> execute();
?>
