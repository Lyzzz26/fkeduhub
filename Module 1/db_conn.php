<?php  

$sname = "localhost";
$uname = "root";
$password = "p@ssword";

$db_name = "my-db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}