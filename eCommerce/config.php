<?php

define("DBHOST", "127.0.0.1");
define("DBUSER", "root");
define("DBPASS", "root");
define("DB", "ecommerce");
define("DBPORT", "8889");
define("PATH", "http://localhost:8000/");
define("PERPAGE", 5);
$option_perpage = array(5, 10, 15);

$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB, DBPORT) or die("Нет соединения с БД");

mysqli_set_charset($connection, "utf8") or die("Не установлена кодировка соединения");
