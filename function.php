<?php

$config = mysqli_connect("localhost","root","","sislaundry");

function registrasi($data){
    global $config;

    $namaadmin = strtolower(stripslashes($data["name"]));
    $username = strtolower(stripslashes($data["username"]));
    $nohp = ($data["phone_number"]);
    $password = mysqli_real_escape_string($config,$data["password"]);
    $password2 = mysqli_real_escape_string($config,$data["confpassword"]);
    
    if ($password !== $password2) {
        # code...
        echo "
            <script>
                alert('konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }
}

?>
