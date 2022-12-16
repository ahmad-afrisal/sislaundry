<?php
session_start();
include '../config.php';
    

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    # code...
}


$id = $_POST['id'];
$password = mysqli_real_escape_string($config, $_POST["password"]);
$confpassword = mysqli_real_escape_string($config, $_POST["confpassword"]);


// cek konfirmasi paswrod
if( $password != $confpassword){
    echo "<script>
        alert('password tidak sesuai!');
        history.back();
    </script>";
    return false;

}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);


// tambahkan user baru ke db
mysqli_query($config, "UPDATE users SET password='$password' WHERE id='$id'");

$_SESSION["sukses"] = 'pesan';


header('Location:profile.php');