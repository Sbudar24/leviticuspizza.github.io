<?php

    error_reporting(0);
    ini_set ('display errors',0);
?>
<?php
    session_start();
    require '_database/database.php';
    if($_SESSION['user_username']){
        header("location:home.php");
    }
?>


    <?php require '_database/database.php'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <?php include 'controllers/base/javascript.php' ?>
    <?php include 'controllers/base/css.php' ?>
    <?php include 'controllers/base/font.php' ?>

<body>	

     <!-- Before Login Navigation -->
        <div id="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php"><b>Sign Up</b></a>     
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav back">
                <li><a href="login.php"> Login</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    <!-- ./Before Login Navigation -->
    <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                        <h1 style="color:#b4a892;"><b>Sign Up</b></h1>
                        <h3 style="color:#65aeee;">Fill in all informations!</h3>
                        <br>
                        <form class="form col-md-12 center-block" action="components/registration.php" method="post" autocomplete="off">
                        <div class="row">     
                            <div class="col-lg-6" style="z-index: 9;">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="First Name" name="user_firstname" required>
                                </div>
                            </div>
                            <div class="col-lg-6" style="z-index: 9;">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Last Name" name="user_lastname" required>
                                </div>
                            </div>
                        </div>
                     <div class="row">     
                         <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" placeholder="Email Address" name="user_email" required>
                            </div>
                         </div>
                     </div>
                     <div class="row">   
                         <div class="col-lg-12">
                            <div class="form-group">
                                <input type="username" class="form-control input-lg" placeholder="username" name="user_username" id="user_username" required>  
                             </div>
                            </div>     
                        </div>
                        <div class="row">     
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="pasword" name="user_password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="float:left;" name="signup_button"/>Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                    <br>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->
</body>    