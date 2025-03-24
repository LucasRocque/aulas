<?php

    include_once("conexao.php");

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
    <form method="request" action="resultado.php">
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>RA</th>
                <th>EMAIL</th>
            </tr>
            <?php
                while($linha = $resultado->fetch(PDO::FETCH_OBJ)){?>
                
            
            <tr>
                <td><?php echo $linha->idAluno ?></td>
                <td><?php echo $linha->Nome ?></td>
                <td><?php echo $linha->RA ?></td>
                <td><?php echo $linha->Email ?></td>
            </tr>
            <?php }?>
        </table>
        
    </form> 
</body>
</html>