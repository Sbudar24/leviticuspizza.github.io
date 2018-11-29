<?php
	session_start();
	// initialize variables
	$username = "";
	$email = "";
	$image = "";
	$role= "";
	$id = 0;
	$edit_state = false;

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'myecommerce');

		// if save button is clicked
		if (isset($_POST['save'])) {
			$username = $_POST['Username'];
			$email = $_POST['Email'];
			$image = $_POST['Image'];
			$role = $_POST['Role'];
			$_SESSION['msg'] = "User updated";
	
			$query = "INSERT INTO registration (Username, Email, Image, Role) Values ('$username', '$email' , '$image', '$role')";
			mysqli_query($db, $query);
			$_SESSION['msg'] = "User updated";
			header('location: edit user.php'); // redirect to index page after inserting
		}
	// upadate records
	if (isset($_POST['update'])) {
	   $username = mysql_real_escape_string($_POST['Username']);
	   $email = mysql_real_escape_string($_POST['Email']);
	   $image = mysql_real_escape_string($_POST['Image']);
	   $role = mysql_real_escape_string($_POST['Role']);
	   $id = mysql_real_escape_string($_POST['UserId']);

	   mysqli_query($db, "UPDATE registration SET Username='$username', Email='$email', Image='$image', Role='$role' WHERE UserId='$id' ");
	   $_SESSION['msg'] = "User updated";
	   header('location:edit user.php');
    }


	//retrieve records
	$results = mysqli_query($db, "SELECT * FROM registration");


?>