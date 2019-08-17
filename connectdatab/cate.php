<?php 

require_once('connect.php');

 ?>

  
<html>
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
        <a href="category_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php foreach ($categories as $item){ ?>
            	
            
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['thumbnail']?>
                    <!-- <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px"> -->
                </td>
                <td><?=$item['description']?></td>
                <td>
                    <a href="categoriesdetail.php?id=<?=$item['id']?>" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?id=<?=$item['id']?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?=$item['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
			<?php } ?>
            
        </table>
    </div>
</body>
</html>