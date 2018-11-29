<?php
    session_start();
    require '_database/database.php';
    $user_username=$_SESSION['user_username'];
?>    
<?php
    if(!$_SESSION['user_username']){
        header("location:login.php?session=notset");
    }
?>
<?php

    error_reporting(0);
    ini_set ('display errors',0);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>

    <?php include 'controllers/base/javascript.php' ?>
    <?php include 'controllers/base/css.php' ?>
    <?php include 'controllers/base/font.php' ?>

<?php
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>
    <!-- Navbar1 -->
        <div id="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="fluid-container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>          
            </div>
            <div class="navbar-collapse collapse" id="navbar-collapse1">
               <ul class="nav navbar-nav">
                   <li>
                       <a href="home page.php"><i class="fa fa-home"></i> Home</a>
                   </li>
               </ul>
               <ul class="nav navbar-nav">
                   <li>
                        <a href="components/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
                   </li>
               </ul>  
                <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search-result.php">
                    <div class="form-group">
                        <input type="text" class="search form-control" id="searchbox" placeholder="Search for Friends" name="search-form"/><br />
                        <div id="display"></div>
                    </div> 
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname'];?> <?php echo $row['user_lastname'];?><strong class="caret"></strong></a>                  
                        <ul class="dropdown-menu">
                            <li>
                                <a href="edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                                <a href="all-users.php"><i class="fa fa-user"></i>Find Friends</a>
                            </li>
                        </ul>
                    </li>      
                </ul>    
            </div><!--/.nav-collapse -->
          </div>
        </div>
      <!-- ./Navbar1 -->
<?php
    }
?>   
<?php 
    if($_GET["request"]=="profile-update" && $_GET["status"]=="success"){
        $dialogue="Your profile update was successful! ";
    }
    else if($_GET["request"]=="profile-update" && $_GET["status"]=="unsuccess"){
        $dialogue="Your profile update was not at all successful! ";
    }
    else if($_GET["request"]=="login" && $_GET["status"]=="success"){
        $dialogue="Welcome back again! ";
    }
?>
    <script>
        $.growl("<?php echo $dialogue; ?> ", {
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            }								
        });
    </script>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <h1 class="text-center">Welcome to your profile</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <ul class="nav text-center">
                <li><a href="edit-profile.php">Edit your profile</a></li>
                <li><a href="all-users.php">Find Friends</a></li>
                <li><a href="components/logout.php">Logout</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>