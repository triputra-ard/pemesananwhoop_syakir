<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
  <?php if (isset($_GET['sort'])): ?>
    <?php
    $search = isset($_GET['search'])  ? (string)$_GET['search'] : '';
    $filter = isset($_GET['filter'])  ? (string)$_GET['filter'] : '';

    $currentpage = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $paging = 3;
    $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
    $previous = $pages - 1;
    $next = $pages + 1;
    $sqlresult = "SELECT * FROM whoop_paket WHERE nama_paket LIKE '%$search%' AND tipe_paket LIKE '%$filter%' AND status_paket = 'AKTIF'";
    $queryresult = mysqli_query($db, $sqlresult) or die (mysqli_error($db));
    $totalpage = mysqli_num_rows($queryresult);
    $pagination = ceil($totalpage/$paging);
    $sqlfetch = "SELECT * FROM whoop_paket WHERE nama_paket LIKE '%$search%' AND tipe_paket LIKE '%$filter%' AND status_paket = 'AKTIF'
    LIMIT $start,$paging";
    $mysql = mysqli_query($db, $sqlfetch) or die (mysqli_error($db));?>
    <?php if (mysqli_num_rows($mysql) === 0): ?>
      <div class="alert alert-info">
        <h4 class="text-center">Oh Paket yang kamu cari sepertinya tidak ada.</h4>
      </div>
    <?php else: ?>
      <div class="row">
        <?php while ($package = mysqli_fetch_assoc($mysql)) {
         ?>
          <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="product-thumbnail">
                  <div class="product-img-head">
                      <div class="product-img">
                          <img src="<?php echo $pictLink.$package['foto_1']; ?>" alt="" class="img-fluid"></div>
                  </div>
                  <div class="product-content">
                      <div class="product-content-head">
                          <h3 class="product-title"><?php echo $package['nama_paket']; ?></h3>
                          <div class="product-price">Rp. <?php echo number_format($package['harga_paket'],0,',','.'); ?></div>
                      </div>
                      <div class="product-btn">
                          <a href="#"  data-toggle="modal" data-target="#asklogin" class="btn btn-primary">Buat Reservasi</a>
                          <a href="package.detail?package=<?php echo encrypt($package['id_paket']) ?>" class="btn btn-outline-info">Lihat detail</a>
                      </div>
                  </div>
              </div>
          </div>
          <?php } ?>
          </div>

          <?php include 'function/pagination.php'; ?>
    <?php endif; ?>
    <!-- End Section Search -->
  <?php else: ?>
    <?php
    $search = isset($_GET['search'])  ? (string)$_GET['search'] : '';
    $filter = isset($_GET['filter'])  ? (string)$_GET['filter'] : '';

    $paging = 3;
    $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
    $previous = $pages - 1;
    $next = $pages + 1;
    $sqlresult = "SELECT * FROM whoop_paket Where status_paket = 'AKTIF'";
    $queryresult = mysqli_query($db, $sqlresult) or die (mysqli_error($db));
    $totalpage = mysqli_num_rows($queryresult);
    $pagination = ceil($totalpage/$paging);
    $sqlfetch = "SELECT * FROM whoop_paket WHERE status_paket = 'AKTIF'
    LIMIT $start,$paging";
    $mysql = mysqli_query($db, $sqlfetch)  or die (mysqli_error($db));

     ?>
    <div class="row">
      <?php while ($package = mysqli_fetch_assoc($mysql)) { ?>
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="product-thumbnail">
                <div class="product-img-head">
                    <div class="product-img">
                        <img src="<?php echo $pictLink.$package['foto_1']; ?>" alt="" class="img-fluid"></div>
                </div>
                <div class="product-content">
                    <div class="product-content-head">
                        <h3 class="product-title"><?php echo $package['nama_paket']; ?></h3>
                        <div class="product-price">Rp. <?php echo number_format($package['harga_paket'],0,',','.'); ?></div>
                    </div>
                    <div class="product-btn">
                        <a href="#"  data-toggle="modal" data-target="#asklogin" class="btn btn-primary">Buat Reservasi</a>
                        <a href="package.detail?package=<?php echo encrypt($package['id_paket']) ?>" class="btn btn-outline-info">Lihat detail</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        </div>

        <?php include 'function/pagination.php'; ?>
  <?php endif; ?>

</div>
