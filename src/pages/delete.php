<?php
require_once '../../link.php';
require_once '../actions/user.php';

if(isset($_POST['id']))
    deleteUserAction($mysqli, $_POST['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/read.css">
        <link rel="icon" href="./components/phantomtrupe.webp">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete</title>
    </head>
            
    <body>
        <form class="form" action="../pages/delete.php" method="POST">
            <label>Você deseja realmente remover este usuário?</label>
            <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>
            <button class="button" type="submit">Sim</button>
            <button class="button" type="button"><a href="../pages/read.php">Não</a></button>
        </form>
    </body>
</html>

