<?php
$titlePage = "Masuk";
include 'header.php'; ?>
<body class="whoop-gradient">
<br><br><br>
  <div class="page-wrapper">


    <div class="container-fluid">
      <?php if (isset($_GET['admin'])): ?>
        <div class="offset-xl-4 py-5 col-xl-4">

            <div class="card">
              <div class="card-header">
                <h4 class="text-center"><i class="fas fa-sign-in-alt"></i> Masuk ADMIN</h4>
              </div>
              <div class="card-body">
                <?php include 'model/form.login.admin.php'; ?>
              </div>
              <div class="card-footer">
                <div class="card-footer-item card-footer-item-bordered">
                  <a class="footer-link" href="<?php echo $home; ?>"><i class="fas fa-home"></i> Ke beranda</a>
                </div>
              </div>
            </div>

        </div>
      <?php else: ?>
        <div class="offset-xl-4 py-5 col-xl-4">
            <div class="card">
              <div class="card-header">
                <h4 class="text-center"><i class="fas fa-sign-in-alt"></i> Masuk</h4>
              </div>
              <div class="card-body">
                <?php include 'model/form.login.php'; ?>
                <hr>
                <h4 class="text-primary">Lupa password ? Hubungi whoop.pro@gmail.com <br> <small class="text-dark">Subjek : lupa password_email</small> </h4>
              </div>
              <div class="card-footer">
                <div class="card-footer-item card-footer-item-bordered">
                  <a class="footer-link" href="<?php echo $pageregister; ?>"><i class="fas fa-users"></i> Buat baru</a>
                </div>
                <div class="card-footer-item card-footer-item-bordered">
                  <a class="footer-link" href="<?php echo $home; ?>"><i class="fas fa-home"></i> Ke beranda</a>
                </div>
              </div>
            </div>
        </div>
      <?php endif; ?>
    </div>

  </div>

<?php include 'footer.php'; ?>
