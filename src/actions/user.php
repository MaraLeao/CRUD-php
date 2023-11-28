<?php //CRUD actions, require and response
require_once '../../database/user.php';

// function find

function findUserAction($sqllink, $id) {
    return findUserDb($sqllink, $id);

//function create

function createUser($sqllink, $name, $email, $phone) {
	$createUserDb = createUserDb($sqllink, $name, $email, $phone);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

//function read 

function readUserAction($sqllink) {
    return readUserDb($sqllink);
}

//function update

//function delete

?>