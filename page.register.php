<?php
$titlePage = "Daftar baru";
include 'header.php';
?>
<body class="whoop-gradient">
<br><br><br><br>
  <div class="page-wrapper">


    <div class="container-fluid">
      <div class="offset-xl-4 py-5 col-xl-4">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center"><i class="fas fa-users"></i> Daftar baru</h4>
            </div>
            <div class="card-body">
              <?php include 'model/form.register.php'; ?>
            </div>
            <div class="card-footer">
              <div class="card-footer-item card-footer-item-bordered">
                <a class="footer-link" href="<?php echo $pageLogin; ?>"><i class="fas fa-sign-in-alt"></i> Masuk disini</a>
              </div>
              <div class="card-footer-item card-footer-item-bordered">
                <a class="footer-link" href="<?php echo $home; ?>"><i class="fas fa-home"></i> Ke beranda</a>
              </div>
            </div>
          </div>
        </div>
    </div>

  </div>

<?php include 'footer.php'; ?>
