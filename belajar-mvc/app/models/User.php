<?php

    class User
    {
        private $db;

        public function __construct($dbConnection)
        {
            $this->db = $dbConnection;
        }

        public function getUserById($id)
        {
            $stmt = $this->db->prepare("SELECT * FROM `user0057` WHERE id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO :: FETCH_ASSOC);
        }

        // Fuction yang berfungsi sebagai Penampil semua data dari table users databases
        public function getAllUsers() 
        {
            $stmt = $this->db->prepare("SELECT * FROM user0057");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
