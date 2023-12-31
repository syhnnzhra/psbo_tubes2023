<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WeGreen | Pelacakan Penjemputan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <img src="img/dashboard.png" alt="">
                    <span>Dashboard</span>
                </a>
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
            <li class="nav-item active">
                <a class="nav-link" href="pelacakan.php">
                    <img src="img/lacak.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Melacak Pesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pesanan.php">
                    <img src="img/pesanan.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Pesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="riwayat.php">
                    <img src="img/riwayat.png" alt="">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <span>Riwayat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="total_poin.php">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <img src="img/total_poin.png" alt="">
                    <span>Total Sampah dan Poin</span>
                </a>
            </li>
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

                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800 text-center">Pelacakan Penjemputan</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-4">
                            <!-- <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="img/tracking.png" alt="">
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p>Estimasi Jemput</p>
                                            <p>30 menit</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Tujuan</p>
                                            <p>Jalan Merdeka</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </button> -->
                        </div>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <!-- <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="img/tracking.png" alt="">
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p>Estimasi Jemput</p>
                                            <p>30 menit</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Tujuan</p>
                                            <p>Jalan Merdeka</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </button> -->
                        </div>
                    </div>
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>