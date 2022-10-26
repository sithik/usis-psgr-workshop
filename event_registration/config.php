<?php

$host 		= "localhost";
$username 	= "root";
$password 	= "";
$database 	= "symposium";

$cn = mysqli_connect($host,$username,$password,$database);

if ($cn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
