<?php
    $mensagem = isset($_REQUEST['m']) ? $_REQUEST['m'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="login.php" method="post">

    <?php echo $mensagem ?>
    <br><br>
    Email: <input type="email" name="Email">
    <br><br>
    Senha: <input type="password" name="senha">
    <br><br>
    <input type="submit" value="Entrar">

   </form>
</body>
</html>