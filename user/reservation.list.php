<?php
$titlePage = "Lihat Reservasi";
$currentpage = "reservation";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <?php include 'view/view.reservation.php'; ?>
        </div>
      </div>
    </div>
    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
