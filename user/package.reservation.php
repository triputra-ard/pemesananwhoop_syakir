<?php
$titlePage = "Buat Reservasi";
$currentpage = "reservation";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <center>

      <div class="col-xl-8 col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="text-left"><i class="fas fa-calendar-alt"></i> Buat Reservasi</h4>
          </div>
          <div class="card-body">
            <?php include 'model/form.reservation.php'; ?>
          </div>
        </div>
      </div>


    </center>

    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
