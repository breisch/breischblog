<?php
include_once ('resources/init.php');

$posts = (isset($_GET['id']))?get_posts($_GET['id']) : get_posts(); 

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
        ul{list-style-type: none;}    
        li{display: inline; margin-right: 20px;}    
        </style>
        
        <title>Breisch-blog</title>
    </head>
    <body>
        
        <div id="wrapper">
        <div id="meny">
            <ul>
                <li><a href="index.php">Index</a></li>
                <li><a href="add_post.php">Add Post</a></li>
                <li><a href="add_category.php">Add category</a></li>
                <li><a href="category_list.php">Category list</a></li>
            </ul>
        </div>
        
        <h1>Breisch's decent blog</h1>
                    
        <?php
        foreach ($posts AS $post){
            if ( ! category_exists('name', $post['name'])) {
                $post['name'] = 'Uncategorised';
            }
        ?>
        <div id="links">
        <h2><a href="index.php?id=<?php echo $post['post_id']; ?>">
            <?php echo $post['title']; ?></a></h2>
        <p>Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted']));?>
            in <a href="category.php?id=<?php echo $post['category_id'];?>"><?php echo $post['name'];?></a>
        </p>
        <div><?php echo nl2br($post['contents']);?></div>
        <menu>
            <ul>
                <li><a href="delete_post.php?id=<?php echo $post['post_id'];?>">Delete this post</a></li>
                <li><a href="edit_post.php?id=<?php echo $post['post_id'];?>">Edit this post</a></li>
                
            </ul>
            
            
        </menu>
        </div>
       <?php     
      }
        
        ?>
    <footer>Gustav Breisch, 2013</footer>
    </div><!-- End wrapper -->

    </body>
</html>
