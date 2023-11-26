<?php
    require_once '../../link.php';
    require_once '../actions/user.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Tela de cadastro</h1>

    <form action="../../index.php" method="post">

        <label for="nome">Digite seu nome:</label>
        <input type="text"/><br>

        <label for="email">Digite seu e-mail:</label>
        <input type="email"/><br>
        
        <label for="celular">Digite seu numero de celular:</label>
        <input type="tel"/><br>
        
        <label for="notifications">Deseja receber notificações?</label>
        <input type="checkbox"/><br>
        
        <button type="submit">Cadastrar</button>
    </form>
    <?php

    ?>
</body>
</html>