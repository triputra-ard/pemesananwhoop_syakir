<?php
$titlePage = "Aktivasi";
include 'navigation.common.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <center>
      <div class="col-xl-8">
        <div class="card bg-primary animated bounceInDown">
          <div class="card-body">
            <h4 class="text-center text-white"><i class="fas fa-lock"></i> Masukkan kode aktivasi</h4>
            <?php include 'model/form.activation.php'; ?>
          </div>
        </div>
      </div>
    </center>
  </div>
</div>
<?php include 'authors.footer.php'; ?>
