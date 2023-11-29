<?php 

// find user db

function AcharDB($mysqli, $id) {
    $id = mysqli_real_escape_string($mysqli, $id);
    $informacoes;

    $sql = "SELECT * FROM users  WHERE id = ?";
    $stmt = mysqli_stmt_init($mysqli);

    if(!mysqli_stmt_prepare($stmt, $sql))
        exit('SQL error');

    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    $informacoes = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    mysqli_close($mysqli);
    return $informacoes;
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
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = mysqli_stmt_init($mysqli);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        return true;
    }
}

//read user db

function lerAcao($mysqli) {
    $informacoes = [];

    $sql = "SELECT * FROM users";
    $result = mysqli_query($mysqli, $sql);

    $result_check = mysqli_num_rows($result);

    if($result_check > 0)
        $informacoes = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($mysqli);
    return $informacoes;
}

//update user db

?>