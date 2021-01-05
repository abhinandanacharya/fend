<?php 
include 'connection.php'
$login = new database();
if(isset($_POST['user_admin'])){
    extract($_POST);
    $login_data = "SELECT * FROM admin WHERE email = '$email' && pass ='$pass' ";
    $qry = $login->checkuser($login_data);
    if ($qry>0){
        
        ?>
        <script>
           alert("login successful"); 
       </script>
       <?php
   }  
   else {
    ?>
    <script >
        window.location = "login.php";
        alert("invalid");
    </script>
    <?php
}

}
?>

