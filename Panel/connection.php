<?php

$username = "root";
$password = "";
$database = "bot";

try {
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo 'ERROR: ' . $e -> getMessage();
}

?>