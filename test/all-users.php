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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Users</title>

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
                                <a href="all-users.php"><i class="fa fa-user"></i> Find Friends</a>
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
                                                    <div class="container">
                                                      <div class="row clearfix">
                                                          <div class="col-md-12 column">
                                                              <div class="row clearfix">
<?php
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username != '$current_user' order by user_id desc";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database));
    while($rws = mysqli_fetch_array($result)){ 
?>
                                                                  <div class="col-md-4 column">
                                                                    <div class="panel-group" id="panel-<?php echo $rws['user_id']; ?>">
                                                                        <div class="panel panel-default">
                                                                            <div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
                                                                                <div class="panel-body">
                                                                                    <div class="col-md-6 column">
                                                                                        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" name="aboutme" class="img-responsive">                                  
                                                                                    </div>
                                                                                    <div class="col-md-6 column">
                                                                                        <h2><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></a></span></h2>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
 <?php } ?>                                                         
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>