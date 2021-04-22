<?php echo $this->extend('layout/v_dashboard_user'); ?>

<?php echo $this->section('contentDashboardUser'); ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/user/dashboardUser">
            <div class="sidebar-brand-text mx-3">SISTEM KCS ZOOM</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Heading -->
        <div class="sidebar-heading mt-2">
            Layanan
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link " href="/user/PermohonanUser">
                <i class="fas fa-envelope"></i>
                <span>Permohonan</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/user/Arsip">
                <i class="fas fa-book"></i>
                <span>Arsip</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading mt-2">
            Akun
        </div>

        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-sign-out-alt"></i>
                <span>Keluar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
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

                <!-- Page Heading -->
                <h1 class="h3 ml-3 text-gray-800 d-flex align-items-center justify-content-center" style="font-weight: bold;" data-aos="fade-down">Arsip</h1>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->

                    <li class="nav-item mr-4" data-aos="fade-left">
                        <a class="nav-link" href="#">
                            <span class="mr-3 d-none d-lg-inline text-gray-600 small">User</span>
                            <img class="img-profile rounded-circle" src="/assets/img/undraw_profile.svg">
                        </a>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; KCS <?= date('Y'); ?></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php echo $this->endSection(); ?>