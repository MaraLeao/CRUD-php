<?php
//server link
$hostname = "localhost";
$bancodedados = "bancodados";
$informacoes = "root";
$password = "";

// Criando a conexão com o banco de dados
$mysqli = new mysqli($hostname, $informacoes, $password, $bancodedados);

// Verificando se há erros na conexão
if($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
} else {
    // Conexão bem-sucedida
    echo "Conectado ao Banco de Dados";

   
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
            $informacoes = lerAcao($mysqli);

            // Exibe os usuários na tabela
            if ($informacoes && count($informacoes) > 0) {
                foreach ($informacoes as $index => $informacoes) {
            ?>
            <tr>
                <th scope="row"><?= ($index + 1) ?></th>
                <td><?= htmlspecialchars($informacoes['name']) ?></td>
                <td><?= htmlspecialchars($informacoes['email']) ?></td>
                <td><?= htmlspecialchars($informacoes['phone']) ?></td>
                <td>
                    <a href="./edit.php?id=<?= $informacoes['id'] ?>">Editar</a>
                    <a href="./delete.php?id=<?= $informacoes['id'] ?>">Remover</a>
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
