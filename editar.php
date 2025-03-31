<?php

include_once("conexao.php");

$Nome = $_REQUEST['Nome'];
$RA = $_REQUEST['RA'];
$Email = $_REQUEST['Email'];                

$sql = "UPDATE aluno SET Nome = :Nome, RA = :RA, Email = :Email WHERE idAluno = :idAluno"; 
$stmt = $conexao->prepare($sql); 
$stmt->bindParam(':idAluno', $idAluno); 
$stmt->bindParam(':Nome', $Nome); 
$stmt->bindParam(':RA', $RA); 
$stmt->bindParam(':Email', $Email); 
$stmt->execute();

header("location:index.php");

?>