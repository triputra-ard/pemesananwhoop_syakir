<?php
$titlePage = "Informasi Pengguna";
$currentpage = "details";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-left">Informasi pengguna</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <td>Nama</td>
                <td><?php echo @$_SESSION['name']; ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo @$_SESSION['email']; ?></td>
              </tr>
              <tr>
                <td>Nomor Telepon</td>
                <td><?php echo @$_SESSION['phone']; ?></td>
              </tr>
              <tr>
                <td>Password</td>
                <td>
                  <?php $pass = encrypt(@$_SESSION['password']); ?>
                  <button type="button" class="btn btn-lg btn-primary" data-toggle="popover" title=""
                  data-content="<?php $decyrpt = decrypt($pass); echo $decyrpt; ?>"
                  data-original-title="Password Anda" ><?php echo $pass; ?></button></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><?php echo @$_SESSION['address']; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="card-footer-item card-footer-item-bordered">
          <a class="footer-link" href="user.setting">Perbarui informasi <i class="fas fa-chevron-right text-success"></i> </a>
        </div>
      </div>
    </div>




    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
