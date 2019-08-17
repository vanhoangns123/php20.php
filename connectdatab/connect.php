<?php 
// Thong so ket noi CSDL

$servername = "localhost:3307"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root";   // Tên đăng nhập

$password = "";    // Mật khẩu truy cập

$dbname = "btvnu4";   // Tên cơ sở dữ liệu muốn kết nối đến


// Tạo kết nối đến CSDL

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if($conn->connect_error){

	die("connet failed:".$conn->connect_error);
}else
{
	echo"connect_success:";
}
$query="select * from categories";

$result=$conn->query($query);
// var_dump($result) ;
// die;
$categories=array();
print_r($categories);
// die;
while( $row=$result->fetch_assoc()){
$categories[]=$row;
// foreach($categories as $item)
// echo "<pre>";
// print_r($item);
// echo"</pre>";
 }
?>
