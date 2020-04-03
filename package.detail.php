<?php
$titlePage = "Paket Fotografi";
$currentpage = "package";
include 'navigation.common.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <?php if (empty($_GET['package'])): ?>
      <div class="alert alert-danger">
        <h4>Umm.. sesuatu bermasalah, harap coba lagi nanti</h4>
      </div>
    <?php else: ?>
      <div class="row">
          <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="row">
                <?php
                $getid = decrypt($_GET['package']);
                $sql = "SELECT * FROM whoop_paket WHERE id_paket = '$getid'";
                $query = mysqli_query($db,$sql);
                while ($package = mysqli_fetch_assoc($query)) {
                ?>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30 bg-dark">
                      <div class="product-slider bg-dark">
                          <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <img class="img-thumbnail w-100" src="<?php echo $pictLink.$package['foto_1']; ?>" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="img-thumbnail w-100" src="<?php echo $pictLink.$package['foto_2']; ?>" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="img-thumbnail w-100" src="<?php echo $pictLink.$package['foto_3']; ?>" alt="Third slide">
                                  </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                                    </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>
                                       </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                      <div class="product-details">
                          <div class="border-bottom pb-3 mb-3">
                              <h2 class="mb-3"><?php echo $package['nama_paket']; ?></h2>
                              <h3 class="mb-0 text-primary">IDR <?php echo number_format($package['harga_paket'],0,',','.'); ?></h3>
                          </div>
                          <div class="product-description pb-3 py-5 mb-3">
                              <h4 class="mb-1">Deskripsi paket</h4>
                              <p><?php echo $package['deskripsi_paket']; ?></p>
                              <a href="" data-toggle="modal" data-target="#asklogin" class="btn btn-primary btn-block btn-lg">Buat Reservasi</a>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
              </div>
            </div>
          </div>
    <?php endif; ?>





    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
