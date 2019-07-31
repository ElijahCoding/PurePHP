<?php

include 'config.php';
include 'functions.php';

$categories = get_cat();

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
                <?php print_arr($categories); ?>
            </div>
        </div>
    </body>
</html>
