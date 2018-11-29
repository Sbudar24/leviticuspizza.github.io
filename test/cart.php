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
	<title>My Order</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/ico" href="logo.jpg" />
</head>
<style>

.bg-img {
            background-image: url("myPizza/logo.jpg");
            min-height: 663px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
}   

.myImage    {
                position:absolute;
}

</style>
<body>
	<div id="navbar">
		<a href="logout.php">Log Out</a>
		<a href="form-checkout.php">Checkout</a>
		<a class="active" href="cart.php">My Order</a>
    	<a href="User Products.php">Order</a>
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

<br><br><br><br>
<div id="shopping-cart">
<div class="text">
	<h1>My Order</h1>
</div>
<br><br><br>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<br><br><br><br><br><br><br><br>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
		<th style="text-align:center;" width="10%">Pizza</th>
		<th style="text-align:center;" width="10%">Name</th>
		<th style="text-align:center;" width="5%">Code</th>
		<th style="text-align:center;" width="5%">Quantity</th>
		<th style="text-align:center;" width="10%">Price</th>
		<th style="text-align:center;" width="10%">Total Price</th>
		<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /></td>
				<td style="text-align:center;"><?php echo $item["name"]; ?></td>
				<td style="text-align:center;"><?php echo $item["code"]; ?></td>
				<td style="text-align:center;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:center;"><?php echo "R ".$item["price"]; ?></td>
				<td  style="text-align:center;"><?php echo "R ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="images/recycle_bin_358196.png" width="50%" alt="Remove Item" /></a></td>
				
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="3" align="right">Total:</td>
<td align="center"><?php echo $total_quantity; ?></td>
<td align="center" colspan="2"><strong><?php echo "R ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">No Orders Available</div>

<?php 
}
?>
</div>

<br><br>
<a class="mybutton" href="form-checkout.php">Checkout</a> <a class="btnEmpty" href="User Products.php">Continue Ordering </a> <a class="Empty" href="cart.php?action=empty">Empty Cart</a>
<br><br><br>
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

<script>
function saveCart(obj) {
	var quantity = $(obj).val();
	var code = $(obj).attr("id");
	$.ajax({
		url: "?action=edit",
		type: "POST",
		data: 'code='+code+'&quantity='+quantity,
		success: function(data, status){$("#total_price").html(data)},
		error: function () {alert("There was a connection problem. Please check your connection settings and re-send your reply. Thank You")}
	});
}
</script>

</body>
</html>
