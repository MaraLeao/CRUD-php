<?php
 require_once '../../link.php';
 require_once '../actions/user.php';

$users = readUserAction($sql);

if(isset($_POST['id']))
    deleteUserAction($mysqli, $_POST['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
           
<body>
    <form class="form" action="../pages/delete.php" method="POST">
        <label>Você deseja realmente remover este usuário?</label>
        <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>
        <button type="submit">Yes</button>
    </form>
</body>
</html>

