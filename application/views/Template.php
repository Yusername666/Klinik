<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RUMAH SAKIT SEHAT SELALU</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>">
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-maxlength.js') ?>"></script>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert2.all.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert2.all.min.js') ?>"></script>
    <script type="text/javascript">
        <?php
$alertSuccess = $this->session->flashdata('success');
if ($alertSuccess) {?>
            $(document).ready(function () {
                Swal.fire({
                    title: 'Berhasil!',
                    text: '<?=$this->session->flashdata('success')?>',
                    icon: 'success',
                    type: 'success',
                    allowOutsideClick: false,
                })
            })
        <?php }?>
    </script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('Pasien')?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($this->uri->segment(1) == 'Pasien' && $this->uri->segment(2) == '') echo 'active';?>">
                <a class="nav-link" href="<?=base_url('Pasien')?>">
                    <i class="fas fa-fw fa-ambulance"></i>
                    <span>PENDAFTARAN PASIEN</span></a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(2) == 'pasienList') echo 'active'; ?> ">
                <a class="nav-link" href="<?=base_url('Pasien/pasienList')?>">
                    <i class="fas fa-fw fa-medkit"></i>
                    <span>DATA PASIEN</span></a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'Dokter') echo 'active';?> ">
                <a class="nav-link" href="<?=base_url('Dokter')?>">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>BILLING DOKTER</span></a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'Poli_klinik') echo 'active';?>">
                <a class="nav-link" href="<?=base_url('Poli_klinik')?>">
                    <i class="fas fa-fw fa-stethoscope"></i>
                    <span>KUNJUNGAN POLIKLINIK</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <img class="" src="#"> --><i class="rounded-circle fa fa-cogs text-info"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span class="text-capitalize">#</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span class="text-capitalize">#</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-clock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span class="text-success">
                                    </span>
                                </a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item rounded-square" href="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?=$contents?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <script src="<?php echo base_url('assets/js/main-page.js') ?>"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>


    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert2.all.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert2.all.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Plugins DataTable -->
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/vfs_fonts.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>


</body>

</html>