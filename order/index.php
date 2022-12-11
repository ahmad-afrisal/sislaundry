<?php
  session_start();
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

    <title>Dashboard - Order</title>

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
                <a href="../costumer/create.php" class="menu-link">
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

            <!-- List Admin -->
            <li class="menu-item">
                <a href="../admin/index.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Analytics">List Admin</div>
                </a>
            </li>
            
            <!-- Logout -->
            <li class="menu-item">
                <a href="../login.php" class="menu-link">
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
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../login.php">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Orders</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">List Order</h5>
                  <div class="d-grid gap-2 d-md-block float-end">
                    <button class="btn btn-outline-primary" type="button">Export</button>
                    <a href="create.php" class="btn btn-primary" >Add New Order</a>
                  </div>
                </div>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search..."
                          aria-label="Search..."
                          aria-describedby="basic-addon-search31"
                        />
                      </div>
                      <!-- <a href="" class="btn btn-primary">Tambah Data</a> -->
                    </div>
                <div class="table-responsive text-nowrap">
                  <table class="table" id="example" >
                    <thead>
                      <tr>
                        <th>Detail</th>
                        <th>ID TRAN</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php

                        
                        $no = 1;
                        $query = mysqli_query($config, "SELECT * FROM transactions 
                                                        JOIN users ON transactions.users_id=users.id
                                                        JOIN service ON transactions.service_id=service.id
                                                        JOIN costumers ON transactions.costumers_id=costumers.id");

                        while($data = mysqli_fetch_array($query)) {
                        $no_wa = substr($data['phone_number'],1);
                        $status_pembayaran='';
                        if($data['payment_method']== "BAYAR DIAWAL"){
                          $status_pembayaran="Sudah Bayar";
                        }
                        else{
                          $status_pembayaran="Belum Dibayar";
                        }
                          

                        
                      ?>
                      <tr>
                        <td>
                          <button type="button" class="btn btn-sm rounded-pill btn-icon btn-outline-primary" data-bs-toggle="modal"
                          data-bs-target="#basicModal">
                            <span class="tf-icons bx bx-plus-circle"></span>
                          </button>
                        </td>
                        <td><strong>SL.<?= $data['transactions_id']; ?></strong></td>
                        <td><?= $data['name']; ?></td>
                        <td><?= $data['phone_number']; ?></td>
                        <td><?= $data['date_transaction']; ?></td>
                        <td>
                          <?php
                            if($data['status'] == "MASUK") {
                              echo '<span class="badge bg-label-primary me-1">Masuk</span>';
                            } elseif($data['status'] == "KELUAR") {
                              echo '<span class="badge bg-label-success me-1">Keluar</span>';
                            } else {
                              echo '<span class="badge bg-label-warning me-1">Proses</span>';
                            }
                          ?>
                        </td>
                        <td>
                          <a href="https://wa.me/+62<?= $no_wa; ?>?text=Wash D'vins Laundry 
                            Jalan candi gebang III Yogyakarta%0ANo. HP 081228128300
                            %0A====================%0A

                            %0ATanggal Transaksi  : <?= $data['date_transaction']; ?> 
                            %0ANama : <?= $data['name']; ?>
                            %0ANo.nota : SL.<?= $data['id']; ?>%0AKasir: <?= $data['users_id']; ?>%0A

                            %0A==================== %0A
                            %0ATipe Laundry  : KG'an (REGULER)
                            %0ATipe Layanan  : <?= $data['description']; ?>
                            %0AJenis Pewangi : Fress
                            %0ABerat (kg)    :<?= $data['weight']; ?>
                            %0AHarga /kg     : Rp. <?= $data['price']; ?>,-
                            %0ASubtotal      : Rp. <?= $data['total']; ?>,-
                            %0ADiskon        : Rp. 0,-
                            %0ABayar         : Rp. 12.500,-  %0A

                            %0A==================== %0APerkiraan Selesai : %0A06/12/2022 -09:13 %0A
                            %0A==================== %0AStatus   : <?= $status_pembayaran; ?>%0ADilunasi : - %0ADiambil  : - %0A
                            %0A==================== %0A
                            %0AKETENTUAN : 
                            %0A1. Pakaian Luntur bukan menjadi tanggung jawab laundry.
                            %0A2. Komplain pakaian kami layani 1x24 jam, sejak pakaian diambil.
                            %0A3. Pengambilan laundry wajib menggunakan nota asli.
                            %0A4. Laundry yang tidak diambil jangka waktu 1 bulan, jika terjadi kerusakan menjadi tanggung jawab pemilik.
                            Terimakasih atas kunjungan anda %0A
                            
                            %0A==================== %0A
                            %0AKlik link dibawah ini untuk melihat nota digital
                            %0Ahttps://app.1010dry.id/nota/638c02597a72c7fdd3653737" target="_blank" class="btn rounded-pill btn-icon btn-success">
                            <span class="tf-icons bx bxl-whatsapp"></span>
                          </a>
                          <a href="https://wa.me/+62<?= $no_wa; ?>?text=
                          Hai <?= $data['name']; ?> Cucian Laundry anda sudah selesai, silahkan ambil di D'vins Laundry 
                          %0A================%0ANo.nota : SL.<?= $data['id']; ?>%0AStatus : <?= $status_pembayaran; ?>%0AHarga : Rp. <?= $data['total']; ?>" target="_blank" class="btn rounded-pill btn-icon btn-info">
                            <span class="tf-icons bx bxl-whatsapp"></span>
                          </a>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="edit.php?transactions_id=<?= $data['transactions_id']; ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item alert_notif" href="delete.php?transactions_id=<?= $data['transactions_id']; ?>"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                              <a class="dropdown-item" href="nota.php?transactions_id=<?= $data['transactions_id']; ?>" target="_blank"
                                ><i class="bx bxs-printer me-1"></i> Cetak Nota</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php
                        }
                      ?>
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
                <!-- Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Detail ID TRANSAKSI : SL.1</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Name</label>
                            <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Email</label>
                            <input type="text" id="nameBasic" class="form-control" placeholder="Enter Email" />
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col mb-0">
                            <label for="emailBasic" class="form-label">No HP</label>
                            <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" />
                          </div>
                          <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Tanggal Masuk</label>
                            <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © 2022, made with ❤️ by
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
