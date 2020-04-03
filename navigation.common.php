<?php
include 'header.php';
 ?>
<body style="font-family:'Segoe UI';">
  <!-- navigation bar start -->
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background-color:rgba(20, 24, 23, 0.85);">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span><i class="fas fa-camera-retro text-white" style="font-size:34px;"></i></button>
      <h1 class="navbar-brand" href="#"><img src="<?php echo $logoLink; ?>" style="width:235px;height:60px;" alt="whoop_logo"></h1>
    <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav mr-auto">
          <li class="nav-item <?php if($currentpage=="home") echo "active"; ?>" role="presentation"><a class="nav-link" href="index"><b>Beranda</b></a></li>
          <li class="nav-item <?php if($currentpage=="package") echo "active"; ?>" role="presentation"><a class="nav-link" href="home.package"><b><i class="fas fa-camera"></i> Paket Fotografi </b></a></li>
          </ul>
          <span class="navbar-text">
          <a href="<?php echo $pageLogin; ?>" class="btn btn-rounded btn-success"><strong><i class="fas fa-sign-in-alt"></i> Masuk</strong></a>
          &nbsp;
          <a class="btn btn-info btn-rounded" role="button" href="<?php echo $pageregister; ?>"><strong><i class="fas fa-users"></i> Daftar</strong></a>
          </span>
        </div>
      </div>
  </nav>
<br><br><br><br><br><br>
<?php include 'model/modal.asklogin.php'; ?>
