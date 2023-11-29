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
    <link rel="icon" href="./components/phantomtrupe.webp">
    <link rel="stylesheet" href="../../css/read.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title> 
</head>
<body>
    <div class="fundo">

    <button type="button"><a href="./create.php">add</a></button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <?php foreach($informacoes as $row): ?>
        
            <tr>
                
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['numero']) ?></td>
                <td>
                    <a href="./update.php?id=<?= $row['id'] ?>">Editar</a>
                    <a href="./delete.php?id=<?= $row['id'] ?>">Remover</a>
                </td>
            </tr>
        
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
<?php
    // Feche a conexão após utilizar
    $mysqli->close();

?>
