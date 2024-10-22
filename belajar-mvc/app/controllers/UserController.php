<?php
require_once 'app/models/User.php';

    class UserController0057
    {
        private $UserModel;

        public function __construct($dbConnection)
        {
            $this->UserModel = new User ($dbConnection);
        }

        public function show($id)
        {
            // Mengambil data pengguna dari model
            $user = $this->UserModel->getUserById($id);
            
            //Membuat view dan meneruskan data pengguna
            require_once 'app/views/UserView.php';
        }

        // Function yang gunannya menampilkan Semua data Users pada databases
        public function Tampilan()
        {
            $user = $this->UserModel->getAllUsers();
            require 'app/views/HomeIndex.php';
        }
    }