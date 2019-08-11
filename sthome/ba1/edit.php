<?php 
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<form method="post" action="edit_process.php">
	<input type="hidden" name="id_certain" value="<?=$_SESSION['students'][$_GET['id']]['id']?>">
	<h1>info of Student</h1>
	<label for="id">id</label><br>

	<input type="text" name="id" value="<?=$_SESSION['students'][$_GET['id']]['id']?> " readonly><br>

	<label for="name">name</label><br>
	<input type="text" name="name"><br>

	<label for="dob"> date of b</label><br>
	<input type="text" name="dob"><br>
	
	<input type="submit" name="submit">

</form>




</body>
</html>