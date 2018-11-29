<?php include('connect202.php'); 

	//fetch the record to be update
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM registration WHERE UserId='$id' ");
		$record = mysqli_fetch_array($rec);
		$username = $record['Username'];
		$email = $record['Email'];
		$role = $record['Role'];
		$id = $record['UserId'];
	}
	
	?>
	<!DOCTYPE html>
	<html lang="eng">
	<head>
		<title>Edit product</title>
		<link rel="icon" type="image/ico" href="logo.jpg" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	
	</head>
	<Style>
		.login{
			width:45%;
			float:right;
    font-size: 23px;
    Color:#ffffff;
    background:#e64933;
    opacity: 0.8;
    padding: 10px;
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0.21);
    border-radius: 20px;
    visibility: visible;
    animation-delay: 0.9s;
    animation-name: fadeInUp;
		}
		
		.two	{
			float:left;
			width:43%;
			margin-left: 5%;
    font-size: 23px;
    Color:#ffffff;
    background:#e64933;
    opacity: 0.8;
    padding: 10px;
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 8px 22px 0 rgba(0, 0, 0, 0.21);
    border-radius: 20px;
    visibility: visible;
    animation-delay: 0.9s;
    animation-name: fadeInUp;
		}

		.share	{
			width:95%;
		}

		.ex{
    
    float:right;
    width:10%;
}

	</Style>
	<body>
	<div class="ex">
        <center><a class="btnEmpty" href="view users.php"><img src="ex-png.png"  width="23%"/></a></center>
    </div>
    <br><br><br>
	<div class="text">
<h1>Edit User</h1>
</div>
	
		<?php if (isset($_SESSION['msg'])); ?>
			
		<!--?php endif ?-->
		<div class="Covers">
		<div class="two">
	<div style="margin-top: 40px;">
		<table>
			<thead>
				<tr>
				<th style="text-align:left;" width="30%">Username</th>
				<th style="text-align:left;" width="20%">Email</th>
				<th style="text-align:left;" width="15%">Role</th>
				<th style="text-align:left;" width="5%">Action</th>
				</tr>
			</thead>
		
	
			<tbody>
				<?php while ($row = mysqli_fetch_array($results)) { ?>
				   <tr>
					  <td><?php echo $row['Username']; ?></td>
					  <td><?php echo $row['Email']; ?></td>
					  <td><?php echo $row['Role']; ?></td>
					  <td>
						  <a class="btnEmpty" href="edit user.php?edit=<?php echo $row['UserId']; ?>">Edit</a>
					  </td>
				   </tr>				
				<?php } ?>
	
			</tbody>
		</table>
	</div>
	</div>
	
	
<div class="wrapper">
	<?php if (isset($_SESSION['msg'])); ?>
	
<div class="login">
		
	<form method="post" action="edit user.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	  	
		<div class="input-group">
			Username<br>
			<input type="text" name="username" placeholder="" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			Email<br>
			<input type="email" name="email" placeholder="" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
            Role<br>
			<input type="text" name="role" placeholder="" value="<?php echo $role; ?>">
		</div>

		<div class="input-group">
		<?php if ($edit_state == true): ?>	
		<button type="submit" name="update" class="btnEmpty">update</button>
		<?php else: ?>
		<button type="submit" name="save" class="btnEmpty">save</button>
		<?php endif ?>	

		</div>				
	</form>

</div>	
<br><br>
</div>
</div>
</div>
	</body>
	</html>