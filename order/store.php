<?php
    session_start();
    include '../config.php';

    $username = $_POST['username'];
    $harga = $_POST['harga'];
    $berat = $_POST['berat'];
    $inlineRadioOptions = $_POST['is_store_open'];
    $status = "MASUK";
    $admin = $_SESSION['id'];
    $date = date('Y-m-d H:i:s');


    mysqli_query($config, "INSERT INTO transactions VALUES ('','$admin','$username','$harga', '$date', '$status','$berat', '$inlineRadioOptions')");

    $_SESSION["sukses"] = 'pesan';
    
    // echo $date;
    header('location:index.php');
