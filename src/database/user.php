<?php 

//create user db

function createUserDb($sqllink, $name, $email, $phone) {
	$name = mysqli_real_escape_string($sqllink, $name);
	$email = mysqli_real_escape_string($sqllink, $email);
	$phone = mysqli_real_escape_string($sqllink $phone);

	if($name && $email && $phone) {
		$sql = "INSERT INTO users (name, email, phone) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($sqllink);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone);
		mysqli_stmt_execute($stmt);
		mysqli_close($sqllink);
		return true;
	}
}

//delete user db

//read user db

//update user db

?>