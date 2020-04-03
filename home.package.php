<?php
$titlePage = "Paket Fotografi";
$currentpage = "package";
include 'navigation.common.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="row">

      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
        <div class="product-sidebar">
          <div class="product-sidebar-widget">
            <h4 class="mb-0">Temukan paket yang anda inginkan.</h4>
          </div>
          <div class="product-sidebar-widget">
            <form class="" action="home.package" method="get">
              <div class="form-group">
                <input class="form-control" type="text" name="search" value="<?php $result = isset($_GET['search'])  ? (string)$_GET['search'] : ''; echo $result;  ?>" placeholder="Cari disini..">
              </div>
              <div class="form-group">
                <button type="submit" name="sort" value="search" class="btn btn-info btn-rounded"><i class="fas fa-search"></i> Cari</button>
              </div>
            </form>
          </div>
          <div class="product-sidebar-widget">
            <form class="" action="home.package" method="get">
              <div class="form-group">
                <select class="custom-select" name="filter">
                  <option value="">-Filter paket-</option>
                  <option value="prewedding">Prewedding</option>
                  <option value="wedding">Wedding</option>
                  <option value="engagement">Engagement</option>
                  <option value="birthday">Birthday</option>
                  <option value="event">Events</option>
                  <option value="maternity">Maternity</option>
                </select>
              </div>
              <button type="submit" name="sort" value="filter" class="btn btn-rounded btn-primary"><i class="fas fa-filter"></i> Filter</button>
            </form>
          </div>
        </div>
      </div>

      <?php include 'view/view.package.php'; ?>
    </div>

    <!-- bottom page -->
  </div>
</div>
<?php include 'authors.footer.php'; ?>
