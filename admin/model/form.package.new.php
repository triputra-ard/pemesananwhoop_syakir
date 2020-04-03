<form id="form" action="control/script.package" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">ID</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" readonly required="" type="text" name="id" value="<?php echo autokode("whoop_paket", "whoop"."-"); ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Tipe</label>
    </div>
    <div class="col-xl-4">
      <select class="custom-select" name="tipe">
        <option value="">-Tipe Paket-</option>
        <option value="prewedding">Prewedding</option>
        <option value="wedding">Wedding</option>
        <option value="engagement">Engagement</option>
        <option value="birthday">Birthday</option>
        <option value="event">Events</option>
        <option value="maternity">Maternity</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Nama Paket</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="nama" value="">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Harga Paket</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="harga" value="" onkeypress="return OnlyNumber(event)">
    </div>
  </div>
  <div class="alert alert-info">
    <h4 class="text-center">Foto yang diperbolehkan dengan ekstensi : jpg, jpeg, bmp, png <br>
      Dengan maksimum ukuran 2mb
     </h4>
  </div>
  <!--Photo example -->
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Foto 1</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="file" name="file1" value="" onchange="previewImg1(event)">
      <img class="previewImage img-thumbnail" id="preview1">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Foto 2</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="file" name="file2" value="" onchange="previewImg2(event)">
      <img class="previewImage img-thumbnail" id="preview2">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Foto 3</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="file" name="file3" value="" onchange="previewImg3(event)">
      <img class="previewImage img-thumbnail" id="preview3">
    </div>
  </div>
  <!--End Photo forms -->
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Deskripsi Paket</label>
    </div>
    <div class="col-xl-6">
      <textarea id="summernote" name="deskripsi"></textarea>
    </div>
  </div>

  <button type="submit" name="new" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan Paket</button>
</form>
