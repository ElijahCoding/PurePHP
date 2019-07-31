<?php include 'catalog.php'; ?>

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
                <ul class="category">
                    <?php echo $categories_menu ?>
                </ul>
            </div>
            <div class="content">
                <?php print_arr($breadcrumbs_array); ?>
                <hr>
                <?php print_arr($categories); ?>
            </div>
        </div>

        <script src="/js/jquery-1.9.0.min.js"></script>
	    <script src="/js/jquery.accordion.js"></script>
	    <script src="/js/jquery.cookie.js"></script>
        <script>
            $(document).ready(function(){
    			$(".category").dcAccordion();
    		});
	    </script>
    </body>
</html>
