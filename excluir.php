<?php

    include_once("conexao.php");

    $idAluno = $_REQUEST['idAluno'];
    $sql = "DELETE FROM aluno WHERE idAluno = :idAluno";
    $stmt = $conexao->prepare($sql); 
    $stmt->bindParam(':idAluno', $idAluno);                 
    $stmt->execute(); 

    header("location:index.php");
?>