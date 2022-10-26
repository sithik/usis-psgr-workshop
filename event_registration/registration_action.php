<?php 
require_once 'config.php';

if  ( !(isset($_POST['student_name']) && $_POST['student_name'] != "")  ){
    die("You are not allowed to this page directly");
}

$student_name 	= $_POST['student_name'];
$college_name 	= $_POST['college_name'];
$city 			= $_POST['city'];
$student_roll_no= $_POST['student_roll_no'];
$email_id 		= $_POST['email_id'];
$phone_no 		= $_POST['phone_no'];
$competition 	= $_POST['competition'];
$comments 		= $_POST['comments'];
$registration_date = date("Y-m-d H:i:s");

$SQL = "
INSERT INTO 
    `event_registrations` 
    (
        `id`, 
        `student_name`, 
        `college_name`, 
        `city`, 
        `student_roll_no`, 
        `email_id`, 
        `phone_no`, 
        `competition`, 
        `comments`, 
        `registration_date`
    ) 
    VALUES 
    (
        NULL, 
        '{$student_name}', 
        '{$college_name}', 
        '{$city}', 
        '{$student_roll_no}', 
        '{$email_id}', 
        '{$phone_no}', 
        '{$competition}', 
        '{$comments}', 
        '{$registration_date}'
    )";

if($cn->query($SQL)){
    // success
    $registration_id = $cn->insert_id;
    header("Location: thank_you.php?reg_id=".$registration_id);
}


