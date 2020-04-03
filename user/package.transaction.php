<?php
$titlePage = "Transaksi Reservasi";
$currentpage = "reservation";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="offset-xl-2 col-xl-8">
      <?php if (empty($_GET['trx'])): ?>
        <div class="card bg-danger ">
          <h4 class="card-body text-white">Oh terjadi kesalahan. coba lagi nanti :)</h4>
        </div>
        <?php else: ?>
            <div class="card">
              <div class="card-header">
                <h4><i class="fas fa-money-check-alt"></i> Transaksi Reservasi</h4>
              </div>
              <div class="alert alert-warning">
                <?php
                $id = decrypt($_GET['trx']);
                $checktime = "SELECT tgl_transaksi from whoop_transaksi WHERE id_reservasi = '$id'";
                $mysql = mysqli_query($db,$checktime);
                while ($list = mysqli_fetch_assoc($mysql)) {
                $trx_time = strtotime($list['tgl_transaksi']);
                $local = date("Y-m-d H:i:s");
                $localtime = strtotime($local);
                $diff = $localtime - $trx_time;
                $hour = floor($diff/(60*60));
                $minute = $diff - $hour*(60*60); ?>
                <h1 class="text-center"><?php echo $hour; ?> Jam <?php echo floor($minute/60); ?> Menit yang lalu</h1>
                <h4 class="text-center">Reservasi akan dibatalkan apabila melabihi 6 Jam</h4>
              <?php } ?>
              </div>
              <div class="card-body">
                <?php include 'model/form.transaction.php'; ?>
              </div>
            </div>
      <?php endif; ?>
    </div>






    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
