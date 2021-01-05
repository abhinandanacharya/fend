<?php
include 'connection.php';
$login = new database();
if(isset($_POST['user_login']))
{
    if(empty($_POST['user_email']))
    {
        ?>
        <script>
            alert("field can't be empty");
        </script>
        <?php
    }
    else
    {
     extract($_POST);
     $qry = "SELECT * FROM register WHERE user_email = '$user_email' && user_password = '$user_password'";
     $res = $login->checkuser($qry);
     if($res>0)
     {
        session_start(); 
        $_SESSION['user_email'] = $user_email;
        ?>
        <script>
            alert("login success");
            window.location = "index.php";
        </script>
        <?php

    } 
    else 
    {
        ?>
        <script>
            alert("Error");
            window.location = "login.php";
        </script>
        <?php
    }
}
}

?>