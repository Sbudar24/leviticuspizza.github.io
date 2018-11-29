<?php include('connect202.php'); 

	//fetch the record to be update
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM registration WHERE UserId='$id' ");
		$record = mysqli_fetch_array($rec);
		$username = $record['Username'];
		$email = $record['Email'];
		$image = $record['Image'];
		$id = $record['UserId'];
	}
	
	?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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
.ex{
    
    float:right;
    width:10%;
}

</style>
<body>
<div class="ex">
        <center><a class="btnEmpty" href="home page.php"><img src="ex-png.png"  width="23%"/></a></center>
    </div>
    <br><br><br>
    <div class="text">
            <h1>Profile</h1>
        </div>
        <br><br><br><br>
<div class="Covers">
    <div class="bg-img">
    <br><br><br><br><br><br>
        <div class="covering">
                <form method="POST" action="">
                <br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    Profile Picture<br>
                    <input type="file" placeholder="" name="image" value="<?php echo $image; ?>"><br>
                    Username<br>
                    <input type="text" placeholder="" name="username" value="<?php echo $username; ?>"><br>
                    Email<br>
                    <input type="email" placeholder="" name="email" value="<?php echo $email; ?>"><br>
                    
		            <?php if ($edit_state == true): ?>	
		            <button type="submit" name="update" class="btnEmpty">update</button>
		            <?php else: ?>
		            <button type="submit" name="save" class="btnEmpty">save</button>
		            <?php endif ?>	
                    <br><br><br>
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

</body>
</html>