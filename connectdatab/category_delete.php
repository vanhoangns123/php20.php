<?php 
$id=$_GET['id'];
require_once('connect.php');
$query="DELETE from categories where  id=".$id;
$status=$conn->query($query);
if($status){
	header("location:cate.php");

}else{
	echo"fale";
}


 ?>