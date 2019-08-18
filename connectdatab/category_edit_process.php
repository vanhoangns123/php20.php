	<?php 
$data=$_POST;
require_once('connect.php');
 
$query='update categories set ( name, parent_id, thumbnail, slug, description, created_at ) VALUES ("'.$data['name'].'","'.$data['parent_id'].'","'.$data['thumbnail'].'","'.$data['slug'].'","'.$data['description'].'","'.$data['created_at'].'")';
$status = $conn->query($query);
if($status){
	header('Location: cate.php');
}else{
	echo "false";
}


 ?>

 