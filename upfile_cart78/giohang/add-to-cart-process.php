<?php 
	session_start();
	require_once('data.php');
	//b1: lấy code sp người dùng theo GET
	$code = $_GET['code'];
	//Lấy thông tin sp dựa vào mã code
	
	//kiểm tra xem $_SESSION['cart'][$code] đã tồn tại chưa nếu đã tồn tại thì tăng quantity lên 1
	if(isset($_SESSION['cart'][$code])){
		$_SESSION['cart'][$code]['quantity']++;
	}else{
	$product = $products[$code];
	//đưa quantity về 1 khi chọn 
	$product['quantity'] = 1;		
	
	// thêm sp vào giỏ hàng 
	$_SESSION['cart'][$code] = $product;
	}
// 	echo "<pre>";
// print_r($product);
// echo "</pre>";
	header('location: cart.php');
 ?>