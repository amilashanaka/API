<?php

class Post{
    // Db stuff
    private $conn;
    private $table ='posts';

    // Post Properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;


    // Constructor

    public function __construct($db)
    {

        $this->conn = $db;

    }

    // Get Posts 

    public function read()
    {
        $query = 'select * from users';

        $stmt=$this->conn->prepare($query);

        $stmt->execute();

        return $stmt;

    }

}