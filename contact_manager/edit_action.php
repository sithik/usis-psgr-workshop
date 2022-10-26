<?php 

require_once 'config.php';

if  ( !(isset($_POST['id']) && $_POST['id'] != "")  ){
    die("You are not allowed to this page directly");
}
$id = $_POST['id'];
$full_name = $_POST['full_name'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];
$contact_group = $_POST['contact_group'];

$SQL = "
UPDATE
    `contacts`
SET
    `full_name` = '{$full_name}',
    `email_id` = '{$email_id}',
    `phone_no` = '{$phone_no}',
    `contact_group` = '{$contact_group}'
WHERE
    id = {$id}
   ";


if($cn->query($SQL)){
    // success
    header("Location: index.php");
}
