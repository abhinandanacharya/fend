<?php
include 'connection.php';
$reg = new database();

if(isset($_POST['user_signup']))
{
    print_r($_POST);

    extract($_POST);
    $insert_reg  = "INSERT INTO register(user_name,user_email, user_password,user_ph) VALUES('$user_name','$user_email','$user_password','$user_ph')";
    $reg_res = $reg->insert($insert_reg);
    if($reg_res>0)
    {
        ?>
        <script>
            alert("Registration Successfully");
            //window.location = "login.php";

        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("somthig went wrong");
            window.location = "register.php";
        </script>
        <?php
    }
}
?>