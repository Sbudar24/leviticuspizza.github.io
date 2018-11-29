<?php
    error_reporting(0);
    ini_set ('display errors',0);

    session_start();
    require '_database/database.php';
    if($_SESSION['user_username']){
        header("location:home.php");
    }
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <?php include 'controllers/base/javascript.php' ?>
    <?php include 'controllers/base/css.php' ?>
    <?php include 'controllers/base/font.php' ?>


 <!-- Before Login Navigation -->
      <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="index.php">Sign Up</a>     
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav back">
              <li><a href="login.php"><b>Login<b></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    <!-- ./Before Login Navigation -->
<div id="headerwrap">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
      <h1 style="color:#b4a892;"><b>Please Log In <br>or <a href="index.php">Sign Up</a></b></h1>
      <br>
          
          <form role="form" action="home page.php" method="post" name="login">
              <div class="form-group">
                  <label for="inputUsernameEmail">Username or email</label>
                  <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In  
              </button>
              </form>
            </div> 
        </div>
    </div>
</div>
