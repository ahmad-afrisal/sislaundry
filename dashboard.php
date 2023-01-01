<?php 
session_start();
include 'config.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
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

    <title>Dashboard </title>

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

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

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
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">sisLaundry</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <li class="menu-item active">
                    <a href="dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>
                
                <!-- Costumer -->
                <li class="menu-item">
                    <a href="costumer/index.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                    <div data-i18n="Analytics">Costumer</div>
                    </a>
                </li>

                <!-- Costumer -->
                <li class="menu-item">
                    <a href="costumer/index.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                    <div data-i18n="Analytics">Category</div>
                    </a>
                </li>

                <!-- Service -->
                <li class="menu-item">
                    <a href="service/index.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-package"></i>
                    <div data-i18n="Analytics">Service</div>
                    </a>
                </li>

                <!-- Order -->
                <li class="menu-item">
                    <a href="order/index.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-cart-alt"></i>
                    <div data-i18n="Analytics">Pesanan</div>
                    </a>
                </li>

                <?php
                if($_SESSION["roles"] == "SUPERADMIN") {
                    echo '
                    <!-- List Admin -->
                    <li class="menu-item">
                        <a href="admin/index.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                        <div data-i18n="Analytics">List Admin</div>
                        </a>
                    </li>
                    ';
                }    

                ?>
                
                  <!-- Service -->
                  <li class="menu-item">
                    <a href="profile/profile.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-user"></i>
                    <div data-i18n="Analytics">My Profile</div>
                    </a>
                </li>

                <!-- Logout -->
                <li class="menu-item">
                    <a href="login.php" class="menu-link">
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
                        <a class="dropdown-item" href="profile/profile.php">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span href="login.php" class="align-middle">Log Out</span>
                        
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
            <div class="row">
                <div class="col-12 col-lg-8  col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4 mb-4">
                        <a href="service/index.php#pakaian">
                            <div class="card bg-info">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start  justify-content-center">
                                        <div class="avatar flex-shrink-0">
                                            <img src="assets/img/icons/dash/pakaian.png"   alt="Credit Card" class="rounded" />
                                        </div>
                                    </div>
                                    <h5 class="card-title mb-2 text-white text-center">Pakaian</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 mb-4">
                        <a href="service/index.php#seprai">
                            <div class="card bg-info">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <div class="avatar flex-shrink-0">
                                            <img src="assets/img/icons/dash/selimut.png" alt="Credit Card" class="rounded" />
                                        </div>
                                    </div>
                                    <h5 class="card-title mb-2 text-white text-center">Sprei</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 mb-4">
                        <a href="service/index.php#karpet">
                            <div class="card bg-info">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <div class="avatar flex-shrink-0">
                                            <img src="assets/img/icons/dash/karpet.png" alt="Credit Card" class="rounded" />
                                        </div>
                                    </div>
                                    <h5 class="card-title mb-2 text-white text-center">Boneka</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
                <div class="col-12 col-lg-4  order-3 order-md-1">
                    <div class="row">
                        <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 class="text-white mb-0">Pemasukkan</h5>
                            </div>
                            <div class="card-body mt-4">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="mt-sm-auto">
                                            <?php
                                                $bln = date("m");
                                                $query = mysqli_query($config, "SELECT sum(total) as pemasukan FROM totalOrder WHERE MONTH(date_transaction) = '".$bln."' ");
                                                
                                                while ($r = mysqli_fetch_array($query)) {
                                            ?>

                                            <h3 class="mb-0 text-info">Rp. <?= $r['pemasukan']; ?></h3>
                                            <?php
                                                }
                                            ?>
                                            <small class="text-info text-nowrap fw-semibold">Bulan ini - <?= date('d/m/Y') ;?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-8 col-xl-8 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-3">
                        <h5 class="m-0 me-2">Order Terbaru</h5>
                        <?php
                            $bln = date("m");
                            $query = mysqli_query($config, "SELECT count(total) as totalOrder FROM totalorder");
                            
                            while ($r = mysqli_fetch_array($query)) {
                        ?>
                        <small class="text-muted"><?= $r['totalOrder']; ?>  Total Order</small>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="dropdown">
                        <button
                        class="btn p-0"
                        type="button"
                        id="orederStatistics"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >
                        <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                        <?php
                            $query = mysqli_query($config, "SELECT * FROM transactions 
                            JOIN users ON transactions.users_id=users.id
                            JOIN service ON transactions.service_id=service.id
                            JOIN costumers ON transactions.costumers_id=costumers.id ORDER BY date_transaction DESC LIMIT 5");

                            while($data = mysqli_fetch_array($query)) {
                        ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i class="bx bx-show-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2"><h6 class="mb-0"><?= $data['name']; ?></h6>
                                        <small class="text-muted"><?= $data['phone_number']; ?></small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?= $data['date_transaction']; ?></small>
                                    </div>
                                </div>
                            </li>
                        <?php
                            }
                        ?>
                        </ul>
                    </div>
                </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 order-sm-3 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info mb-4 d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2 text-white ">Laporan Bulanan</h5>
                        <div class="dropdown">
                            <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="edit_dashboard.php">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">                            
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0 text-info">Total Order</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                    <?php
                                        $bln = date("m");
                                        $query = mysqli_query($config, "SELECT count(total) as totalOrder FROM totalorder WHERE MONTH(date_transaction) = '".$bln."'");
                                        
                                        while ($r = mysqli_fetch_array($query)) {
                                    ?>
                                        <h6 class="mb-0 text-info"><?= $r['totalOrder']; ?></h6>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0 text-info">Received</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                    <?php
                                        $bln = date("m");
                                        $query = mysqli_query($config, "SELECT count(total) as received FROM totalorder WHERE STATUS='MASUK' and MONTH(date_transaction) = '".$bln."'");
                                        
                                        while ($r = mysqli_fetch_array($query)) {
                                    ?>
                                        <h6 class="mb-0 text-info"><?= $r['received']; ?></h6>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </li>

                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0 text-info">Completed</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                    <?php
                                        $bln = date("m");
                                        $query = mysqli_query($config, "SELECT count(total) as completed FROM totalorder WHERE STATUS='SELESAI' and MONTH(date_transaction) = '".$bln."'");
                                        
                                        while ($r = mysqli_fetch_array($query)) {
                                    ?>
                                        <h6 class="mb-0 text-info"><?= $r['completed']; ?></h6>
                                        <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0 text-info">Deliver</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                    <?php
                                        $bln = date("m");
                                        $query = mysqli_query($config, "SELECT count(total) as onProgress FROM totalorder WHERE STATUS='KELUAR' and MONTH(date_transaction) = '".$bln."'");
                                        
                                        while ($r = mysqli_fetch_array($query)) {
                                    ?>
                                        <h6 class="mb-0 text-info"><?= $r['onProgress']; ?></h6>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                </div>
                <!--/ Transactions -->
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
                , made with ❤️ by
                <a href="#" target="_blank" class="footer-link fw-bolder">Altalune Team</a>
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
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

</body>
</html>
