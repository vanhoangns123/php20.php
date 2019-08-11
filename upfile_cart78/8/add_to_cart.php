<?php 

session_start();
require_once('data.php');
 
 
 
if(isset($_SESSION['cart'][$_GET['key']]))
{
 
$_SESSION['cart'][$_GET['key']]['number']++;

}else{

	$_SESSION['cart'][$_GET['key']]=array($_GET['key']=>$products[$_GET['key']],'number'=>1);
};

	 // echo "<pre>";
	 //  print_r($_SESSION['cart']);
	 //  echo"<pre>";
	     


 
setcookie('msg','them thanh cong',time()+2);
 header('location:cat.php');


 ?>