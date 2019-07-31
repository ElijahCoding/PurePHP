<?php

namespace ishop;

class App
{
    public static $app;
    
    public function __construct()
    {
        echo $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
    }
}
