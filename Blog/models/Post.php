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
        $query = "SELECT c.name as category_name, p.id, p.category_id, p.title, p.body, p.author, p.created_at
                  FROM {$this->table} p
                  LEFT JOIN categories c
                  ON p.category_id = c.id
                  ORDER BY p.created_at DESC";

        $statement = $this->conn->prepare($query);
        $statement->execute();

        return $statement;
    }

    public function read_single()
    {
        $query = "SELECT *
                  FROM {$this->table} p
                  LEFT JOIN categories c
                  ON p.category_id = c.id
                  WHERE p.id = ?
                  LIMIT 0,1";

        $statement = $this->conn->prepare($query);

        $statement->bindParam(1, $this->id);

        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['name'];
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
