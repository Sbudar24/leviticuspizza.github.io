<?php
    require_once('connection.php');
    $msg="";
    if(isset($_POST['LogIn']))
    {
        if(empty($_POST['Username']) || empty($_POST['Password'])){
            $error = "Incorrect Username or Password";
        }

        $Username = trim($_POST['Username']);
        $Password = trim($_POST['Password']);
        $Username = strtolower($Username);
        $Role = trim($_POST['Role']);

        $query = mysqli_query($conn, "SELECT * FROM registration where Username='$Username' AND Password='$Password' ");
        $count = mysqli_num_rows($query);

        if($count == 1)
        {
            session_id("myUsername");
            session_id("myPassword");
            session_id("myRole");

            if($row = mysqli_fetch_array($query))
            {
                $UserId = $row['UserId'];
                $Role = $row['Role'];

                if($row['Role'] == 'User')
                {
                $_Session['Username'] = $Username;
                header("location:home page.php");      
                }

                elseif($row['Role'] == 'Admin') 
                {
                    $_Session['Username'] = $Username;
                    header("location:admin.php");
                }

                else
                 {
                $msg="Incorrect Username or Password";
                }

            }
        }

        else
        {
            $msg="Incorrect Username or Password";
        }

}
?>

