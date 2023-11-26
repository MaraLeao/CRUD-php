<?php
//server link

$hostname = "localhost";
$user = "root";
$password = "";
$bancodedados = "bancodados";


try {
 $sqllink = mysqli_connect($hostname, $user, $password, $bancodedados);
} catch (\Throwable $th) {
  throw $th;
}

?>
