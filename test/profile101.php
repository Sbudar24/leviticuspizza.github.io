<?php
require_once('connection.php');
$UserId=$_SESSION['UserId'];
$result = mysql_query("SELECT*  FROM registration where mem_Id='$Id'");
while($row = mysql_fetch_array($result))
{ 
$UserId=$row['UserId'];
$Username=$row['Username'];
$Password=$row['Password'];
$Role=$row['Role'];

}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
  <table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
  <td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">id:</div></td>
    <td width="165" valign="top"><?php echo $UserId ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Username:</div></td>
    <td valign="top"><?php echo $Username ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Password: </div></td>
    <td valign="top"><?php echo $Password ?></td>
  </tr>
  <tr>
  <td valign="top"><div align="left">Role: </div></td>
    <td valign="top"><?php echo $Role ?></td>
  </tr>
</table>
<p align="center"><a class="mybutton" href="index.php"></a></p>
</body>
</html>