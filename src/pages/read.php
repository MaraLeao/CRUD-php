<?php
//server link
$hostname = "localhost";
$bancodedados = "bancodados";
$user = "root";
$password = "";

// Criando a conexão com o banco de dados
$mysqli = new mysqli($hostname, $user, $password, $bancodedados);

// Verificando se há erros na conexão
if($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
} else {
    // Conexão bem-sucedida
    echo "Conectado ao Banco de Dados";

    // Inclua o código para exibir a tabela de usuários aqui
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
            // Busca usuários do banco de dados usando a conexão estabelecida
            $users = readUserAction($mysqli);

            // Exibe os usuários na tabela
            if ($users && count($users) > 0) {
                foreach ($users as $index => $user) {
            ?>
            <tr>
                <th scope="row"><?= ($index + 1) ?></th>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['phone']) ?></td>
                <td>
                    <a href="./edit.php?id=<?= $user['id'] ?>">Editar</a>
                    <a href="./delete.php?id=<?= $user['id'] ?>">Remover</a>
                </td>
            </tr>
            <?php
                }
            } else {
                // Caso nenhum usuário seja encontrado
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
<?php
    // Feche a conexão após utilizar
    $mysqli->close();
}
?>
