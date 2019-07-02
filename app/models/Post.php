<?php
class Post {
    private $database;

    public function __construct(){
        $this->database = new Database;
    }

    public function getPosts(){
        $this->db->guery("SELECT * FROM posts");

    }
}
