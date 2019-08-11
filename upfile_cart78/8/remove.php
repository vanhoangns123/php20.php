<?php 
session_start();
$code=$_GET['code'];
// xoa
unset($_SESSION['cart'][$code]);
header("location:cart.php");




 ?>