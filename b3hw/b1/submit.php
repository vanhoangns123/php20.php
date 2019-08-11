<?php 
if( $_GET['username'] == 'hoangngoc' || $_GET['password']==1)
{
	echo $_GET['username'];
	echo"<br>";
	echo $_GET['password'];


	session_start();
	$_SESSION['password']='hiep';
	header('Location:demo.php');

}
else{
	echo"ko co j";
}


?>