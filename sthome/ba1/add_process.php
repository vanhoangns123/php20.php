<?php 

session_start();
 $_SESSION['students']['sv'.$_POST['id']]['id']=$_POST['id'];
 $_SESSION['students']['sv'.$_POST['id']]['name']=$_POST['name'];
 $_SESSION['students']['sv'.$_POST['id']]['dob']=$_POST['dob'];


header('Location:list_students.php');

 

 ?>
