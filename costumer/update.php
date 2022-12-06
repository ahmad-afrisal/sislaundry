<?php
    session_start();
    include '../config.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $registration_date = $_POST['registration_date'];

    mysqli_query($config, "UPDATE costumers SET name='$name', phone_number='$phone_number', email='$email', 
                            address='$address', registration_date='$registration_date' WHERE ID=$id");

    $_SESSION["sukses"] = 'pesan';
    
    // header('location:index.php');