<?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    # code...
}
  include '../config.php';

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

    <title>Dashboard - SISLaundry</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">SISlaundry</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item ">
                <a href="../dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>
            
            <!-- Costumer -->
            <li class="menu-item">
                <a href="../costumer/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                <div data-i18n="Analytics">Costumer</div>
                </a>
            </li>

            <!-- Order -->
            <li class="menu-item">
                <a href="../order/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-cart-alt"></i>
                <div data-i18n="Analytics">Order</div>
                </a>
            </li>

            <!-- Service -->
            <li class="menu-item active">
                <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-package"></i>
                <div data-i18n="Analytics">Service</div>
                </a>
            </li>

            <?php
              if($_SESSION["roles"] == "SUPERADMIN") {
                  echo '
                  <!-- List Admin -->
                  <li class="menu-item">
                      <a href="../admin/index.php" class="menu-link">
                      <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                      <div data-i18n="Analytics">List Admin</div>
                      </a>
                  </li>
                  ';
              }    
            ?>
            <!-- Service -->
            <li class="menu-item">
                <a href="../profile/profile.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Analytics">My Profile</div>
                </a>
            </li>
            
            <!-- Logout -->
            <li class="menu-item">
                <a href="../logout.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-log-out-circle"></i>
                <div data-i18n="Analytics">Logout</div>
                </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="https://ui-avatars.com/api/?name=<?= $_SESSION["username"]; ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="https://ui-avatars.com/api/?name=<?= $_SESSION["username"]; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block"><?= $_SESSION["username"]; ?></span>
                                    <small class="text-muted"><?= $_SESSION["roles"]; ?></small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="../profile/profile.php">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                        
                    </a>
                    </li>
                </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold pt-3 ">Service List</h4>
              <div class="d-grid gap-2 mx-auto">
                <a href="create.php" class="btn btn-primary mb-3">Tambah Service</a>
              </div>
              <!-- Text alignment -->
              <h5 class="pb-1 mb-4" id="pakaian">Pakaian</h5>
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
                      <a href="edit.php?id=<?= $data['id']; ?>"" class="btn btn-primary">Edit</a>
                      <a href="delete.php?id=<?= $data['id']; ?>"" class="btn btn-danger alert_notif">Delete</a>
                    </div>
                  </div>
                </div>
                <?php
                  }
                ?>
              </div>
              <!--/ Text alignment -->

              <!-- Text alignment -->
              <h5 class="pb-1 mb-4" id="seprai">Seprai</h5>
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
                      <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-primary">Edit</a>
                      <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger alert_notif">Delete</a>
                    </div>
                  </div>
                </div>
                <?php
                  }
                ?>
              </div>
              <!--/ Text alignment -->

              <!-- Text alignment -->
              <h5 class="pb-1 mb-4" id="boneka">Boneka</h5>
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
                      <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-primary">Edit</a>
                      <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger alert_notif">Delete</a>
                    </div>
                  </div>
                </div>
                <?php
                  }
                ?>
              </div>
              <!--/ Text alignment -->

              <!--/ Card layout -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ?? 2022, made with ?????? by
                  <a href="#" class="footer-link fw-bolder">Altalune Team</a>
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
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>


     <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
        <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',                          
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
    
    
        <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke delete.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
        </script>
  </body>
</html>
