<?php include('functions.php');?>
<?php
    require '_database/database.php';

    error_reporting(0);
    ini_set ('display errors',0);

    $user_username=$_SESSION['user_username'];
?>    
<?php
    if(!$_SESSION['user_username']){
    }
?>
<?php
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>
<?php
    }
?>  
<?php 
    if($_GET["request"]=="profile-update" && $_GET["status"]=="success"){
        $dialogue="Your profile update was successful! ";
    }
    else if($_GET["request"]=="profile-update" && $_GET["status"]=="unsuccess"){
        $dialogue="Your profile update was not at all successful! ";
    }
    else if($_GET["request"]=="login" && $_GET["status"]=="success"){
        $dialogue="Welcome back again! ";
    }
?>

<!DOCTYPE html>
<head>
    <!-- Using A Mate -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add A CSS Hyperlink -->
    <link rel="icon" type="image/ico" href="logo.jpg" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- End -->
    <!-- Add A JavaScript Hyperlink -->
    <script src="js/script.js"></script>
    <!-- End -->
</head>
    <style>
        .bg-img {
                    background-image: url("myPizza/logo1.jpg");
                    min-height: 663px;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
        } 

        .myCol > .con {
  padding: 0 8px;
}

.myCol:after {
  content: "";
  display: table;
  clear: both;
}

.con {
  float: left;
  width: 30%;
}

.myImage    {
                position:absolute;
}
    </style>
<body>
    <!--creating a navigation container-->
	<div id="navbar">
		<a href="form-checkout.php">Checkout</a>
    	<a href="cart.php">My Order</a>
    	<a href="User Products.php">Order</a>
        <a class="active" href="home page.php">Home</a>  
        <a href="home.php" style="float:left;">Profile</a>
        <a href="logout.php" style="float:left;">Log Out</a>
    </div>
    <div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
                    ?>
                    
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
            <img src="icons/profile-icon-4.png" style="width:45%; margin:10px;" >
		<div>
				<?php  if (isset($_SESSION['User'])) : ?>
					<strong>
						<?php echo $_SESSION['User']['Username']; ?>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['User']['Role']); ?>)</i> 
					</strong>
				<?php endif ?>
			</div>
		</div>
	</div>
    <div class="myImage">
        <img src="myPizza/logo.jpg" style="width:35%; box-shadow:0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0);">
    </div>
     
    <br><br><br>
    <!-- End -->
    <div class="Covers">
        <center><img src="myPizza/EARLY-BIRD-LOGO-300x209.png" style="width:25%"></center>
        <div class="myCol">
            <div class="con">
                <img src="myPizza/pizza-king-arthur.png">
            </div>

            <div class="con">
                <img src="myPizza/pizza-king-arthur.png">
            </div>

            <div class="con">
                <a href="Registration.php"><img src="myPizza/Garcinia-banner-open-970x250px-01.png" style="width:90%"></a>
            </div>
        </div>
    </div>
<!-- Inserting a background image -->
       
        <!-- End -->
    <!-- Inserting a footer -->
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
    <!-- End -->


</body>
</html>
