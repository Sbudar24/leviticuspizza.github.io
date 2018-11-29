<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
                <!-- Using A Mate -->
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Registration</title>
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
        <a href="Login.php">LogIn</a>
        <a class="active" href="Registration.php"><b>Register</b></a>
        <a href="Products.php">Order</a>
        <a href="index.php">Home</a> 
	</div>
    <div class="myImage">
        <img src="myPizza/logo.jpg" style="width:35%; box-shadow:0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0);">
    </div>
    <!-- End -->
    
        <br><br><br><br>
        <div class="text">
    		<h1>Registration</h1>
        </div>
        <br><br><br><br>
        <!-- Inserting a text container  -->
    	
        <!-- End -->
        <div class="Covers">
            
        <!-- Inserting a background image -->
    <div class="bg-img">
    <br><br><br><br><br><br>
        <!-- Inserting a wrapper -->
        <div class="covering">
                <!-- Inserting a Form -->
                <form method="POST" action="registration.php">
                <?php echo display_error(); ?>
                <br>
                    <b>Username<b><br>
                    <input type="Username" placeholder="Megan Johnson" name="Username" value="<?php echo $username; ?>"><br>
                    <b>Email<b><br>
                    <input type="email" placeholder="meganjohnson@outlook.com" name="Email" value="<?php echo $email; ?>"><br>
                    <b>Password<b><br>
                    <input type="Password" placeholder="" name="Password" >
                    <div class="echomsg">
                        
                    </div><br>
                        <!-- Inserting a button container -->
                        <div class="container">
                            <input type="submit" value="Register" name="register"><br>
                            <center>Already Registered?<br> 
                            <a href="Login.php">LogIn</a></center>
                        </div>
                        <!-- End -->
                </form>
                <!-- End Form-->
            </div>
            <!-- End -->
        </div>
        <!-- End -->
        <br><br>
    </div>   
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
            &copy;2018 designed by S. M Studio
    </footer>
    <!-- End -->
</body>
</html>