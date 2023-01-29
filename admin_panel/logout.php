<?php 
error_reporting(0);
session_start();
unset($_SESSION['admin_key']);
header("location:../index.php");


?>