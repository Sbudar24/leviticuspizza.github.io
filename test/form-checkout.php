<?php
	session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="icon" type="image/ico" href="logo.jpg" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

#checkOut {
  background-color: #e64933;
  color:#F8F8E9;
  opacity: 0.8;
  margin: 3% 15% 3% 15%;
  border: 1px solid #000;
  padding: 2%;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0.21);
  border-radius: 20px;
  overflow: hidden;
}

.myImage    {
                position:absolute;
  			
}

select             {
                    width: 9%;
                    border: #123;
                    border-radius: 20px;
                    padding: 15px;
                    margin-top: 12px;
                    margin-bottom: 14px;
                    font-size: 16px;
                    opacity: 0.9;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

</style>
<body>
	<div id="navbar">
		<a href="logout.php">Log Out</a>
		<a class="active"  href="form-checkout.php">Checkout</a>
    	<a href="cart.php">My Order</a>
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

<br><br><br><br><br>
<div class="text">
	<h1>Checkout<br>
  Payment Details</h1>
</div>
<br><br><br><br>
<form method="POST" action="pop-up.php">
<br><br><br>
  <div id="checkOut">
  <div class="form-row">
    <div class="form-group col-md-6">
      Card Holder Name<br>
      <input type="text" class="form-control" id="cardName" placeholder="Leviticus Pizza">
    </div>
    <div class="form-group col-md-6">
      Address<br>
      <input type="text" class="form-control" id="cardName" placeholder="123 Jeppe str, Johnnesburg, 2001">
    </div>
    <div class="form-group col-md-6">
      Accepted Cards<br>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
      </div>
      Card Number<br>
      <input type="password" class="form-control" id="cardNum" placeholder="1234567890098765">
    </div>
    <div class="form-row">
  <div class="form-group col-md-4">
    Expiration Date: Month<br>
    <select id="endDate" class="form-control">
      <option selected>01</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
    </select>
      </div>
    <div class="form-group col-md-4">
      Year<br>
    <select id="endDate" class="form-control">
      <option selected>2018</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
    </select>
  </div>
  
    <div class="form-group col-md-4">
      CVV<br>
      <input type="text" class="form-control" id="cVV" placeholder="123">
    </div>
  </div>
 
  <button class="btn btn-primary">submit</button>
</div>
</form>
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

</body>
</html>