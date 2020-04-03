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
                        <h2 class="pageheader-title text-info">Master Data Paket </h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
              <?php $id = decrypt($_GET['id']); ?>
                <div class="col-xl-12">
                  <div class="card transparent">
                    <div class="card-header">
                      <h4>Form edit informasi paket fotografi</h4>
                    </div>
                    <div class="card-body">
                      <?php include 'model/form.package.edit1.php'; ?>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card transparent">
                    <div class="card-header">
                      <h4>Form edit gambar paket fotografi</h4>
                    </div>
                    <div class="card-body">
                      <?php include 'model/form.package.edit2.php'; ?>
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
