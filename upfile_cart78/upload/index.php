<?php 
session_start();
require_once('data.php');

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		danh sach
 	</title>
 		<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	 <style type="text/css">
	 	body{
	 		 

	 	}
	 </style>
 </head>
 <body>
 
<h1 style="margin-top: 50px">--- Document---</h1>
 <button class="btn-success" style="margin-left: 50px;">upload</button> <br>
 <table class="table">
 	<tr>
 		<th style="width: 180px;">No</th>
 		<th>Name</th>
 		<th>Download</th>
 		<th>#</th>
 </tr>

 </table>
	<?php foreach ($products as$code => $product) { ?>
		<table class="table">
			<th><?=$code?></th>
			<th style="width: 470px;"><?=$product['name'] ?></th>
			<th style="width: 468px;"><button class="btn-success">download</button> </th>
			<th><button class="btn-warning">remove</button></th>
		</table>	

	



	<?php } ?>
 </body>
 </html>