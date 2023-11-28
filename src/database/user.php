<?php 

// find user db

function findUserDb($mysqli, $id) {
    $id = mysqli_real_escape_string($mysqli, $id);
    $user;

    $sql = "SELECT * FROM users  WHERE id = ?";
    $stmt = mysqli_stmt_init($mysqli);

    if(!mysqli_stmt_prepare($stmt, $sql))
        exit('SQL error');

    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    $user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    mysqli_close($mysqli);
    return $user;




//create user db

function createUserDb($sqllink, $name, $email, $phone) {
	$name = mysqli_real_escape_string($sqllink, $name);
	$email = mysqli_real_escape_string($sqllink, $email);
	$phone = mysqli_real_escape_string($sqllink, $phone);

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

//delete user db$$squllink

//read user db

function readUserDb($mysqli) {
    $users = [];

    $sql = "SELECT * FROM users";
    $result = mysqli_query($mysqli, $sql);

    $result_check = mysqli_num_rows($result);

    if($result_check > 0)
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($mysqli);
    return $users;
}

//update user db

?>