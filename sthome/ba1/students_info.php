<?php 
session_start();




 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		


 	</title>
 </head>
 <body>
 	<h1>info of students</h1>

		<p>id : <?=$_SESSION['students'][$_GET['id']]['id']?></p>
		<p>name : <?=$_SESSION['students'][$_GET['id']]['name']?></p>

		<p>date of birth : <?=$_SESSION['students'][$_GET['id']]['dob']?></p>

 </body>
 </html>