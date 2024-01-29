<?php 

// find user db
function findUserDb($mysqli, $id) {
    $internal_id = mysqli_real_escape_string($mysqli, $id);

    $sql = "SELECT * FROM informacoes WHERE id = ?";
    $stmt = mysqli_stmt_init($mysqli);

    if(!mysqli_stmt_prepare($stmt, $sql))
        exit('SQL error');

    mysqli_stmt_bind_param($stmt, 'i', $internal_id);
    mysqli_stmt_execute($stmt);

    $user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    mysqli_close($mysqli);
    return $user;
}

//create user db
function createUserDb($mysqli, $nome, $email, $numero) {
	$name = mysqli_real_escape_string($mysqli, $nome);
	$email = mysqli_real_escape_string($mysqli, $email);
	$phone = mysqli_real_escape_string($mysqli, $numero);

	if($nome && $email && $numero) {
		$sql = "INSERT INTO informacoes (nome, email, numero) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $nome, $email, $numero);
		mysqli_stmt_execute($stmt);
		mysqli_close($mysqli);
		return true;
	}
}

//delete user db
function deleteUserDb($mysqli, $id) {
    $id = mysqli_real_escape_string($mysqli, $id);

    if($id) {
        $sql = "DELETE FROM informacoes WHERE id = ?";
        $stmt = mysqli_stmt_init($mysqli);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_close($mysqli);
        return true;
    }
}

//read user db
function readUserDb($mysqli) {
    $informacoes = [];

    $sql = "SELECT * FROM informacoes";
    $result = mysqli_query($mysqli, $sql);

    $result_check = mysqli_num_rows($result);

    if($result_check > 0)
        $informacoes = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($mysqli);
    return $informacoes;
}

//update user db
function updateUserDb($mysqli, $id, $nome, $email, $numero) {
    if($id && $nome && $email && $numero) {
		$sql = "UPDATE informacoes SET nome = ?, email = ?, numero = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $nome, $email, $numero, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($mysqli);
		return true;
	}
}

?>