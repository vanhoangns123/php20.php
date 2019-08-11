<?php 
session_start();
require_once('data.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
		<h1><a href="index.php">index</a></h1>

	<table style="margin-left: 50px" class="table">
		<tr>
			<th scope="col">name</th>
			<th scope="col">price</th>
			<th scope="col">quali</th>
			<th scope="col">img</th>
		</tr>
		<?php 
		$index=0;
		$sum=0;
		foreach ($_SESSION['cart'] as $key=> $value) { 
			$index++;
		 $subtotal=$_SESSION['cart'][$key]['number']*$_SESSION['cart'][$key][$key]['price'];
		 $sum+=$subtotal;
		 ?>
		<tr>
			<td> <?=$index?></td>
			<td  scope="col"><?=$_SESSION['cart'][$key][$key]['name']?></td>
			<td  scope="col"><?=$_SESSION['cart'][$key][$key]['price']?></td>
			<td  scope="col"><?=$_SESSION['cart'][$key]['number']?></td>
			<th  scope="col">img</th>
			<!-- <td><?=$_SESSION['cart'][$key]['number']*$_SESSION['cart'][$key][$key]['price']?></td> -->
			<td><?=$subtotal?></td>
			<td>
				<a href="#">-</a>
				<a href="#">+</a>
			</td>
		</tr>
		<?php } ?>
			
	</table>
	<h2>
			<tr>tong :
			<td><?=$sum?></td>
			</tr>
		</h2>
</body>
</html>