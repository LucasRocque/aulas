<?php

include_once("conexao.php");

$Nome = $_REQUEST['Nome'];
$RA = $_REQUEST['RA'];
$Email = $_REQUEST['Email'];               

$sql = "INSERT INTO aluno (Nome, RA, Email) VALUES (:Nome, :RA, :Email)"; 
$stmt = $conexao->prepare($sql); 
$stmt->bindParam(':Nome', $Nome); 
$stmt->bindParam(':RA', $RA); 
$stmt->bindParam(':Email', $Email); 
$stmt->execute();                 

header("location:index.php");

?>