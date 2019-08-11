<?php 

session_start();
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table>
 			<tr>
 				<th>id</th>
				<th>name</th>
				<th>date</th>
				<th>action</th>
 			</tr>
			 
			<?php 
			foreach ($_SESSION['students'] as $key => $value) {
				#cpde
			?>
			<tr>
				<td><?=$_SESSION['students'][$key]['id']?></td>
				<td><?=$_SESSION['students'][$key]['name']?></td>
				<td><?=$_SESSION['students'][$key]['dob']?></td>
				<td>
					<a href="students_info.php?id=<?=$key?>">detail</a>
					<a href="delete_process.php?id=<?=$key?>">delete</a>
					<a href="edit.php?id=<?=$key?>">edit</a>

				</td>
			</tr>
			<?php } ?>
 
 	</table>



 </body>
 </html>