<?php
  session_start();
  include '../config.php';
  if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
    # code...
  }
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

    <title>Dashboard - Order</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

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
            <li class="menu-item active">
                <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-cart-alt"></i>
                <div data-i18n="Analytics">Order</div>
                </a>
            </li>

            <!-- Service -->
            <li class="menu-item">
                <a href="../service/index.php" class="menu-link">
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
                      <span href="logout.php" class="align-middle">Log Out</span>
                    </a>
                    </li>
                  </ul>
                  </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Order /</span> Edit Order ID : <?= $_GET['transactions_id']; ?></h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Edit Order</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                    <?php 
                      $no = 1; 
                      $id = $_GET['transactions_id'];
                      $query = mysqli_query($config, "SELECT * FROM transactions WHERE transactions_id=$id");
                      while($data = mysqli_fetch_array($query)) {
                    ?>
                      <form method="POST" action="update.php" id="formD" name="formD">
                        <div class="mb-3">
                          <label for="status" class="form-label">Status</label>
                          <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['transactions_id']; ?>" placeholder="" />
                          <select class="form-select" id="status" name="status" aria-label="Default select example" required>
                            <option value="<?= $data['status']; ?>" ><?= $data['status']; ?></option>
                            <option value="" disabled>--------------</option>
                            <option value="MASUK">MASUK</option>
                            <option value="SELESAI">SELESAI</option>
                            <option value="KELUAR">KELUAR</option>
                          </select>
                        </div>
                        
                        

                        <?php
                          if($data['payment_method'] === 'BAYAR NANTI') {
                        ?>
                        <div class="mb-3">
                          <label class="form-label" for="total" >Total Bayar</label>
                          <?php 
                          $query_total = mysqli_query($config, "SELECT total FROM totalorder WHERE transactions_id='$id'"); 
                          while($x = mysqli_fetch_array($query_total)) {
                        ?>
                          <input type="text" class="form-control" id="total" name="harga" value="<?= $x['total']; ?>" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" disabled placeholder="" />
                          <?php
                          }
                        ?>
                        </div>
                        <div class="mb-3">
                          <label class="form-label d-block" for="basic-default-company">Pembayaran</label>
                          <div class="form-check form-check-inline ">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="payment_method"
                              id="payment_method"
                              value="BAYAR DIAWAL"
                              <?php echo $data['payment_method'] === 'BAYAR DIAWAL' ? 'checked': '' ?>
                            />
                            <label class="form-check-label" for="method_payment">Bayar</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="payment_method"
                              id="inlineRadio2"
                              value="BAYAR NANTI"
                              <?php echo $data['payment_method'] === 'BAYAR NANTI' ? 'checked': '' ?>
                            />
                            <label class="form-check-label" for="inlineRadio2">Bayar Nanti</label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="nominalBayar">Nominal Bayar</label>
                          <input type="text" class="form-control" id="jmppsn" name="jmlpsn" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" placeholder="" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="txtDisplay">Kembalian</label>
                          <input type="text" class="form-control" id="txtDisplay" name="txtDisplay" value="" placeholder="" disabled />
                        </div>
                        <?php
                          }
                        ?>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                      </form>
                      <?php
                      }
                      ?>

                    </div>
                  </div>
                </div>
              </div>
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
    <script type="text/javascript" language="Javascript">
      hargasatuan = document.formD.harga.value;
      document.formD.txtDisplay.value = hargasatuan;
      jumlah = document.formD.jmlpsn.value;
      document.formD.txtDisplay.value = jumlah;
      function OnChange(value){
        hargasatuan = document.formD.harga.value;
        jumlah = document.formD.jmlpsn.value;
        total = jumlah - hargasatuan ;
        document.formD.txtDisplay.value = total;
      }
    </script>

  </body>
</html>
