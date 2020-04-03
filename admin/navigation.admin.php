<?php include 'header.php'; ?>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <a class="navbar-brand text-white" href="index">Whoop ! [Admin]</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-fw fa-angle-down text-white"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img text-white" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-fw fa-user-circle text-white"></i> [Zona Admin] </a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo @$_SESSION['admin_username']; ?> </h5>
                                <span class="badge badge-success">On</span><span class="ml-2">Tersedia</span>
                            </div>
                            <a class="dropdown-item" href="admin.info"><i class="fas fa-user mr-2"></i>Info Anda</a>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout"><i class="fas fa-power-off mr-2"></i>Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br><br>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-light transparent-white">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
                <a class="d-xl-none d-lg-none text-dark" href="#">
                  <?php if ($currentpage=="home") {
                    echo '<i class="fas fa-laptop"></i> Dasbor';
                  }elseif($currentpage == "reservation"){
                    echo '<i class="fa fa-fw fa-calendar-alt"></i> Reservasi</a>';
                  }elseif ($currentpage == "user") {
                    echo '<i class="fa fa-fw fa-users"></i> Master Data Pengguna</a>';
                  }elseif ($currentpage == "package") {
                    echo '<i class="fa fa-fw fa-camera-retro"></i> Master Data Paket</a>';
                  }elseif ($currentpage == "trx") {
                    echo '<i class="fa fa-fw fa-money-check"></i> Master Data Transaksi';
                  } ?>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-primary" href="index">
                              <i class="fa fa-fw fa-laptop"></i>Dasbor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary <?php if($currentpage == "reservation") echo "text-success"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu4" aria-controls="menu4">
                              <i class="fa fa-fw fa-calendar-alt"></i>Reservasi</a>
                            <div id="menu4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="reservation.view"><i class="fas fa-calendar-check"></i> Lihat Reservasi</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary <?php if($currentpage == "user") echo "text-success"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu1" aria-controls="menu1">
                              <i class="fa fa-fw fa-users"></i>Master Data - Pengguna</a>
                            <div id="menu1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="user.registered.view"><i class="fas fa-users"></i> Lihat Pengguna dengan Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="user.notregistered.view"><i class="fas fa-user-times"></i> Lihat Pengguna tanpa Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary <?php if($currentpage == "package") echo "text-success"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu2" aria-controls="menu2">
                              <i class="fa fa-fw fa-camera-retro"></i>Master Data - Paket</a>
                            <div id="menu2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="package.add"><i class="fas fa-plus"></i> Tambah Paket</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="package.view"><i class="fas fa-camera-retro"></i> Lihat Paket Fotografi</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary <?php if($currentpage == "trx") echo "text-success"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu3" aria-controls="menu3">
                              <i class="fa fa-fw fa-money-check"></i>Master Data - Transaksi
                              <?php
                              $trx_sql = "SELECT COUNT(*) FROM whoop_transaksi Where status_transaksi != 'SELESAI' ";
                              $trx_query = mysqli_query($db,$trx_sql);
                              $notif = mysqli_result($trx_query,0);
                               ?>
                               <span class="badge badge-secondary">
                                <?php if ($notif > 0): ?>
                                  Baru
                                <?php else: ?>
                                  0
                                <?php endif; ?>
                               </span>
                            </a>
                            <div id="menu3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="transaction.view"><i class="fas fa-money-bill-alt"></i> Lihat Transaksi
                                          <?php
                                          $trx_ok = "SELECT COUNT(*) FROM whoop_transaksi Where status_transaksi != 'SELESAI' ";
                                          $trx_query1 = mysqli_query($db,$trx_ok);
                                          $notif2 = mysqli_result($trx_query1,0);
                                           ?>
                                          <span class="badge badge-info"><?php echo $notif2; ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="transaction.view.success"><i class="fas fa-check"></i> Lihat Transaksi Sukses</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link text-danger" href="" data-toggle="modal" data-target="#logout"><i class="fas fa-power-off mr-2"></i>Keluar</a>
                        </li>

                        <li class="nav-divider">
                          <small class="text-dark">Redesigned by Tri Putra A. <br>Based CONCEPT Admin @ colorlib</small>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
<?php include 'model/modal.logout.php' ?>
