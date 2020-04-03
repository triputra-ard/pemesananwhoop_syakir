<?php
$titlePage = "Riwayat Reservasi";
$currentpage = "history";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="col-xl-12">
      <div class="card">
        <h4 class="card-header text-info"><i class="fas fa-history"></i> Riwayat Reservasi</h4>
        <div class="card-body">
          <?php include 'view/view.history.php';  ?>
        </div>
      </div>
    </div>
    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
