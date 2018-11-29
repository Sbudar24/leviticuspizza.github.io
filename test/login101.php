<?php include('function.php') ?>
<!DOCTYPE html>
<html>

        <head>
                <!-- Using A Mate -->
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>LogIn</title>
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
    /* The image used */
    background-image: url("Dominos-presenta-sus-nuevas-pizzas-sin-gluten.jpg");
	opacity: 0.8;
    min-height: 650px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}  	

.myImage    {
                position:absolute;
                z-index:999;
}

</style>
<body>
    <!--creating a navigation container-->
    <div id="navbar">
        <a class="active" href="Login.php"><b>LogIn</b></a>
        <a href="Registration.php">Register</a>
        <a href="Products.php">Order</a>
        <a href="index.php">Home</a>            
    </div>
    <div class="myImage">
        <img src="myPizza/logo.jpg" style="width:35%; box-shadow:0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0);">
    </div>
    <!-- End -->
    
        <br><br><br><br>
        <!-- Inserting a text container  -->
        <div class="text">
            <h1>LogIn</h1>
        </div>
        <br><br><br><br>
        
        <div class="Covers">
        <!-- Inserting a background image -->
        <div class="bg-img">
        <br><br><br><br><br><br>
            <!-- Inserting a wrapper -->
		    <div class="covering">
            <!-- End -->
                <!-- Inserting a Form -->
        		<form method="POST" action="">
                    <br>
                    <input type="hidden" name="Role">
                    <b>Username<b><br>
            		<input type="text" placeholder="Username" name="Username"><br>
                    <b>Password<b><br>
                    <input type="password" placeholder="Password" name="Password"><br>
                    <br>
                    <div class="echomsg">
                    </div><br>
                    <input type="submit"  value="LogIn" name="LogIn"><br>
                    <br>
                </form>
                <!-- End -->
            </div>
        <!-- End -->
    </div>
    <!-- End -->
    </div>
    <br><br>
    <!-- End -->
    <!-- Inserting a footer -->
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