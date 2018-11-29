<?php
require('connection.php');
$msg="";
if(isset($_POST['Register']))
{
    $Username = stripslashes(trim($_POST['Username']));
    $Email = stripslashes(trim($_POST['Email']));
    $Password = stripslashes(trim($_POST['Password']));
    $Role = stripslashes(trim($_POST['Role']));

$query = mysqli_query($conn, "INSERT INTO registration values ('null','$Username','$Email','$Password','$Role')");
        $result = mysqli_query($conn, $query);

if($query)
{
    $msg= "Registration Successful";
}

else
{
    $msg="Registration Unsuccessful";
}

}
?>

<!DOCTYPE html>
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

select             {
                    width: 100%;
                    border: #123;
                    border-radius: 20px;
                    padding: 15px;
                    margin-top: 12px;
                    margin-bottom: 14px;
                    font-size: 16px;
                    opacity: 0.9;
} 

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
    <!--creating a navigation container-->
    <div id="navbar">
        <a href="logout.php">Log Out</a>
    	<a class="active" href="admin registration.php">Register</a>
        <a href="view users.php">View Users</a>
        <a href="Admin product.php">Delete Order</a>
        <a href="editing.php">Edit Order</a>
        <a href="add product.php">New Order</a>
        <a href="admin.php"><b>Home</b></a>            
    </div>
    <!-- End -->
        <br><br>
        <!-- Inserting a text container  -->
    	<div class="text">
    		<h1>Registration</h1>
        </div>
        <br><br><br><br>
        <!-- End -->
    <!-- Inserting a Cover wrapper -->
    <div class="Covers">
        <!-- Inserting a background image -->
        <div class="bg-img">
        <br><br><br>
        <!-- Inserting a wrapper -->
        <div class="covering">
                <!-- Inserting a Form -->
                <form method="POST" action="">
                    Username<br>
                    <input type="Username" placeholder="Megan Johnson" name="Username" ><br>
                    Email<br>
                    <input type="Email" placeholder="Megan@ohnson.com" name="Email" ><br>
                    Role<br>
                    <select name="Role">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select><br>
                    

                    Password<br>
                    <input type="Password" placeholder="" name="Password" >
                    <div class="echomsg">
                        <?php echo $msg;?>
                    </div><br>
                        <!-- Inserting a button container -->
                        <div class="container">
                            <input type="submit" value="Register" name="Register"><br>
                        </div>
                        <!-- End -->
                </form>
                <!-- End Form-->
            
        </div>
        <!-- End -->
    </div>   
    <!-- End -->
</div>
<!-- End -->
<br><br>
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