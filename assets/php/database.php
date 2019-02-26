<?php
session_start();
// ob_start();
$hasDB = false;
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'acl_test';
$link = new mysqli('localhost', 'root', '', 'acl_test');
if ($link->connect_error != null) {   
	$hasDB = false;
	die("Could not connect to the MySQL server at localhost.");
} else {   
	$hasDB = true;
	mysqli_select_db($link, $db);
}
?>