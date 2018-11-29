<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'myecommerce');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['LogIn'])) {
	login();
}

// REGISTER USER
function login(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$Username = stripslashes(trim($_POST['Username']));
    $Password = stripslashes(trim($_POST['Password']));
    $Role = stripslashes(trim($_POST['Role']));

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		if (isset($_POST['Role'])) {
			$Role = trim($_POST['Role']);
			$query = "SELECT INTO registration (Username, Role, Password) 
					  VALUES('$username', '$Role', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: User Products.php');

		}else{
			$query = "SELECT INTO registration (Username, Role, Password) 
					  VALUES('$username', '$email', '$Role', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['Role'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "<center>Welcome To <i>Leviticus Pizza</i></center>";
			header('location:add product.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM registration WHERE UserId=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	