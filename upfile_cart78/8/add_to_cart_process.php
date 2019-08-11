<?php 
session_start();
require_once('data.php');


// buoc 1 lay code sp nguoi dung theo pp GET
$code=$_GET['code'];
//kiem tra xem $SESSION['cart']['code'] da ton tai chua
if(isset($_SESSION['cart'][$code])){
	// da ton tai => tang so luon len 1

	$_SESSION['cart'][$code]['qaliti']++;

}else{

	$product=$products[$code];
	$product['quali']=1;
	$_SESSION['cart'][$code]=$product;

}

header('location:cart.php');


 ?>