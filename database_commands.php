<?php

$host 		= "localhost";
$username 	= "root";
$password 	= "";
$database 	= "workshop";

$cn = mysqli_connect($host,$username,$password,$database);

if ($cn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//---------- Select Query ----------//

$SQL = "select * from test_table";
$results = $cn->query($SQL);
echo "Total records: ". $results->num_rows . "<br>";
if($results->num_rows > 0)
{    
    while($row = $results->fetch_assoc()){
        echo "ID: ". $row['id'] . ", Name: ".$row['fullname']." <br>";
    }
}
else{
    echo "No records available to display";
}

 
//---------- Update Query ----------//
$sql = "UPDATE `test_table` SET `fullname` = 'New Value' WHERE `id` = '1'";
if($cn->query($sql)){
    echo "Successfully updated.";
}
//-----------------------------------------//



//---------- Delete Query ----------//
$sql = "DELETE FROM test_table WHERE `id` > 1";
if($cn->query($sql)){
    echo "Successfully deleted.";
}
//-----------------------------------------//


