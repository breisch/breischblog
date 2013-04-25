<?php

include_once 'resources/init.php';

if(isset($_POST['name'])){
    $name = trim($_POST['name']);
    
    if (empty($name)) {
        $error ='You must submit a category name!';
    }else if(category_exists(name, $name)){
        $error ='That category already exists.';
    }else if(strlen($name) > 24){
        $error ='The category name can be no longer than 24 letters.';
    }
    if (! isset($error)) {
        add_category($name);
        
        header('Location: add_post.php');
        die();
    }
    
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add category</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <h1>Add a category</h1>
        
        <?php 
        if ( isset($error)){
            echo "<p>{$error}</p>\n";
        }
        ?>
        <form action=""method="POST">
            <div>
                <label for="name">Name </label>
                <input type="text" name="name" value="">
                
            </div>
            <div>
            <input type="submit" value="Add category">    
                
            </div>
        </form>
        <script src="js/main.js"></script>
    </body>
</html>