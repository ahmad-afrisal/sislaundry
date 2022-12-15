<?php
    session_start();
    include '../config.php';

    $username = $_POST['username'];
    $harga = $_POST['harga'];
    $pewangi = $_POST['pewangi'];
    $berat = $_POST['berat'];
    $totalBayar = $_POST['totalBayar'];
    $inlineRadioOptions = $_POST['inlineRadioOptions'];
    $status = "MASUK";
    $admin = $_SESSION['id'];
    $date = date('Y-m-d H:i:s');


    mysqli_query($config, "INSERT INTO transactions VALUES ('','$admin','$username','$harga','$pewangi', '$date', '$status','$berat','$totalBayar', '$inlineRadioOptions')");

    $_SESSION["sukses"] = 'pesan';
    
    // echo $date;
    header('location:index.php');
