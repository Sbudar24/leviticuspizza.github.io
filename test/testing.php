<?php include('connect202.php'); 

	//fetch the record to be update
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM registration WHERE UserId='$id' ");
		$record = mysqli_fetch_array($rec);
		$Username = $record['Username'];
		$Email = $record['Email'];
		$Role = $record['Role'];
		$id = $record['UserId'];
	}
	
?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Edit product</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body>
<div class="text">
<h1>Edit Product</h1>
</div>
<div class="wrapper">
	<?php if (isset($_SESSION['msg'])); ?>
<div class='login' style="margin-top: 30px;">
		
	<form method="post" action="edit user.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	  	
		<div class="input-group">
			Username<br>
			<input type="text" name="Username" placeholder="" value="<?php echo $Username; ?>">
		</div>

		<div class="input-group">
			Email<br>
			<input type="text" name="Email" placeholder="" value="<?php echo $Email; ?>">
		</div>

		<div class="input-group">
            Role<br>
            <select name="Role">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select><br>
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