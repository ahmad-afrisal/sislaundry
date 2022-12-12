<?php
    session_start();
    include '../config.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    mysqli_query($config, "UPDATE service SET name='$name', price='$price', description='$description', 
                            category='$category' WHERE ID=$id");

    $_SESSION["sukses"] = 'pesan';
    
    header('location:index.php');