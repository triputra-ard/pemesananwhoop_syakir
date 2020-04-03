<?php
$sqlinfo = "SELECT * from whoop_paket Where id_paket = '$id'";
$queryinfo = mysqli_query($db,$sqlinfo);
while ($info = mysqli_fetch_assoc($queryinfo)) {
 ?>
<form id="form" action="control/script.package" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <div class="col-xl-4">
      <input class="form-control" hidden required="" type="text" name="id" value="<?php echo $id ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Tipe</label>
    </div>
    <div class="col-xl-4">
      <select class="custom-select" name="tipe">
        <option value="<?php echo $info['tipe_paket']; ?>"><?php echo $info['tipe_paket']; ?></option>
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
      <input class="form-control" required="" type="text" name="nama" value="<?php echo $info['nama_paket']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Harga Paket</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="harga" value="<?php echo $info['harga_paket']; ?>" onkeypress="return OnlyNumber(event)">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Deskripsi paket</label>
    </div>
    <div class="col-xl-6">
      <textarea id="summernote" name="deskripsi"><?php echo $info['deskripsi_paket']; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Aktif ?</label>
    </div>
    <div class="col-xl-6">
      <label class="custom-control custom-radio custom-control-inline">
        <input type="checkbox" name="status" class="custom-control-input" value="AKTIF" <?php if($info['status_paket'] == "AKTIF") echo 'checked=""'; ?>><span class="custom-control-label text-white">YA</span>
      </label>
      <label class="custom-control custom-radio custom-control-inline">
        <input type="checkbox" name="status" class="custom-control-input" value="TIDAK_AKTIF" <?php if($info['status_paket'] == "TIDAK_AKTIF") echo 'checked=""'; ?>><span class="custom-control-label text-white">Tidak</span>
      </label>
    </div>
  </div>

  <button type="submit" name="edit" class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Perbarui Paket</button>
</form>
<?php } ?>
