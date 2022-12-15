<?php
  session_start();
  include 'config.php';

?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Service</title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"
                        ><i class="bx bx-user me-1"></i> Account</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="bx bx-bell me-1"></i> Service</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php"
                        ><i class="bx bx-link-alt me-1"></i> Login</a
                      >
                    </li>
                  </ul>
                    <!-- Notifications -->
                    <!-- Text alignment -->
                    <h5 class="pb-1 mb-4">Pakaian</h5>
                    <div class="row mb-5">
                        <?php 
                        $no = 1;
                        $query = mysqli_query($config, "SELECT * FROM service WHERE category='PAKAIAN'");
                        while($data = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body">
                            <h5 class="card-title"><?= $data['name'];?></h5>
                            <p class="card-text">Harga : Rp.<?= $data['price'];?></p>
                            <p class="card-text"><?= $data['description'];?></p>
                        
                            </div>
                        </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!--/ Text alignment -->

                    <!-- Text alignment -->
                    <h5 class="pb-1 mb-4">Seprai</h5>
                    <div class="row mb-5">
                        <?php 
                        $no = 1;
                        $query = mysqli_query($config, "SELECT * FROM service WHERE category='SEPRAI'");
                        while($data = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body">
                            <h5 class="card-title"><?= $data['name'];?></h5>
                            <p class="card-text">Harga : Rp.<?= $data['price'];?></p>
                            <p class="card-text"><?= $data['description'];?></p>
                            
                            </div>
                        </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!--/ Text alignment -->

                    <!-- Text alignment -->
                    <h5 class="pb-1 mb-4">Boneka</h5>
                    <div class="row mb-5">
                        <?php 
                        $no = 1;
                        $query = mysqli_query($config, "SELECT * FROM service WHERE category='BONEKA'");
                        while($data = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body">
                            <h5 class="card-title"><?= $data['name'];?></h5>
                            <p class="card-text">Harga : Rp.<?= $data['price'];?></p>
                            <p class="card-text"><?= $data['description'];?></p>
                            
                            </div>
                        </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!--/ Text alignment -->

                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by Altalune Team
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

  </body>
</html>
