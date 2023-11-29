<?php
    require_once '../../link.php';
    require_once '../actions/user.php';

    $user_id = $_GET['id'];

    if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["numero"])) 
        updateUserAction($mysqli, $_POST["id"], $_POST["nome"], $_POST["email"], $_POST["numero"]);

    $user = findUserAction($mysqli, $user_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
        <div>
            <h1> Editar</h1>
            <h2>Prev</h2>
        </div>
        
            <div>
                <form class="form" action="../pages/update.php?id=<?=$user_id?>" method="POST">
                    <input type="hidden" name="id" value="<?=$user['id']?>" required/>
                    <label>Nome</label>
                    <input type="text" name="nome" value="<?=htmlspecialchars($user['nome'])?>" required/>
                    <label>E-mail</label>
                    <input type="email" name="email" value="<?=htmlspecialchars($user['email'])?>" required/>
                    <label>Número</label>
                    <input type="text" name="numero" value="<?=htmlspecialchars($user['numero'])?>" required/>

                    <button type="submit">Save</button>
                </form>
            
</body>
</html>