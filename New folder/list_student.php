<?php 

 



 session_start();
 $_SESSION['students']['sv'.$_POST['id']]['id']=$_POST['id'];
 $_SESSION['students']['sv'.$_POST['id']]['name']=$_POST['name'];
 $_SESSION['students']['sv'.$_POST['id']]['dob']=$_POST['dob'];



 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>infoof student</title>
 </head>
 <body>
 	<table>
 		<tr>
 			
 			<th>id</th>
 			<th>name</th>
			<th>date of b</th>
			<th>action</th>
 		</tr>
 		<?php 
 		foreach ($_SESSION['students'] as $key => $value) {
 				
 		 ?>
		<tr>
					
			<td> <?=$_SESSION['students'][$key]['id']?> </td>
			<td> <?=$_SESSION['students'][$key]['name']?></td>
			<td> <?=$_SESSION['students'][$key]['dob']?></td>
			<td>
				<a href="student_info.php?id=<?=$key?>">detail </a>
				<a href="deleta_process.php?id">delete</a>
				<a href="#">delete</a>
			</td>



		</tr>

	<?php } ?>
 	</table>
 	
 </body>
 </html>