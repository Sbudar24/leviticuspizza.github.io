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
                <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
                <!-- End -->
                <!-- Add A JavaScript Hyperlink -->
                <script src="js/script.js"></script>
                <!-- End -->
            </head>
<style>

</style>
<body>

        <div class="text">
    		<h1>Register</h1>
        </div>
        
        <!-- Inserting a text container  -->
    	
        <!-- End -->
        <div class="Covers">
            
        <!-- Inserting a background image -->
    <div class="bg-img">
        <!-- Inserting a wrapper -->
        <div class="covering">
                <!-- Inserting a Form -->
                <form method="POST" action="register.php">
                <?php echo display_error(); ?>
                    <b>Username<b><br>
                    <input type="Username" placeholder="Megan Johnson" name="Username" value="<?php echo $username; ?>"><br>
                    <b>Email<b><br>
                    <input type="email" placeholder="meganjohnson@outlook.com" name="Email" value="<?php echo $email; ?>"><br>
                    <b>Password<b><br>
                    <input type="Password" placeholder="" name="Password" >
                    <div class="echomsg">
                        
                    </div>
                        <!-- Inserting a button container -->
                        <div class="container">
                            <input type="submit" name="register"><br>
                            <center>Already Registered?<br> 
                            <a href="login.php">LogIn</a></center>
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
     
    <!-- Inserting a footer -->
    <footer>
            &copy;2018 designed by S. M Studio
    </footer>
    <!-- End -->
</body>
</html>