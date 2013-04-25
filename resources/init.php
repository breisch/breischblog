<?php
include_once ('config.php');

mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_DATABASE);

include_once ('func/blog.php');
?>
