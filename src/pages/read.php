<?php
    require_once '../../link.php';
    require_once '../actions/user.php';

    $informacoes = readUserActions($mysqli);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="icon" href="./components/phantomtrupe.webp">
        <link rel="stylesheet" href="../../css/read.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usu√°rios</title> 
    </head>
    <body>
        <div class="fundo">

            <h1>Lista Usu√°rios</h1>

            <button class="button" type="button"><a href="../pages/create.php">adicionar</a></button>

            <div class="table">
                <table>
                
                    <tr>
                        <th >#</th>
                        <th >Nome</th>
                        <th >Email</th>
                        <th>Telefone</th>
                        <th>AÁıes</th>
                    </tr>
                
                    <?php foreach($informacoes as $row): ?>
                    
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['nome']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['numero']) ?></td>
                        <td>
                            <a class="actions" href="./update.php?id=<?= $row['id'] ?>"><img class="icons_actions" src="https://cdn-icons-png.flaticon.com/512/4277/4277132.png" alt="editar"></a>
                            </td>
                        <td>
                            <a class="actions" id="deleteIcon" href="./delete.php?id=<?= $row['id'] ?>"><img class="icons_actions" src="https://images.vexels.com/media/users/3/223479/isolated/preview/8ecc75c9d0cf6d942cce96e196d4953f-cone-da-lixeira-plana.png" alt="remover"></a>
                        </td>
                    </tr>
                
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </body>
</html>

