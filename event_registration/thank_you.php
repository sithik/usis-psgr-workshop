<?php 
if  ( !(isset($_GET['reg_id']) && $_GET['reg_id'] != "")  ){
    die("You are not allowed to this page directly");
}
?>
<h1>Thank you</h1>
<p>Your registration is successfully recorded. You will get the event ID in email later.</p>
<p>Registration ID: <b><?php echo $_GET['reg_id']; ?></b></p>
