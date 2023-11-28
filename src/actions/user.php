<?php //CRUD actions, require and response
require_once '../database/user.php';

// function find

function findUserAction($mysqli, $id) {
    return findUserDb($mysqli, $id);

//function create

function createUser($mysqli, $name, $email, $phone) {
	$createUserDb = createUserDb($mysqli, $name, $email, $phone);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ../pages/read.php?message=$message");
}

//function read 
$mysqli
function readUserAction($mysqli) {
    return readUserDb($s$mysqli);
}

//function update

//function delete

?>