<?php 
session_start();
require_once('products.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>


	<table>
		<tr>
			<th>index</th>
			<th>name</th>
			<th>price</th>
			<th>number</th>
			<th>subtotal</th>
			<th>action</th>
		</tr>
		<?php 
		$index=0;
		$sum=0;
		foreach ($_SESSION['cart'] as $key => $value) { 
			$index++;
		 $subtotal=$_SESSION['cart'][$key]['number']*$_SESSION['cart'][$key][$key]['price'];
		 $sum+=$subtotal;
		 ?>
		<tr>
			<td><?=$index?></td>
			<td><?=$_SESSION['cart'][$key][$key]['name']?></td>
			<td><?=$_SESSION['cart'][$key][$key]['price']?></td>
			<td><?=$_SESSION['cart'][$key]['number']?></td>
			<!-- <td><?=$_SESSION['cart'][$key]['number']*$_SESSION['cart'][$key][$key]['price']?></td> -->
			<td><?=$subtotal?></td>
			<td>
				<a href="#">-</a>
				<a href="#">+</a>
			</td>
		</tr>
		<?php } ?>
		<tr>tong :</tr>
		<td><?=$sum?></td>
	</table>
</body>
</html>