<?php 
require_once('products.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>


	<a href="#">view cart</a>
	<table style="margin-left: 50px">
		<tr>
			<th>stt</th>
			<th>name</th>
			<th>price</th>
			<th>action</th>
		</tr>
		<?php 
		 
		foreach ($products as $code=> $value) {
			#code
			 
			
			?>
			<tr>
				<td><?=$code?></td>
				<td><?=$products[$code]['name']?></td>
				<td><?=$products[$code]['price']?></td>
				
				<td><a href="add_to_cart_process.php?key=<?=$key?> ">addd to cart</a></td>
				
			</tr>
		<?php } ?>

	</table>
</body>
</html>