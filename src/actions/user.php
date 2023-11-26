<?php //CRUD actions, require and response
require_once '../../database/user.php';

//function create

function createUser($sqllink, $name, $email, $phone) {
	$createUserDb = createUserDb($sqllink, $name, $email, $phone);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

//function read

//function update

//function delete

?>