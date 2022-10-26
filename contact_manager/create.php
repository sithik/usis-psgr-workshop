<html>
	<head>
		<title>Create</title>
	</head>
	<body>
    	<h1>New Contact</h1>
    	<form action="create_action.php" method="post">


<p>Full Name<br>
<input type="text" name="full_name">
</p>
<p>Email ID<br>
<input type="text" name="email_id">
</p>
<p>Phone No<br>
<input type="text" name="phone_no">
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

<input type="submit" name="submit" value="Create">


    	</form>	
	</body>
</html>