<?php

/**
* Распечатка массива
**/
function print_arr($array) {
	echo "<pre>" . print_r($array, true) . "</pre>";
}

/**
* Получение массива категорий
**/
function get_cat() {
    global $connection;
    $query = "SELECT * FROM categories";
    $res = mysqli_query($connection, $query);

    $arr_cat = array();

    while ($row = mysqli_fetch_assoc($res)) {
        $arr_cat[] = $row;
    }

    return $arr_cat;
}
