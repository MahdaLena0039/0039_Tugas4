<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

//koneksi ke database
$dbConnection = getDBConnection();

//mendapatkan parameter dari URL (misal: index.php?id=1)
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

//membuat instance UserController
$controller = new UserController($dbConnection);

//menampilkan data pengguna berdasarkan ID
$controller->show($id);
?>