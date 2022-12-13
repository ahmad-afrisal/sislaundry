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

    <title>SisLaundry</title>

    <meta name="description" content="" />

    <!-- Favicon -->


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
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Order</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="service.php"
                            ><i class="bx bx-bell me-1"></i> Services</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="login.php"
                            ><i class="bx bx-link-alt me-1"></i> login</a
                        >
                        </li>
                    </ul>
                    
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table" id="example" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Prakiraan Selesai</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                            include 'config.php';                 
                            $no = 1;
                            $query = mysqli_query($config, "SELECT * FROM transactions 
                                                            JOIN users ON transactions.users_id=users.id
                                                            JOIN service ON transactions.service_id=service.id
                                                            JOIN costumers ON transactions.costumers_id=costumers.id ORDER BY date_transaction DESC");

                            while($data = mysqli_fetch_array($query)) {

                            
                            $tgl1 =$data['date_transaction'];
                            $tgl2 =date('Y-m-d h-m-s', strtotime('+2 days', strtotime($tgl1))); 
                        
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>SL.<?= $data['transactions_id']; ?></td>
                                    <td><?= $data['name']; ?></td>
                                    <td><?= $data['date_transaction']; ?></td>
                                    <td><?= $tgl2; ?></td>
                                    <td>
                                    <?php
                                        if($data['status']== "MASUK"){
                                            echo '<span class="badge bg-label-info me-1">Masuk</span>';
                                        } elseif ($data['status']== "PROSES") {
                                            echo '<span class="badge bg-label-warning me-1">Proses</span>';
                                        } else {
                                            echo '<span class="badge bg-label-success me-1">Keluar</span>';
                                        }
                                    ?>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                            </table>           
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 mt-4"><p class="ms-3">Showing 1 to 10 of <?= mysqli_num_rows($query); ?> entries</p></div>
                            <div class="col-12 col-lg-6"> <nav aria-label="Page navigation" class="me-3 mt-3">
                            <ul class="pagination justify-content-end">
                                <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);"
                                    ><i class="tf-icon bx bx-chevrons-left"></i
                                ></a>
                                </li>
                                <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">1</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">3</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">4</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">5</a>
                                </li>
                                <li class="page-item next">
                                <a class="page-link" href="javascript:void(0);"
                                    ><i class="tf-icon bx bx-chevrons-right"></i
                                ></a>
                                </li>
                            </ul>
                            </nav></div>
                        </div>
                        </div>
                        <!-- /Account -->
                    </div>
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

    <!-- Page JS -->
    <script src="assets/js/pages-account-settings-account.js"></script>
  </body>
</html>
