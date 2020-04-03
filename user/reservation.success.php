<?php
$titlePage = "Sukses";
$currentpage = "reservation";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <center>
    <?php include 'control/script.sendemail.php';  ?>
    <div class="col-xl-6">
      <div class="card animated bounceIn">
        <div class="card-body">
          <h3 class="text-center">Reservasi Berhasil <span class="badge badge-success"><i class="fas fa-check"></i> </span> </h3>
          <br>
          <p class="text-center">Segera lakukan pembayaran reservasi anda ke nomor rekening : <b>0000000 (BANK : A/N)</b>.
            <br> Mohon tidak melebihi <b> 6 jam dari waktu pemesanan </b>. Jika melebihi 6 jam reservasi anda akan <b> dibatalkan </b>
            <br> Unggah foto bukti transaksi kamu di <b class="text-primary">Menu Reservasi</b>
          </p>
        </div>
      </div>
    </div>
  </center>
    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
