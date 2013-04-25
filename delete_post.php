<?php
include_once ('resources/init.php');

if( ! isset($_GET['id'])){
    header('Location: index.php');
    die();
}//end if

delete('posts', $_GET['id']);

header('Location: index.php');
die();
?>
