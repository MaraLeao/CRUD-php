<?php
    require_once '../../link.php';
    require_once '../actions/user.php';

    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["numero"]))
        createUserAction($mysqli, $_POST["nome"], $_POST["email"], $_POST["numero"]);

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

    <form action="../pages/create.php" method="POST">

        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" required/><br>

        <label for="email">Digite seu e-mail:</label>
        <input type="email" name="email" required/><br>
        
        <label for="celular">Digite seu numero de celular:</label>
        <input type="tel" name="numero" required><br>
        
        <button type="submit">Cadastrar</button>
    </form>
    <?php

    ?>
</body>
</html>