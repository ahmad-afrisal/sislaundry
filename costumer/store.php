<?php
    session_start();
    include '../config.php';

    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $registration_date = $_POST['registration_date'];

    mysqli_query($config, "INSERT INTO costumers VALUES ('','$name','$phone_number','$email','$address','$registration_date')");

    $_SESSION["sukses"] = 'pesan';
    
    header('location:index.php');