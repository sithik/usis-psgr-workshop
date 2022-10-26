<?php 

require_once 'config.php';

if  ( !(isset($_POST['full_name']) && $_POST['full_name'] != "")  ){
    die("You are not allowed to this page directly");
}

$full_name = $_POST['full_name'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];
$contact_group = $_POST['contact_group'];

$SQL = "
INSERT INTO
    `contacts`
    (
        `id`,
        `full_name`,
        `email_id`,
        `phone_no`,
        `contact_group`
    )
    VALUES
    (
        NULL,
        '{$full_name}',
        '{$email_id}',
        '{$phone_no}',
        '{$contact_group}'
    )";


if($cn->query($SQL)){
    // success
    header("Location: index.php");
}
