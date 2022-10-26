<?php 

require_once 'config.php';

if  ( !(isset($_GET['id']) && $_GET['id'] != "")  ){
    die("You are not allowed to this page directly");
}

$id = $_GET['id'];

$SQL = "select * from contacts where id = '". $id."'";
$results = $cn->query($SQL);

$row = $results->fetch_assoc();

?>
<html>
	<head>
		<title>Edit</title>
	</head>
	<body>
    	<h1>Edit Contact</h1>
    	<form action="edit_action.php" method="post">

<p>ID<br>
<?php echo $row['id']; ?>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
</p>

<p>Full Name<br>
<input type="text" name="full_name" value="<?php echo $row['full_name']; ?>">
</p>
<p>Email ID<br>
<input type="text" name="email_id" value="<?php echo $row['email_id']; ?>">
</p>
<p>Phone No<br>
<input type="text" name="phone_no" value="<?php echo $row['phone_no']; ?>">
</p>
<p>Group<br>
<select name="contact_group">
	<option value="Friends">Friends</option>
	<option value="Family">Family</option>
	<option value="Office">Office</option>
	<option value="College">College</option>
	<option value="School">School</option>
	<option value="Other">Other</option>
</select>
</p>

<input type="submit" name="submit" value="Edit">


    	</form>	
	</body>
</html>