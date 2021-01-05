<?php include 'admin-includes/header.php';?>
<!-- <button class="btn btn-primary" onclick="alert('test');">Test</button> -->
<?php
if(isset($_SESSION['user_admin'])){
    echo "string";
}
else
{
    header('location:login.php');
}
?>
