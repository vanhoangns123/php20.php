<?php 
session_start();
 


// if( isset($_SESSION['username'])&&  $_SESSION['password']=='hiep')
// {
// 	echo"helo ad min";
// }else{
// 	echo" sory";
// }



$_SESSION['username']='bbbb';
// session_destroy();

// session_start();
echo $_SESSION['username'];










 ?>