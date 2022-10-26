<html>
	<head>
		<title>Event Registration</title>
	</head>
	<body>
    	<h1>Event Registration</h1>
    	<form action="registration_action.php" method="post">


<p>Student Name<br>
<input type="text" name="student_name">
</p>
<p>College<br>
<input type="text" name="college_name">
</p>
<p>City<br>
<input type="text" name="city">
</p>
<p>Student Roll No<br>
<input type="text" name="student_roll_no">
</p>
<p>Email ID<br>
<input type="text" name="email_id">
</p>
<p>Phone No<br>
<input type="text" name="phone_no">
</p>
<p>Competition<br>
<select name="competition">
	<option value="Paper Presentation">Paper Presentation</option>
	<option value="Quiz">Quiz</option>
	<option value="LiveCode">LiveCode</option>
	<option value="Debugging">Debugging</option>
</select>

</p>
<p>Comments<br>
<textarea name="comments" rows=5 cols=30>
</textarea></p>
<input type="submit" name="submit" value="Register">


    	</form>	
	</body>
</html>