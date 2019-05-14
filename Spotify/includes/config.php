<?php

ob_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("127.0.0.1", "root", "root", "spotify", "8889");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
