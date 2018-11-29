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
                    background-color:#b4a892;
                    color: #ffffff;
                    border-radius: 25px;
                    font-weight: bold;
                    font-size: 20px;
                    transition: all 0.4s ease-in-out;
                    opacity: 0.9;
}

input[type="submit"]:hover {
                    background-color:rgb(248, 248, 233);
                    color:#b4a892;
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
    	<a href="Login.php">LogIn</a>
        <a href="Registration.php">Register</a>
    	<a class="active" href="Products.php">Order</a>
        <a href="index.php">Home</a>           
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
	<div id="product-grid">
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img class="size" src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "R".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" placeholder="1" value="" size="2" /><br><br><a class="mybutton" href="registration.php">Order</a></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
	
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