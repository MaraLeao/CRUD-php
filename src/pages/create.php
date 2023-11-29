<?php
    require_once '../../link.php';
    require_once '../actions/user.php';

    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["numero"]))
        createUserAction($mysqli, $_POST["nome"], $_POST["email"], $_POST["numero"]);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<div class="cadastro">

<h1>Tela de cadastro</h1>

    <div class="registers">

        <form action="../pages/create.php" method="POST">
            
            <label for="nome">Digite seu nome:</label> <p></p>
            <input class="inputs" placeholder="Digite seu Nome" type="text" name="nome" required/><br>
            
            <label for="email">Digite seu e-mail:</label> <p></p>
            <input class="inputs" placeholder="Digite seu Email" type="email" name="email" required/><br>
            
            <label for="celular">Digite seu numero de celular:</label> <p></p>
            <input class="inputs" placeholder="Digite seu Número" type="tel" name="numero" required><br> <p></p>
            
        </div>
            <button class="button" type="submit">Cadastrar</button>
            
        </form>

<?php

?>
</div>
</body>
</html>