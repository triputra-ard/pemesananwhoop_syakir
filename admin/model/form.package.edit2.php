<?php
$sqlphotos = "SELECT * from whoop_paket Where id_paket = '$id'";
$queryphotos = mysqli_query($db,$sqlphotos);
while ($photos= mysqli_fetch_assoc($queryphotos)) {
 ?>
<form id="form" action="control/script.package" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <div class="col-xl-4">
      <input class="form-control" hidden required="" type="text" name="id" value="<?php echo $id; ?>">
    </div>
  </div>
  <!--Photo example -->
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Foto 1</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="file" name="file1" value="" onchange="previewImg1(event)">
      <input type="text" hidden name="imgunlink1" value="<?php echo "../../".$photos['foto_1']; ?>">
      <img class="previewImage img-thumbnail" id="preview1">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Foto 2</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="file" name="file2" value="" onchange="previewImg2(event)">
      <input type="text" hidden name="imgunlink2" value="<?php echo "../../".$photos['foto_2']; ?>">
      <img class="previewImage img-thumbnail" id="preview2">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white">Foto 3</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="file" name="file3" value="" onchange="previewImg3(event)">
      <input type="text" hidden name="imgunlink3" value="<?php echo "../../".$photos['foto_3']; ?>">
      <img class="previewImage img-thumbnail" id="preview3">
    </div>
  </div>
  <!--End Photo forms -->

  <button type="submit" name="editphotos" class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Perbarui Paket</button>
</form>
<?php } ?>
