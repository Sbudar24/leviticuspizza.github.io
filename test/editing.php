<?php include('conect101.php'); 

	//fetch the record to be update
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM product WHERE id=$id");
		$record = mysqli_fetch_array($rec);
		$name = $record['name'];
		$code = $record['code'];
		$image = $record['image'];
		$price = $record['price'];
		$id = $record['id'];
	}
	
?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Edit product</title>
	<link rel="icon" type="image/ico" href="logo.jpg" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
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
<body>
<div id="navbar">
        <a href="logout.php">Log Out</a>
    	<a href="admin registration.php">Register</a>
        <a href="view users.php">View Users</a>
        <a href="Admin product.php">Delete Order</a>
        <a class="active" href="editing.php">Edit Order</a>
        <a href="add product.php">New Order</a>
        <a href="admin.php"><b>Home</b></a>            
    </div>


	<?php if (isset($_SESSION['msg'])); ?>
		
	<!--?php endif ?-->
	<br><br>
	<div class="text">
		<h1>Edit Order</h1>
	</div>
	<br><br><br><br>
<div class="Covers">
	<div class="bg-img">
		<div class="wrap">
	<table>
		<thead>
			<tr>
			  <th style="text-align:left; width:28%;">Name</th>
			  <th style="text-align:left; width:7%;">Code</th>
			  <th style="text-align:center; width:15%;">Image</th>
			  <th style="text-align:left; width:10%;">Price</th>
			  <th style="text-align:left; width:1%;">Action</th>
			</tr>
		</thead>
	

		<tbody>
			<?php while ($row = mysqli_fetch_array($results)) { ?>
			   <tr>
				  <td style="width:25%;"><?php echo $row['name']; ?></td>
				  <td style="width:5%;"><?php echo $row['code']; ?></td>
				  <td style="width:10%;"><?php echo $row['image']; ?></td>
				  <td style="width:10%;"><?php echo $row['price']; ?></td>
				  <td style="width:1%;">
				  	<a class="btnEmpty" href="update.php?edit=<?php echo $row['id']; ?>">Edit</a>
				  </td>
			   </tr>				
			<?php } ?>

		</tbody>
	</table>
	</div>
	</div>
</div>	
<br><br>
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