<?php

class DbManager 
{
    public $db;

    public function __construct() 
    {
        $this->db = connectToDatabase();
    }

    public function getAll() 
    {
        $statement = $this->db->prepare('SELECT * FROM creditrental');
        $statement->execute();
        return $statement->fetchAll();
    }
}