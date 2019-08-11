<?php 
session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>info</title>
</head>
<body>


	<h1>studen info</h1>
<p>ID:</p><?=$_SESSION['students'][$_GET['id']]


</body>
</html>