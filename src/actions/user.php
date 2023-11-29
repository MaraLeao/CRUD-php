<?php //CRUD actions, require and response
require_once '../database/user.php';

// function find

function findUserAction($sqllink, $id) {
    return findUserDb($sqllink, $id);
}


//function create

function createUser($mysqli, $name, $email, $phone) {
	$createUserDb = createUserDb($mysqli, $name, $email, $phone);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ../pages/read.php?message=$message");
}

//function read 

function lerAcao($mysqli) {
    return LerDB($mysqli);
}

//function update

//function delete

function deleteUserAction($mysqli, $id) {
    $deleteUserDb = deleteUserDb($mysqli, $id);
    $message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
    return header("Location: ./read.php?message=$message");
}

?>