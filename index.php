<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
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

    <title>Welcome</title>

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
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="mt-4">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- <a href="login.html" class="btn btn-primary">Login</a> -->

              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">SISLaundry</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 mt-3 text-center">Welcome to SISLaundry! 👋</h4>
              <p class="mb-2 mt-3 text-center"><a href="login.html">Sign In</a> </p>
              <br>
              <p class="mb-4">List Orders</p>

              <div class="table-responsive text-nowrap">
                <table class="table" id="example" >
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td>
                        1
                      </td>
                      <td>INV-1</td>
                      <td>Yovita</td>
                      <td>085341995xxx</td>
                      <td>23 Oct 2022</td>
                      <td><span class="badge bg-label-success me-1">Keluar</span></td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>INV-2</td>
                      <td>Lisa </td>
                      <td>085341995xxx</td>
                      <td>23 Oct 2022</td>
                      <td><span class="badge bg-label-primary me-1">Masuk</span></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>INV-3</td>
                      <td>Eka Putri</td>
                      <td>085341995xxx</td>
                      <td>24 Oct 2022</td>
                      <td><span class="badge bg-label-warning me-1">Proses</span></td>
                    </tr>
                </table>           
              </div>
              <div class="row justify-content-center">
                <div class="col-12 col-lg-6 mt-4"><p class="ms-3">Showing 1 to 7 of 100 entries</p></div>
                <div class="col-12 col-lg-6"> <nav aria-label="Page navigation" class="me-3 mt-3">
                  <ul class="pagination justify-content-end">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"
                        ><i class="tf-icon bx bx-chevrons-left"></i
                      ></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
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
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->


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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
