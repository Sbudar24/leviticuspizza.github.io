<?php
    session_start();
    require '_database/database.php';
    $user_username=$_SESSION['user_username'];
?> 
<?php
    
    require '_database/database.php';
    if(!$_SESSION['user_username']){
        header("location:login.php?session=notset");
    }
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search result</title>

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
                       <a href="home.php"><i class="fa fa-home"></i> Home</a>
                   </li>
             </ul>
                <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search-result.php">
                    <div class="form-group">
                        <input type="text" class="search form-control" id="searchbox" placeholder="Search for People" name="search-form"/><br />
                        <div id="display"></div>
            </div> 
        </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname'];?> <?php echo $row['user_lastname'];?><strong class="caret"></strong></a>                  
                        <ul class="dropdown-menu">
                            <li>
                                <a href="edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                            </li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars" style="font-size: 1.27em;"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="components/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
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
    if($_POST){
        $query=$_POST['search-form'];
        $sql=mysqli_query($database,"select * from user where user_firstname like '%$query%' or user_lastname like '%$query%' order by user_id");
        $number=mysqli_num_rows($sql);
    }
?>
                            <div id="content">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="panel panel-default" style="margin: 20px 0px;">
                                          <div class="panel-heading">                                 
<?php 
    if($number > 1){ 
?>
        <h3 class="panel-title"><?php echo $number; ?> Results for "<?php echo $query; ?>"</h3>
<?php     
    }
    else{
?>
         <h3 class="panel-title"><?php echo $number; ?> Result for "<?php echo $query; ?>"</h3>                                 
<?php     
    }
?>
    
                                          </div>
                                          <div class="panel-body">
                                              <div class="row">
                                                  <div class="container">
                                                      <div class="row clearfix">
                                                          <div class="col-md-12 column">
                                                              <div class="row clearfix">
<?php
    if($_POST){
        $query=$_POST['search-form'];
        $sql=mysqli_query($database,"select * from user where user_firstname like '%$query%' or user_lastname like '%$query%' order by user_id");
        if( mysqli_num_rows($sql) > 0) {
            while($rws = mysqli_fetch_array($sql)){
?>
                                                                    <div class="panel-group" id="panel-<?php echo $rws['user_id']; ?>">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                 <a class="panel-title" data-toggle="collapse" data-parent="#panel-<?php echo $rws['user_id']; ?>" href="#panel-element-<?php echo $rws['user_id']; ?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?><button type="button" class="close" data-dismiss="panel"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
                                                                            </div>
                                                                            <div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
                                                                                <div class="panel-body">
                                                                                    <div class="col-md-6 column">
                                                                                        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" name="aboutme" class="img-responsive">                                  
                                                                                    </div>
                                                                                    <div class="col-md-6 column">
                                                                                        <div class="col-md-12 column">
                                                                                            <h2><span><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></span></h2>
                                                                                            <hr>
                                                                                            <p><?php echo $rws['user_shortbio'];?></p>
                                                                                            <hr>
                                                                                        </div>
                                                                                        <div class="col-md-4 column">
                                                                                             <a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><button type="button" class="btn btn-primary">View</button></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
<?php 
            } 
        }
        else{
?>
                                                                                <center>
                                                                                    <h1>No Results to show</h1>
                                                                                </center>
<?php      
        }
    }                                                              
?>                                                                
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>                                        
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>