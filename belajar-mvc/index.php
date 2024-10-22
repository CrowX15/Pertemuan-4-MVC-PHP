<?php

require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

    //Koneksi ke database
    $dbConnection = getDBConnection();

    // Mendapatkan parameter dari url (misalnya : index.php?id=1)
    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] :'Tampilan';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1;

    // Membuatinstance UserController
    $controller = new UserController0057($dbConnection);

    // Menampilkan data pengguna berdasarkan ID 
    if ($aksi =='detail' && $id >0)
    {
        $controller->show($id);    
    } 
    else
    {
        $controller->Tampilan();
    }

    
?>
