<?php

include 'config.php';
include 'functions.php';

$categories = get_cat();
$categories_tree = map_tree($categories);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Каталог</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="/">Главная</a>
        <div class="wrapper">
            <div class="sidebar">
                Sidebar
            </div>
            <div class="content">
                <?php print_arr($categories_tree); ?>
            </div>
        </div>

        <script src="/js/jquery-1.9.0.min.js"></script>
	    <script src="/js/jquery.accordion.js"></script>
	    <script src="/js/jquery.cookie.js"></script>
    </body>
</html>
