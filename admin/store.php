<?php 

session_start();
    // if (!isset($_SESSION['username'])) {
    //     header("location:../../login.php?pesan=belum_login");
    // }
    
include '../config.php';

$name = strtolower($_POST["name"]);
$username = strtolower(stripcslashes($_POST["username"]));
$phone_number = strtolower(stripcslashes($_POST["phone_number"]));
$password = mysqli_real_escape_string($config, $_POST["password"]);
$confpassword = mysqli_real_escape_string($config, $_POST["confpassword"]);


$query = mysqli_query($config, "SELECT username FROM users WHERE username ='$username'");

if (mysqli_fetch_assoc($query)) {
    echo "<script>
        alert('Username sudah ada!');
        window.location.replace('create.php');
        </script>";
    return false;
} 

// cek konfirmasi paswrod
if( $password != $confpassword){
    echo "<script>
        alert('password tidak sesuai!');
        window.location.replace('create.php');
    </script>";
    return false;

}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);


// tambahkan user baru ke db
mysqli_query($config, "INSERT INTO users VALUES('', '$name', '$username','$phone_number','$password', 'ADMIN')");
// header('Location:index.php');
?>