<?php
	session_start();
	require_once'connection.php';
	$msg="";
	
	if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		
		$change=mysqli_query($conn, "DELETE from product WHERE id='$id'");
		
		if($change)
		{
			$msg="Order Deleted";
		}
		else
		{
			$msg="Order Not Deleted";
		}
	}
	
	
?>

<!DOCTYPE HTML>
<html lang="eng">

<head>
	<link rel="icon" type="image/ico" href="logo.jpg" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<title>Delete Order</title>
<style>
.bg-img {
    /* The image used */
    background-image: url("Dominos-presenta-sus-nuevas-pizzas-sin-gluten.jpg");
	opacity: 0.8;
    min-height: 650px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}  	

</style>
</head>
<body>
	<div id="navbar">
		<a href="logout.php">Log Out</a>
		<a href="admin registration.php">Register</a>
        <a href="view users.php">View Users</a>
        <a class="active" href="Admin product.php">Delete Order</a>
		<a href="editing.php">Edit Order</a>
        <a href="add product.php">New Order</a>
        <a href="admin.php"><b>Home</b></a>          
    </div>

<br><br>
	<div class="text">
		<h1>Delete Order</h1>
	</div>
	<br><br><br><br>
	<div class="Covers">
	<div class="bg-img">
		<div class="wrap">	
	<table>
<tbody>
<tr>
		<th style="text-align:left;" width="25%">Name</th>
		<th style="text-align:left;" width="15%">Code</th>
		<th style="text-align:left;" width="10%">Price</th>
		<th style="text-align:center;" width="1%">Action</th>
</tr>
		
<?php

	$query=mysqli_query($conn, "SELECT * from product");
	
	while($row=mysqli_fetch_array($query))
		
		{
			$id=$row[0];
			$Name=$row['name'];
			$Code=$row['code'];
			$Price=$row['price'];
		
		
			echo"<tr>
			<td>$Name</td>
			<td>$Code</td>
			<td>$Price</td>
			<td class='btnEmpty'><a href='Admin product.php?delete=$id'>DELETE</a></td>
			</tr>";

		}
?>
</div>
</tbody>
</table>
</div>
</div>
<br>
	
<footer>
        <div class="iconbar">
            <div class="sicons">
                <a href="https://www.facebook.com/"> <img src="logo/social-facebook-circle-512.png" width="3%"></a>
                <a href="https://plus.google.com/discover"> <img src="logo/Google-plus-circle-icon-png.png" width="3%"></a>
                <a href="https://www.instagram.com/"> <img src="logo/social-instagram-new-circle-512.png" width="3%"></a>
                <a href="https://za.pinterest.com/"> <img src="logo/pinterest-512.png" width="3%"></a>
                <a href="https://www.snapchat.com/"> <img src="logo/snapchat-512.png" width="3%"></a>
                <a href="https://twitter.com/login"> <img src="logo/twitter_circle-512.png" width="3%"></a>
            </div>
        </div>
            &copy;2018 designed by S. M Web Studio
    </footer>

</body>
</html>

