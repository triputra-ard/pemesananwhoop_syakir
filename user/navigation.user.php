<?php
include 'header.php';
 ?>
 <!-- navigation bar start -->
 <nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background-color:rgba(20, 24, 23, 0.85);">
   <div class="container">
     <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
       <span class="sr-only">Toggle navigation</span><i class="fas fa-camera-retro text-white" style="font-size:34px;"></i></button>
     <h1 class="navbar-brand" href="#"><img src="<?php echo $logoLink; ?>" style="width:235px;height:60px;" alt="whoop_logo"></h1>
   <div class="collapse navbar-collapse" id="navcol-1">
         <ul class="nav navbar-nav mr-auto">
         <li class="nav-item <?php if($currentpage=="home") echo "active"; ?>" role="presentation"><a class="nav-link" href="home"><b>Beranda</b></a></li>
         <li class="nav-item <?php if($currentpage=="package") echo "active"; ?>" role="presentation"><a class="nav-link" href="user.package?"><b><i class="fas fa-camera"></i> Paket Fotografi </b></a></li>
         <li class="nav-item <?php if($currentpage=="reservation") echo "active"; ?>" role="presentation"><a class="nav-link" href="reservation.list?"><b><i class="fas fa-calendar-alt"></i> Reservasi
           <?php
           $id = @$_SESSION['id'];
           $cek = "SELECT COUNT(*) FROM whoop_reservasi a
           WHERE a.id_user = '$id' AND status_reservasi != 'SELESAI'";
           $notif = mysqli_query($db,$cek);
           $reserve = mysqli_result($notif,0)
            ?>
           <span class="badge badge-info"><?php echo $reserve; ?></span>
         </b></a></li>
         </ul>
         <ul class="navbar-nav ml-auto navbar-right-top">
             <li class="nav-item dropdown nav-user">
                 <a class="nav-link text-white text-lg" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle text-white"></i> Akun</a>
                 <div class="dropdown-menu dropdown-menu-right nav-user-dropdown animated zoomIn" aria-labelledby="navbarDropdownMenuLink2">
                     <div class="nav-user-info bg-info">
                         <h5 class="mb-0 text-white nav-user-name"><?php echo @$_SESSION['name']; ?> </h5>
                         <span class="ml-2"><i class="fas fa-envelope"></i> <?php echo @$_SESSION['email']; ?></span>
                     </div>
                     <a class="dropdown-item <?php if($currentpage=="details") echo "active"; ?>" href="user.detail"><i class="fas fa-user mr-2"></i>Akun saya</a>
                     <a class="dropdown-item <?php if($currentpage=="setting") echo "active"; ?>" href="user.setting"><i class="fas fa-cog mr-2"></i>Pengaturan</a>
                     <a class="dropdown-item <?php if($currentpage=="history") echo "active"; ?>" href="package.history"><i class="fas fa-history mr-2"></i>Riwayat Reservasi</a>
                     <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout"><i class="fas fa-power-off mr-2"></i>Keluar</a>
                 </div>
             </li>
         </ul>
       </div>
     </div>
 </nav>
<br><br><br><br><br><br>
<?php require_once 'model/modal.logout.php'; ?>
