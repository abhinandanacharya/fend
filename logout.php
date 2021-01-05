<?php
session_start();
include "connection.php";
$obj = new database();
unset($_SESSION["user_email"]);
unset($_SESSION["user_password"]);
session_destroy();
header('location: index.php');
?>