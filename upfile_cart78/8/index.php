<?php 
require_once('data.php');


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>


	<a href="cat.php"> Danh sach  </a>

	<table style="margin-left: 50px" class="table">
		<tr>
			 <th scope="col">code</th>
			<th scope="col">name</th>
			<th scope="col">price</th>
			<th scope="col">quali</th>
			<th scope="col">img</th>
		</tr>
		<?php 
		$index=1;
		foreach ($products as $key=> $value) {
			#code
			$index++;
			
			?>
			<tr>
				<td><?=$index?></td>
				<td><?=$products[$key]['name']?></td>
				<td><?=$products[$key]['price']?></td>
				
				<td><a href="add_to_cart.php?key=<?=$key?> ">addd to cart</a></td>
				
			</tr>

		<?php } ?>
		 
	</table>
</body>
</html>