<?php
	session_start();
	require_once 'connection.php';
	$msg="";
	
	if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$change=mysqli_query($conn,"DELETE from registration WHERE UserId=$id");
		
		if($change)
		{
			$msg="Deleted";
		}
		else
		{
			$msg="NOT Deleted";
		}
	}
		
		if(isset($_GET['update']))
	{
		$id=$_GET['update'];
		$change=mysqli_query($conn,"UPDATE from registration WHERE UserId=$id");
		
		if($change)
		{
			$msg="Updated";
		}
		else
		{
			$msg="NOT Updated";
		}
	}
?>

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

<!DOCTYPE HTML>
<html>
		<head>
				<title>View Users</title>
                <!-- Using A Mate -->
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- Add A CSS Hyperlink -->
				<link rel="icon" type="image/ico" href="logo.jpg" />
                <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
                <!-- End -->
                <!-- Add A JavaScript Hyperlink -->
                <script src="js/script.js"></script>
                <!-- End -->
		</head>
	<body>
		<div id="navbar">
			<a href="logout.php">Log Out</a>
			<a href="admin registration.php">Register</a>
        	<a class="active" href="view users.php">View Users</a>
        	<a href="Admin product.php">Delete Order</a>
			<a href="editing.php">Edit Order</a>
        	<a href="add product.php">New Order</a>
        	<a href="admin.php"><b>Home</b></a>          
		</div>
		<br><br>
			<div class="text">
				<h1>View Users</h1>
			</div>
			<br><br><br><br>
			<div class="Covers">
		<div class="bg-img">
			<div class="wrap">
		<table cellpadding="3" cellspacing="7" style="Color:white; font-size:27px; padding:10px;">
				<thead>
					<tbody>
						<tr>
							<th style="text-align:left;" width="30%">Username</th>
							<th style="text-align:left;" width="15%">Role</th>
							<th style="text-align:left;" width="35%">Email</th>
							<th style="text-align:left;" width="15%">Delete</th>
							<th style="text-align:left;" width="15%">Edit</th>
					</tr>			
				</thead>
			<tbody>

					<?php

						$query=mysqli_query($conn,"SELECT * from registration ");

							while($row=mysqli_fetch_array($query))
							{
								$Id=$row[0];
								$Username=$row['Username'];
								$Role=$row['Role'];
								$Email=$row['Email'];

								echo "<tr>
								<td>$Username</td>
								<td>$Role</td>
								<td>$Email</td>
								<td class='center'><a href='view users.php?delete=$Id'>Delete</a></td>	
								<td class='center'><a href='edit user.php?update=$Id'>Edit</a></td>
								</tr>";

							}

					?>
			</tbody>
		</table>
		</div>
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