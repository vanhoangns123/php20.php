<?php 
session_start();
 
unset($_SESSION['students'][$_GET['id']]);
header('Location:list_students.php');
 ?>	