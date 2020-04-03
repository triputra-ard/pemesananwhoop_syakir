<?php
$titlePage = "Tambah Paket";
$currentpage = "package";
include 'navigation.admin.php'; ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title text-white">Informasi Anda </h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="card transparent">
                  <div class="card-header">
                    <h4>Informasi Anda</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover text-white">
                        <tr>
                          <td>Nama Lengkap</td>
                          <td><?php echo @$_SESSION['admin_name']; ?></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td><?php echo @$_SESSION['admin_username']; ?></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><?php echo @$_SESSION['admin_password']; ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>
