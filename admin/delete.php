<?php
    session_start();
    include '../config.php';

    $id = $_GET['id'];

    mysqli_query($config, "DELETE FROM users WHERE id=$id");

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    
    header('location:index.php');

