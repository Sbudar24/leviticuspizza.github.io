<?php
	session_start();
	// initialize variables
	$name = "";
	$code = "";
	$image= "";
	$price= "";
	$id = 0;
	$edit_state = false;

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'myecommerce');

	// if save button is clicked
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$code = $_POST['code'];
		$image = $_POST['image'];
		$price = $_POST['price'];
		$_SESSION['msg'] = "Order saved";

		$query = "INSERT INTO product (name, code, image, price) Values ('$name', '$code', '$image', '$price')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "Order saved";
		header('location: editing.php'); // redirect to index page after inserting
	}

	// upadate records
	if (isset($_POST['update'])) {
	   $name = mysql_real_escape_string($_POST['name']);
	   $code = mysql_real_escape_string($_POST['code']);
	   $image = mysql_real_escape_string($_POST['image']);
	   $price = mysql_real_escape_string($_POST['price']);
	   $id = mysql_real_escape_string($_POST['id']);

	   mysqli_query($db, "UPDATE product SET name='$name', code='$code', image='$image', price='$price' WHERE id=$id");
	   $_SESSION['msg'] = "Order updated";
	   header('location:editing.php');
    }


	//retrieve records
	$results = mysqli_query($db, "SELECT * FROM product");


?>