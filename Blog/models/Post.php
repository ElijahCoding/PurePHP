<?php

class Post
{
    private $conn;
    private $table = 'posts';

    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {

    }

    public function read_single()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}
