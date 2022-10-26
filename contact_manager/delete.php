<?php 

require_once 'config.php';

if  ( !(isset($_GET['id']) && $_GET['id'] != "")  ){
    die("You are not allowed to this page directly");
}
$id = $_GET['id'];

$SQL = "
DELETE FROM
    `contacts`
WHERE
    id = {$id}
   ";

if($cn->query($SQL)){
    // success
    header("Location: index.php");
}
