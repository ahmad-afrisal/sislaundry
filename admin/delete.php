<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    # code...
}
    session_start();
    include '../config.php';

    $id = $_GET['id'];

    mysqli_query($config, "DELETE FROM users WHERE id=$id");

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    
    header('location:index.php');

