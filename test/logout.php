<?php
session_start();
include('session.php');
if(isset($_Session['Username']))
        {
        	session_destroy();
            echo"<script>location.href='login.php'</script>";
        }

else{
			 echo"<script>location.href='login.php'</script>";
}

?>