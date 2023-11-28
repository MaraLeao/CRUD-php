<?php
require_once '../../../config.php';
require_once '../../../src/actions/user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title> 
</head>
<body>
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
        <tbody>
            <?php
            // Busca user bd
            $users = readUserAction($sqllink);

            // Verificação
            if ($users && count($users) > 0) {
                foreach ($users as $index => $user) {
                    ?>
                    <tr>
                        <th scope="row"><?= ($index + 1) ?></th>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['phone']) ?></td>
                        <td>
                            <!-- Adicione os links para editar e remover usuários -->
                            <a href="./edit.php?id=<?= $user['id'] ?>">Editar</a>
                            <a href="./delete.php?id=<?= $user['id'] ?>">Remover</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                // Não encontrou
                ?>
                <tr>
                    <td colspan="5">Nenhum usuário encontrado.</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>