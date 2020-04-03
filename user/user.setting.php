<?php
$titlePage = "Pengaturan";
$currentpage = "setting";
include 'navigation.user.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="offset-xl-3 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
      <div class="section-block">
          <h5 class="section-title">Pengaturan Pengguna</h5>
      </div>
      <div class="pills-vertical">
          <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fas fa-id-badge"></i> Pengaturan Informasi</a>
                      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                       <i class="fas fa-key"></i> Pengaturan Password</a>
                      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                       <i class="fas fa-map-marked-alt"></i> Pengaturan Alamat  </a>
                  </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 ">
                  <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          <?php include 'model/setup.information.php'; ?>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <?php include 'model/setup.password.php'; ?>
                      </div>
                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <?php include 'model/setup.address.php'; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>





    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
