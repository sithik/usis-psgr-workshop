<?php

$host 		= "localhost";
$username 	= "root";
$password 	= "";
$database 	= "workshop";

$cn = mysqli_connect($host,$username,$password,$database);

if ($cn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_input_fullname = $_POST['fullname'];

$SQL = "INSERT INTO test_table (id,fullname) VALUES(null,'" . $user_input_fullname . "')";

if($cn->query($SQL)){
    echo "Thank you for registering. Your registration ID is: " . $cn->insert_id;
}
