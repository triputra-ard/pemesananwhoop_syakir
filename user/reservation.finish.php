<?php
$titlePage = "Selesai";
$currentpage = "reservation";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="offset-xl-3 col-xl-6">
      <?php if (empty($_GET['finish'])): ?>
        <div class="alert bg-danger">
          <h4 class="text-white">Umm ada yang salah. jangan khawatir kami akan segera memperbaikinya :)</h4>
        </div>
        <?php else: ?>
          <?php
          $id = decrypt($_GET['finish']);
          $update = "UPDATE whoop_reservasi SET status_reservasi = 'SELESAI' Where id_reservasi = '$id'";
          $query = mysqli_query($db,$update) or die (mysqli_error($db));
           ?>
          <div class="card animated bounceIn">
            <div class="card-body">
              <h3 class="text-center">Reservasi Berakhir <span class="badge badge-success"><i class="fas fa-check"></i> </span> </h3>
              <br>
              <p class="text-center">Terimakasih telah mempercayakan jasa kami <i class="fas fa-grin-wink"></i>
                <br> Kami tunggu reservasi anda selanjutnya.
                 <br> Big Thanks For You by Whoop! Team
              </p>
            </div>
          </div>
      <?php endif; ?>
    </div>
    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
