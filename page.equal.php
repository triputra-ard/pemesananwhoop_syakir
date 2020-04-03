<?php
$titlePage = "Daftar baru";
include 'header.php';
?>
<body class="whoop-gradient">
<br><br><br><br>
  <div class="page-wrapper">


    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-4">
        </div>
        <div class="col-xl-4">
          <div class="card bg-danger">
            <div class="card-body">
              <h4 class="text-center text-white"><i class="fas fa-envelope"></i> Email sudah ada !</h4>
              <form id="form" data-parsley-validate="" novalidate="" method="post" action="control/script.register">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label text-right text-white"><i class="fas fa-envelope"></i></label>
                        <div class="col-xl-10">
                            <input required hidden type="text" name="id" value="<?php echo @$_SESSION[id_temp]; ?>">
                            <input name="email" type="email" required="" value="<?php echo @$_SESSION[email_temp]; ?>" data-parsley-type="email" placeholder="Masukkan alamat Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="equal" class="btn btn-block btn-success btn-rounded">Daftar</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-4">

        </div>
      </div>
    </div>

  </div>

<?php include 'footer.php'; ?>
