<?php //CRUD actions, require and response
require_once '../database/user.php';

// function find

function findUserAction($sqllink, $id) {
    return findUserDb($sqllink, $id);

//function create

function createUserAction($mysqli, $nome, $email, $numero) {
	$createUserDb = createUserDb($mysqli, $nome, $email, $numero);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ../pages/read.php?message=$message");
}

//function read 

function readUserAction($sqllink) {
    return readUserDb($sqllink);
}

//function update

//function delete

?>