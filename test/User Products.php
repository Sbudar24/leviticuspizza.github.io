<?php
	session_start();
	require_once("connect.php");
	
	$db_handle = new Connect();
	if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	

}
}
?>
<html>
<head>
	<title>Place An Order</title>
	<link rel="icon" type="image/ico" href="logo.jpg" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<style>
	.product-image      {
                        	height:55%;
                        	width:auto;
                        	background-color:#FFF;
}

	#product-grid 		{
							margin-bottom:10px; 
							width: 100%;
							font-size: 27px;
							text-align:center;
}


	.product-item 		{	
    						box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0.21);
    						border-radius: 20px;
							margin: 15px;
    						padding: 20px;
    						width: 41%;
    						display: inline-block;
							position:relative;
							color:#b4a892;
							background-color:#ffffff;
}

	.product-price 		{	color:#b4a892;
}

	.product-quantity	{border: #b4a892 solid;

}

input[type="submit"]{
                    width: 50%;
                    margin-left:1%; 
                    border: none;
                    cursor: pointer;
                    background-color:#463634;
                    color: #ffffff;
                    border-radius: 25px;
                    font-weight: bold;
                    font-size: 20px;
                    transition: all 0.4s ease-in-out;
                    opacity: 0.9;
}

input[type="submit"]:hover {
                    background-color:#e64933;
                    color:#ffffff;
                    transition: all 0.4s ease-in-out;
                    opacity: 0.9;
}

.myImage    {
                position:absolute;
}

.ss-content {max-width:950px;
                    margin:auto;
                    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0.21);
                    border-radius: 20px;
        }  

        .mySlides{
                   border-radius:20px;
        }
        

</style>
<body>
    <!--creating a navigation container-->
    <div id="navbar">
    	<a href="logout.php">Log Out</a>
    	<a href="form-checkout.php">Checkout</a>
    	<a href="cart.php">My Order</a>
    	<a class="active" href="User Product.php">Order</a>
        <a href="home page.php">Home</a>           
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

		<br><br><br><br><br>
		<div class="text">
			<h1>Place An Order</h1>
		</div>
		<br><br><br><br><br><br>
	
	<div class="ss-content">
            <img class="mySlides" src="myPizza/Animated GIF-source (1).gif" style="width:100%" height="450px">
            <img class="mySlides" src="myPizza/Animated GIF-source (3).gif" style="width:100%" height="450px">
            <img class="mySlides" src="myPizza/Animated GIF-source (2).gif" style="width:100%" height="450px">
        </div>
        
	</div>
	<div id="product-grid">
	<br>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<input type="hidden" name="Username">
			<form method="post" action="?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img class="size" src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "R".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" placeholder="1" value="" size="2" /><input type="submit" value="Order"/></div>
			</div>
			</form>
		</div>
	<?php
		}
	}

	?>
	
<br><br>
<a class="mybutton" href="cart.php">Check My Order </a>
<br><br>
	</div>

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
<!-- script -->
<script>

var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none"; 
}
myIndex++;
if (myIndex > x.length) {myIndex = 1} 
x[myIndex-1].style.display = "block"; 
setTimeout(carousel, 3500); // Change image every 3 seconds
}

</script>
<!-- End -->
</body>
</html>