<?php
session_start();
$User_check = $_SESSION['Username'];
$ses_sql = mysql_query("select Username from registration where Username='Username'", $connection);
$raw = mysql_fetch_assoc($ses_sql);
$login_session = $raw['Username'];

if(!isset($login_session))
{
	mysql_close($connection);
	header('location:login.php');
}
?>