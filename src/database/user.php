<?php 

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

//read user db

//update user db

?>