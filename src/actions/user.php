<?php //require and response
require_once '../database/user.php';

// function find
function findUserAction($mysqli, $id) {
    return findUserDb($mysqli, $id);
}

//function create
function createUserAction($mysqli, $nome, $email, $numero) {
	$createUserDb = createUserDb($mysqli, $nome, $email, $numero);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ../pages/read.php?message=$message");
}

//function read 
function readUserActions($mysqli) {
    return readUserDB($mysqli);
}

//function update
function updateUserAction($mysqli, $id, $nome, $email, $numero) {
	$updateUserDb = updateUserDb($mysqli, $id, $nome, $email, $numero);
	$message = $updateUserDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

//function delete
function deleteUserAction($mysqli, $id) {
    $deleteUserDb = deleteUserDb($mysqli, $id);
    $message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
    return header("Location: ../pages/read.php?message=$message");
}

?>