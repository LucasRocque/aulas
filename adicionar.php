<?php

include_once("conexao.php");

$idAluno = isset($_REQUEST['idAluno']) ? $_REQUEST['idAluno'] : null;
$Nome = $_REQUEST['Nome'];
$RA = $_REQUEST['RA'];
$Email = $_REQUEST['Email'];               

if ($idAluno){
    
    $sql = "UPDATE aluno SET Nome = :Nome, RA = :RA, Email = :Email WHERE idAluno = :idAluno";
    $stmt = $conexao->prepare($sql); 
    $stmt->bindParam(':idAluno', $idAluno); 
    $stmt->bindParam(':Nome', $Nome); 
    $stmt->bindParam(':RA', $RA); 
    $stmt->bindParam(':Email', $Email);
    $mensagem = "Editado com sucesso";

}else{
    $sql = "INSERT INTO aluno (Nome, RA, Email) VALUES (:Nome, :RA, :Email)"; 
    $stmt = $conexao->prepare($sql); 
    $mensagem = "Salvo com sucesso";
}
$stmt->bindParam(':Nome', $Nome); 
$stmt->bindParam(':RA', $RA); 
$stmt->bindParam(':Email', $Email);
$stmt->execute();                 

header("location:index.php?mensagem=$mensagem");

?>