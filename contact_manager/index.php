<?php 

require_once 'config.php';

$SQL = "select * from contacts";
$results = $cn->query($SQL);

?>

<h1>Contact Manager</h1>

<a href="create.php">Create New Contact</a><br>


<table border=1>
	<tr>
		<td>ID</td>
		<td>Full Name</td>
		<td>Email ID</td>
		<td>Phone No</td>
		<td>Group</td>
		<td>Action</td>
	</tr>
	<?php
	if($results->num_rows > 0)
	{
	    while($row = $results->fetch_assoc()){
        	?>
        	<tr>
        		<td><?php echo $row['id']; ?></td>
        		<td><?php echo $row['full_name']; ?></td>
        		<td><?php echo $row['email_id']; ?></td>
        		<td><?php echo $row['phone_no']; ?></td>
        		<td><?php echo $row['contact_group']; ?></td>
        		<td>
        			<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> -  
        			<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        		</td>
        	</tr>
        	<?php 
	    }
	}
	else{
	    ?>
    	<tr>
    		<td colspan=6>No records available</td>
    	</tr>
    	<?php 
	}
	?>
</table>
<?php echo "Total records: ". $results->num_rows . "<br>"; ?>