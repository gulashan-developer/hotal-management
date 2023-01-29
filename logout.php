<?php 

session_start();
unset($_SESSION['user_key']);
header("location:index.php");


?>