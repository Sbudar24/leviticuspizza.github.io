<?php
    session_start();
    require '_database/database.php';
    $user_username=$_SESSION['user_username'];
?>

<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    if(!$_SESSION['user_username']){
        header("location:$user_username");
    }
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>

    <?php include 'controllers/base/javascript.php' ?>
    <?php include 'controllers/base/css.php' ?>
    <?php include 'controllers/base/font.php' ?>
    <?php include 'controllers/base/style.php' ?>

<?php
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>
<?php
    error_reporting(0);
    ini_set ('display errors',0);
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
                <ul class="nav navbar-nav">
                    <li>
                       <a href="home.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                </ul>            
            </div>
            <div class="navbar-collapse collapse" id="navbar-collapse1">
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
                                <a href="edit-profile.php"><i class="fa fa-user"></i> Find Friends</a>
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
    if($_GET["follow"]=="same"){
        $dialogue="Your can't follow yourself! ";
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
<?php 
    $current_user = $_SESSION['user_username'];
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $profile_username=$rws['user_username'];
?>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<div class="profile">
	<div class="row clearfix">
		<!-- <div class="col-md-12 column"> -->
            <div>
                <center>
                    <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive profile-avatar">
                </center>
                <h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
                <h2 class="text-center profile-text profile-profession"><?php echo $rws['user_profession'];?></h2>
                <br>
                <div class="panel-group white" id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-8 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Basic</p>
                                    <hr>
<?php
    if ($rws['user_shortbio']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Bio</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_shortbio'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_address']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Location</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_address'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_email']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-envelope"></i> Email</p>
                                    </div>
                                    <div class="col-md-8">                                    
                                        <p><?php echo $rws['user_email'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_country']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Country</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_country'];?></p>
                                    </div>
<?php } ?>
                                </div>
                                <div class="col-md-4 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Personal</p>
                                    <hr>
<?php
    if ($rws['user_gender']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-user"></i> Gender</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_gender'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_dob']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-calendar"></i> Date of Birth</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_dob'];?></p>
                                    </div>
<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<!-- </div> -->
	</div>
</div>