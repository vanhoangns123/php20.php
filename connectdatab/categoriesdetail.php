 <?php 
$id=$_GET['id'];
require_once('connect.php');
$query="select * from categories where id=".$id;
//echo $query;

$result=$conn->query($query);
$category = $result->fetch_assoc();
$detail=$category;
 print_r($detail);





  ?>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
       
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>parentid</th>
                <th>Thumbnail</th>
                <th>slug</th>
                <th>Description</th>
                <th>Action</th>
                <th>time</th>
            </thead>
 
            	
            
            <tr>
                <td><?=$detail['id']?></td>
                <td><?=$detail['name']?></td>
                <td><?=$detail['parent_id']?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td><?=$detail['slug']?></td>
				<td><?=$detail['description']?></td>
				<td><?=$category['created_at']?></td>

                <td>
             
                </td>
            </tr>
			 
            
        </table>
    </div>
</body>
</html>