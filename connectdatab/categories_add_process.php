<?php 
$data=$_POST;
require_once('connect.php');

$query="insert into categories(name,description) values('".$data['name']."'.'".$data['description']."') ";

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<h1>form</h1>
 	<form style="margin-left: 50px;" method="categories_add_process.php" action="POST">
 	<label>form</label><br>
 	<input type="text" name="" ><br>
 	<label>description</label><br>
 	<input type="text" name=""><br>
 	<button type="submit" >submit</button>
 	</form>
 	
 
 </body>
 </html>