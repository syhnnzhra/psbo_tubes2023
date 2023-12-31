<?php 
require 'functions.php';

$penjemputan = query("SELECT * FROM penjemputan pj JOIN masyarakat m ON pj.id_masyarakat = m.id_masyarakat 
JOIN kurir k ON pj.id_kurir= k.id_kurir JOIN sampah s ON pj.id_sampah= s.id_sampah "); 

$result = query("SELECT SUM(total_sampah) as total FROM sampah");  
$totalSampah = $result[0]['total']; 

$result1 = query("SELECT SUM(poin_masyarakat) as totalPoin FROM masyarakat");  
$totalpoincust = $result1[0]['totalPoin']; 

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WeGreen</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-5" href="index.html">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img src="img/WeGreen.png" alt="">
                </div>
                <!-- <div class="sidebar-brand-text mx-3">WeGreen</div> -->
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <img src="img/dashboard.png" alt="">
                    <span>Dashboard</span></a>
                </li>
                
                <!-- Divider -->
                <hr class="sidebar-divider">
                
            <li class="nav-item">
                <a class="nav-link" href="permintaan.php">
                    <img src="img/permintaan.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Permintaan</span>
                </a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="pesanan.php">
                    <img src="img/lacak.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Melacak Pesanan</span>
                </a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="pesanan.php">
                    <img src="img/pesanan.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Pesanan</span>
                </a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="riwayat.php">
                    <img src="img/riwayat.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Riwayat</span>
                </a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="total_poin.php">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <img src="img/total_poin.png" alt="">
                    <span>Total Sampah dan Poin</span>
                </a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

        </ul>


        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand  topbar mb-4 static-top shadow" style="background: linear-gradient(to right, rgba(1, 116, 190, 0%), rgba(1, 116, 190, 100%));">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">Welcome Admin!</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang, Admin!</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> 
                            Generate Report
                        </a> -->
                    </div>

                    <div class="row">
                    <?php
                    $totalCustomer = count($penjemputan);
                     ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="background-color: #FFC436;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1">
                                                Total Customer</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?= $totalCustomer; ?></div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $totalKurir = count($penjemputan);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="background-color: #FFC436;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1">
                                                Total Kurir</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?= $totalKurir; ?></div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="background-color: #FFC436;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1">Total Sampah
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?= $totalSampah; ?></div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="background-color: #FFC436;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1">
                                                Total Poin</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?=  $totalpoincust; ?></div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
                    </div>
                    <div class="row mb-5 justify-content-center">
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/headset.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/telephone.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/chip.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/laptop.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/kabel.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/printer.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/handphone.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/camera.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/mouse.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="category" >
                                <img src="img/lamp.png" style="width: 70px; height: 70px;" class="" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-2 col-lg-2">
                            <div class="mb-4">
                                <img src="img/total_sampah_peritem.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="mb-4">
                                <img src="img/total_sampah_peritem.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="mb-4">
                                <img src="img/total_sampah_peritem.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="mb-4">
                                <img src="img/total_sampah_peritem.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="mb-4">
                                <img src="img/total_sampah_peritem.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="mb-4">
                                <img src="img/total_sampah_peritem.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; WeGreen 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>