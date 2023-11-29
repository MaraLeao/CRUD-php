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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/read.css">
    <title>Editar</title>
</head>
<body>
    
        <div>
            <h1>Editar</h1>
        </div>
        
            <div>
                <form class="form" action="../pages/update.php?id=<?=$user_id?>" method="POST">
                    <p>
                        <input type="hidden" name="id" value="<?=$user['id']?>" required/>
                        <label>Nome</label><br>
                        <input type="text" name="nome" value="<?=htmlspecialchars($user['nome'])?>" required/> <br>
                    </p>

                    <p>
                        <label>E-mail</label><br>
                        <input type="email" name="email" value="<?=htmlspecialchars($user['email'])?>" required/>
                    </p>
                    
                    <p>
                        <label>Número</label> <br>
                        <input type="text" name="numero" value="<?=htmlspecialchars($user['numero'])?>" required/><br>
                    </p>
                    
                    


                    <button type="submit">Salvar</button>
                </form>
            
</body>
</html>