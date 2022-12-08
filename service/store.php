<?php
    session_start();
    include '../config.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    mysqli_query($config, "INSERT INTO service VALUES ('','$name','$price','$description','$category')");

    $_SESSION["sukses"] = 'pesan';
    
    header('location:index.php');