<?php

    include_once("conexao.php");

    session_start();
    if(!isset($_SESSION['Email'])){
        header("Location: index.php");
        exit;
    }
    
    var_dump($_SESSION);
    $idAluno = isset($_REQUEST['idAluno']) ? $_REQUEST['idAluno'] : null;

    if($idAluno){
        $sql = "SELECT * FROM aluno WHERE idAluno = :idAluno";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':idAluno', $idAluno);
        $stmt->execute();
        $resultItem = $stmt->fetch(PDO::FETCH_OBJ);
    }

    $sql = "SELECT * FROM aluno";
    $resultado = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="request" action="adicionar.php">

        <a href="sair.php">Sair</a>
        <br><br>

        <input type="hidden" name="idAluno" 
        value="<?php echo isset ($resultItem) ? $resultItem->idAluno : '' ?>">
        
        Nome: <input type="text" name="Nome" 
        value="<?php echo isset ($resultItem) ? $resultItem->Nome : '' ?>"> 
        
        RA: <input type="number" name="RA" 
        value="<?php echo isset ($resultItem) ? $resultItem->RA : '' ?>">
        <br><br>
        
        Email: <input type="email" name="Email" 
        value="<?php echo isset ($resultItem) ? $resultItem->Email : '' ?>">
        <br><br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>RA</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>
            <?php
                while($linha = $resultado->fetch(PDO::FETCH_OBJ)){?>
            <tr>
                <td><?php echo $linha->idAluno ?></td>
                <td><?php echo $linha->Nome ?></td>
                <td><?php echo $linha->RA ?></td>
                <td><?php echo $linha->Email ?></td>
                <td>
                    <a href="excluir.php?idAluno=<?php echo $linha->idAluno ?>">Excluir</a> 
                    <a href="index.php?idAluno=<?php echo $linha->idAluno ?>">Editar</a>
                </td>
            </tr>
            <?php }?>
        </table> 
</body>
</html>