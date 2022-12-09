<?php
    session_start();
    include '../config.php';

    $transactions_id = $_POST['id'];
    $status = $_POST['status'];
    $payment_method = $_POST['payment_method'];

    mysqli_query($config, "UPDATE transactions SET status='$status', payment_method='$payment_method' WHERE transactions_id=$transactions_id");

    $_SESSION["sukses"] = 'pesan';
    
    header('location:index.php');