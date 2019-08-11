<?php 
session_start();
$products = $_SESSION['cart'] ;
// echo "<pre>";
// print_r($products);
// echo "</pre>";

// require_once('data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	td a{
		padding: 5px 10px;
		background-color: blue;
		color: white;
		text-decoration: none;
	}
	td a:hover{
		color: red;
	}
	img {
		width: 100px;
		height: 60px;
	}
	body{
	margin-left: 50px;
	margin-right: 50px;
	}
</style>
<body>
	<h1>CART</h1>
	<h1><a href="allproducts.php">home</a></h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Code</th>
				<th scope="col">Name</th>
				<th scope="col">Prices</th>
				<th scope="col">Quantity</th>
				<th scope="col">Amount</th>
				<th scope="col">Image</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<?php foreach ($products as $code => $product){ ?>
			<tr>
				<td><b><?=$code?></b></td>
				<td><?=$product['name']?></td>
				<td><?=number_format($product['price'])?></td>
				<td> 
					<a href="add-to-cart-process.php?code=<?=$code?>">+</a>

					<?=$product['quantity']?>
					
					<a href="remove.php?code=<?=$code?>">-</a>

				</td>		
				<td><?=number_format($product['quantity']*$product['price'])?></td>		
				<td><img src="<?=$product['image']?>"></td>		
				<td>
					<a href="removeall.php?code=<?=$code?>">Remove</a>
				</td>
			</tr>

		<?php } ?>

	</table>
</body>
</html>