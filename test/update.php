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
	
.ex{
    
    float:right;
    width:10%;
}

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
	<a href="adminaddproduct.php"></a>
	<a href="logout.php"></a>
	<a href="viewuser.php">.</a>
	<a href="index123.php"></a>
</div>


	<?php if (isset($_SESSION['msg'])); ?>
	<div class="ex">
        <center><a class="btnEmpty" href="editing.php"><img src="ex-png.png" width="30%"/></a></center>
	</div>
	<br><br><br><br>
	<div class="text">
		<h1>Edit Product</h1>
	</div>
	<div class="Covers">
	<br><br><br><br>
	<div class="bg-img">
	<br><br><br><br>
	
<div class="covering" style="padding-bottom: 70px;">

	<form method="post" action="editing.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	  	
		<div class="input-group">
			<b>Name</b><br>
			<input type="text" name="name" placeholder="Pizza" value="<?php echo $name; ?>">
		</div>

		<div class="input-group">
			<b>Code</b><br>
			<input type="text" name="code" placeholder="LA" value="<?php echo $code; ?>">
		</div>

		<div class="input-group">
			<b>Image</b><br>
			<input type="file" name="image" placeholder="" value="<?php echo $image; ?>">
		</div>

		<div class="input-group">
			<b>Price</b><br>
			<input type="text" name="price" placeholder="R" value="<?php echo $price; ?>">
		</div>
		
		<div class="input-group">
		<?php if ($edit_state == true): ?>	
		<button type="submit" name="update" class="btnEmpty">update</button>
		<?php else: ?>

		<?php endif ?>	

		</div>				
	</form>

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