<?php
    
    include_once("conexao.php");

    $Email = $_POST['Email'];
    $senha = $_POST['senha'];                

    $sql = "SELECT * FROM aluno WHERE Email = :Email AND senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':senha', md5($senha));
    $stmt->execute();

    if($stmt->rowCount() > 0){
        session_start();
        $_SESSION['Email'] = $Email;
        header("Location: listar.php");

    }else{
        header("Location: index.php?m=Usuario ou senha inválido!"); 
    }
?>