<?php 

session_start();
unset($_SESSION['students']['sv'.$_POST]['id_certain']);
		$_SESSION['students']['sv'.$_POST['id']]['id']=$_POST['id'];
		$_SESSION['students']['sv'.$_POST['id']]['name']=$_POST['name'];
		$_SESSION['students']['sv'.$_POST['id']]['dob']=$_POST['dob'];


		header('location:list_students.php');
 ?>