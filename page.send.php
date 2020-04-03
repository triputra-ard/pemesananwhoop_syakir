<?php
$titlePage = "Email dikirim !";
include 'navigation.common.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <center>
      <div class="col-xl-8">
        <div class="card bg-info animated bounceInDown">
          <div class="card-body">
            <h4 class="text-center text-white"><i class="fas fa-envelope"></i> Email sudah dikirim</h4>
            <p class="text-white text-white">Selamat, email kode aktivasi sudah dikirim. cek email kamu sekarang</p>
            <br>
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <a class="btn btn-secondary btn-rounded" href="control/script.register?resendmail&u=<?php echo $_GET['u']; ?>">Belum menerima email ?</a>
              </div>
              <div class="col-lg-4">
                <a class="btn btn-secondary btn-rounded" href="page.activation">Masukkan kode aktivasi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
  </div>
</div>
<?php include 'authors.footer.php'; ?>
