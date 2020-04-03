<?php
$titlePage = "Dasbor";
$currentpage = "home";
include 'navigation.admin.php'; ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title text-info">Dasbor Administrator :  <small><?php echo @$_SESSION['admin_name']; ?></small> </h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <a href="package.add">
                          <div class="card py-4">
                              <div class="card-body">
                                  <div class="metric-value d-inline-block">
                                      <h3 class="mb-1">Buat paket baru</h3>
                                  </div>
                                  <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                      <span class="badge badge-success"><i class="fas fa-plus"></i></span>
                                  </div>
                              </div>
                          </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <a href="reservation.view">
                        <div class="card py-1">
                            <div class="card-body">
                                <h5 class="text-muted">Reservasi</h5>
                                <div class="metric-value d-inline-block">
                                  <?php
                                  $sql_1 = mysqli_query($db,"SELECT COUNT(*) From whoop_reservasi Where status_reservasi = 'PROSES'");
                                  $notif_1 = mysqli_result($sql_1,0);
                                   ?>
                                    <h3 class="mb-1"><?php echo $notif_1; ?></h3>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="badge badge-info"><i class="fa fa-fw fa-calendar-alt"></i></span>
                                </div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <a href="transaction.view">
                          <div class="card py-1">
                              <div class="card-body">
                                  <h5 class="text-muted">Transaksi baru</h5>
                                  <div class="metric-value d-inline-block">
                                    <?php
                                    $sql_2 =mysqli_query($db,"SELECT COUNT(*) From whoop_transaksi Where status_transaksi != 'SELESAI'");
                                    $notif_2 = mysqli_result($sql_2,0);
                                     ?>
                                      <h3 class="mb-1"><?php echo $notif_2; ?></h3>
                                  </div>
                                  <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                      <span class="badge badge-info"><i class="fa fa-fw fa-money-bill-wave"></i></span>
                                  </div>
                              </div>
                          </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <a href="transaction.view.success">
                          <div class="card py-1">
                              <div class="card-body">
                                  <h5 class="text-muted">Transaksi sukses</h5>
                                  <div class="metric-value d-inline-block">
                                    <?php
                                    $sql_3 = mysqli_query($db,"SELECT SUM(harga_paket) AS total FROM whoop_transaksi a
                                    JOIN whoop_reservasi b  ON a.id_reservasi = b.id_reservasi
                                    JOIN whoop_paket c ON b.id_paket = c.id_paket
                                    Where a.status_transaksi = 'SELESAI'")
                                    or die(mysql_error());
                                    $notif_3 = mysqli_fetch_assoc($sql_3);
                                     ?>
                                      <h2 class="mb-1">Rp. <?php echo number_format($notif_3['total'],0,',','.'); ?></h2>
                                  </div>
                              </div>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>
