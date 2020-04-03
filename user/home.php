<?php
$titlePage = "Beranda";
$currentpage = "home";
include 'navigation.user.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->

            <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card transparent">
                  <div class="card-body">
                      <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <?php
                            $sqlhomepage = "SELECT COUNT(*) FROM whoop_paket WHERE status_paket = 'AKTIF'";
                            $mysqlhome = mysql_query($sqlhomepage);
                            $count = mysql_result($mysqlhome,0);
                            for ($r=0; $r < $count ; $r++) {
                            ?>
                              <li data-target="#carouselExampleIndicators1" data-slide-to="<?php echo $r; ?>" class="<?php if($r == 0 ) echo "active"; ?>"></li>
                            <?php } ?>
                          </ol>
                          <div class="carousel-inner">
                            <?php
                            $number = 0;
                            $sqlpict = "SELECT * FROM whoop_paket";
                            $querypict = mysql_query($sqlpict);
                            while ($packagehome = mysql_fetch_assoc($querypict)) {
                             ?>
                              <div class="carousel-item <?php if($number++ === 0) echo 'active'; ?>">
                                  <img class="d-block w-100 h-50" src="<?php echo $pictLink.$packagehome['foto_1']; ?>" alt="<?php echo $number++; ?> slide">
                                  <div class="carousel-caption d-none d-md-block">
                                    <a href="package.detail?package=<?php echo encrypt($packagehome['id_paket']); ?>" class="btn btn-block btn-info btn-rounded" title="Ketuk untuk informasi lengkap">
                                      <h3 class="text-white"><b><?php echo $packagehome['nama_paket']; ?></b></h3>
                                      </a>
                                  </div>
                              </div>
                            <?php } ?>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Previous</span>  </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>  </a>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-12">
              <div class="card">
                <h4 class="card-header text-center"><i class="fas fa-star"></i> Paket populer <i class="fas fa-star"></i></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                  <div class="row">
                      <?php
                      $sqlpopular = "SELECT * FROM whoop_paket WHERE status_paket = 'AKTIF'";
                      $querypopular = mysql_query($sqlpopular);
                      while ($popular = mysql_fetch_assoc($querypopular)) {
                       ?>
                       <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                           <div class="product-thumbnail">
                               <div class="product-img-head">
                                   <div class="product-img">
                                       <img src="<?php echo $pictLink.$popular['foto_1']; ?>" alt="" class="img-fluid"></div>
                               </div>
                               <div class="product-content">
                                   <div class="product-content-head">
                                       <h3 class="product-title"><?php echo $popular['nama_paket']; ?></h3>
                                       <div class="product-price">Rp. <?php echo number_format($popular['harga_paket'],0,',','.'); ?></div>
                                   </div>
                                   <div class="product-btn">
                                       <a href="package.reservation?reservation=<?php echo encrypt($popular['id_paket']); ?>" class="btn btn-primary">Buat Reservasi</a>
                                       <a href="package.detail?package=<?php echo encrypt($popular['id_paket']); ?>" class="btn btn-outline-info">Lihat detail</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                     <?php } ?>
                  </div>
              </div>
            </div>

                <!-- ============================================================== -->
            </div>
        </div>
<?php include 'authors.footer.php'; ?>
