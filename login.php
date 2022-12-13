<?php
session_start();
require 'function.php';

if (isset($_POST["login"])) {
  # code...
  $username = $_POST["username"];
  $password = $_POST["password"];


  $result = mysqli_query($config,"SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    # code...
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password,$row["password"])) {
      # code...
      //sesi
      $_SESSION["login"] = true;
      $_SESSION["username"] = mysqli_query($config,"SELECT * FROM users WHERE username = '$username'");
      header("Location: dashboard.php");
      exit;
    }
    
  }
  $error = true;
  
}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>
  <body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="assets/img/icons/brands/logo-login.svg" alt="logo" class="logo" />
                </div>
                <p class="login-card-description">Get's Started</p>
                <?php if(isset($error)) : ?>
                  <p style="color:red;">username / password salah</p>
                <?php endif; ?>
                <form action="" method="post">
                  <div class="form-group">
                    <label for="username" class="sr-only">Username"</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username" />
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="**********" />
                  </div>
                  <button  type="submit" name="login" id="login" class="btn btn-block login-btn mb-4">Login</button>
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <!-- <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p> -->
              </div>
            </div>
            <div class="col-md-5">
              <img src="assets/img/backgrounds/laundry.jpg" alt="login" class="login-card-img" />
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
