<?php
    session_start();
    include '../config.php';
    

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    # code...
}

    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];


    mysqli_query($config, "UPDATE users SET name='$name', username='$username', phone_number='$phone_number'
                        WHERE ID=$id");

    $_SESSION["sukses"] = 'pesan';
    
    header('location:index.php');