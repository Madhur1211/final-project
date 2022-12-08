<!--including header-->
<?php require './inc/header.php'?>
<!-- link to index page-->
	<a href="index.php">Go to Home</a>
	<br/><br/>
<!-- form -->
	<form action="add.php" method="post" name="form1">
        <!-- Table -->
		<table width="25%" border="0" class="table table-striped">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
        //variables
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];

		
		// include database connection file
		include_once("db.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "Employee added successfully. <a href='index.php'>View Employees</a>";
	}
	?>
<!--including footer-->
<?php require './inc/footer.php'?>
</body>
</html>
