<?php 
$id=$_GET['id'];
require_once('connect.php');
echo"<br>";
// $query="select * from categories where id=".$id;

echo $query;
echo"<br>";
$result=$conn->query($query);
$category = $result->fetch_assoc();
 print_r($category);
$query1 = "delete from categories where	 id=" .$id;

 ?>