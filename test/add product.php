<?php
require('connection.php');
$msg="";
if(isset($_POST['submit']))
{
    $Name = stripslashes(trim($_POST['Name']));
    $Code = stripslashes(trim($_POST['Code']));
    $Image = stripslashes(trim($_POST['Image']));
    $Price = stripslashes(trim($_POST['Price']));
    

$query = mysqli_query($conn, "INSERT INTO product values ('null','$Name','$Code','$Image','$Price')");
        $result = mysqli_query($conn, $query);

if($query )
{
    $msg="Order Added";
    header("location:admin product.php");
}

else
{
    $msg="Order Not Added";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
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

</style>
<body>
    	<div id="navbar">
    		<a href="logout.php">Log Out</a>
    		<a href="admin registration.php">Register</a>
        	<a href="view users.php">View Users</a>
        	<a href="Admin product.php">Delete Order</a>
            <a href="editing.php">Edit Order</a>
        	<a class="active" href="add product.php">New Order</a>
        	<a href="admin.php"><b>Home</b></a>          
    </div>
    <br><br>
    <div class="text">
            <h1>Add A New Order</h1>
        </div>
        <br><br><br><br>
<div class="Covers">
    <div class="bg-img">
    <br><br><br> 
        <div class="covering">
                <form method="POST" action="">
                    Name<br>
                    <input type="text" placeholder="Pizza" name="Name"/><br>
                    Code<br>
                    <input type="text" placeholder="LP" name="Code"><br>
                    Image<br>
                    <input type="file" placeholder="" name="Image" ><br>
                    Price<br>
                    <input type="number" placeholder="R" name="Price"/><br>
                    <?php echo $msg;?>
                    <input type="submit" name="submit"><br>
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