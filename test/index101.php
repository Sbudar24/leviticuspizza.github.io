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
    /* The image used */
    background-image: url("Dominos-presenta-sus-nuevas-pizzas-sin-gluten.jpg");
	opacity: 0.8;
    min-height: 650px;

    /* Center and scale the image nicely */
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

/* Add styles to the form container */
.col2  {
        width: 35%;
        float: left;
        border-radius: 10px;
        padding: 15px;
        margin-left:700px;
        margin-top:9%;
        visibility: visible;
        animation-delay: 0.9s;
        animation-name: fadeInUp;}


/* Full-width input fields */
form    {
    display: block;
    margin-top: 0em;
}

input[type="text"],select,textarea
{
    width: 94%;
    border: #123;
    border-radius: 5px;
    padding: 15px;
    margin-top: 12px;
    margin-bottom: 14px;
    font-size: 16px;
    opacity: 0.9;
}
    </style>
<body>
    <!--creating a navigation container-->
	<div id="navbar">
        <a href="Login.php">LogIn</a>
        <a href="Registration.php">Register</a>
        <a href="Products.php">Order</a>
        <a class="active" href="index.php"><b>Home</b></a>          
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
<br><br><br> 
<hr>

<br><br><br> 
<div class="text">
<h1>Contact Us</h1>
</div>
<br><br><br><br>
       		<div class="wrapper">
			<div class="bg-img">
  				<div class="col2">
        			<form>
            			<input type="text" placeholder="Name"><br>
            			<input type="email" placeholder="Email"><br>
            			<textarea type="msg" placeholder="Message"  style="height:100px;" "font-size:16px;"></textarea><br>
            			<input type="submit" value="SEND EMAIL"><br>
        			</form>
				</div>
			</div>
			</div>
		<br><br>
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