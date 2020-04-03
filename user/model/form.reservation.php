<?php

if (isset($_GET['reservation'])):
  $id = autokode("whoop_reservasi",date("Ymd-")."whoop-");
  $paket = decrypt($_GET['reservation']);
  $user = @$_SESSION['id'];
  $time = date("Y-m-d H:i:s");

  $add = "INSERT into whoop_reservasi(id_reservasi,id_user,id_paket,tgl_reservasi,status_reservasi)
  VALUES('$id','$user','$paket','$time',DEFAULT)";
  $query = mysql_query($add);
  $refer = encrypt($id);
  echo "<script>alert('Ditambahkan');
  window.location.replace('package.reservation?create=$refer');</script>";
?>
<?php elseif(isset($_GET['create'])): ?>
  <?php
  $id = decrypt($_GET['create']);
  $fetch = "SELECT * FROM whoop_reservasi a
  JOIN
  whoop_paket b ON a.id_paket = b.id_paket
  WHERE a.id_reservasi = '$id'";
  $query = mysql_query($fetch);
  while ($reservation = mysql_fetch_assoc($query)) {
   ?>
  <h3 class="text-center"><?php echo $reservation['nama_paket'] ?> (Rp. <?php echo number_format($reservation['harga_paket'],0,',','.'); ?>)</h3>
  <form id="form"  action="control/script.reservation" method="post">
    <input type="text" name="id" hidden value="<?php echo encrypt($reservation['id_reservasi']); ?>">
    <input type="text" name="id_user" hidden value="<?php echo encrypt(@$_SESSION['id']); ?>">
    <div class="form-group row">
      <div class="col-xl-3">
        <h4>Pilih Tanggal</h4>
      </div>
      <div class="col-xl-6">
        <input class="form-control" type="date" name="datetime" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xl-3">
        <h4>Pilih Alamat</h4>
      </div>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <label class="custom-control custom-radio">
                    <input id="alamat1" type="radio" class="custom-control-input" value="" required="" name="address" onclick="checkAddress()"><span class="custom-control-label">Alamat tersedia</span>
                </label>
            </div>
        </div>
        <textarea class="form-control" id="value1" rows="4" readonly><?php echo @$_SESSION['address']; ?></textarea>
      </div>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <label class="custom-control custom-radio">
                  <input id="alamat2" type="radio" class="custom-control-input" value="" required="" name="address"  onclick="checkAddress()"><span class="custom-control-label">Alamat baru</span>
                </label>
            </div>
          </div>
        <textarea class="form-control" id="value2" rows="4" onkeypress="checkAddress()"></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-rounded btn-block btn-info" name="reservation">Buat Reservasi</button>
  </form>
<?php } ?>
<?php endif; ?>
