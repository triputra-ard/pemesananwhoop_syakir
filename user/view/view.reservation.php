<div class="table-responsive">
  <table id="whoop" class="table table-hover">
    <thead>
      <th>ID Reservasi</th>
      <th>Nama Paket</th>
      <th>Tanggal Reservasi</th>
      <th>Alamat Pemesanan</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $id = @$_SESSION['id'];
      $view = "SELECT * FROM whoop_reservasi a
      JOIN whoop_paket b ON a.id_paket = b.id_paket
      WHERE a.id_user = '$id' AND status_reservasi != 'SELESAI'
      ";
      $query = mysqli_query($db, $view) or die (mysqli_error($db));
      while ($list = mysqli_fetch_assoc($query)) {
        $current_time = $list['tgl_reservasi'];
        $replace_time = strtotime($current_time);
        $timestamp = date("D, d-M-Y", $replace_time);
       ?>
      <tr>
        <td class="bg-info text-white"><?php echo $list['id_reservasi']; ?></td>
        <td class="bg-info text-white"><?php echo $list['nama_paket']; ?></td>
        <td class="bg-success text-white"><?php echo $timestamp; ?></td>
        <td class="bg-primary text-white"><?php echo $list['alamat_reservasi']; ?></td>
        <td class="bg-dark text-white">
          <?php if ($list['status_reservasi'] == "PENDING"): ?>
            <a href="package.reservation?create=<?php echo encrypt($list['id_reservasi']); ?>" class="btn btn-rounded btn-light"><i class="fas fa-calendar-check"></i> Perbarui Reservasi</a>
            <a href="#" data-toggle="modal" data-target="#askcancel-<?php echo $list['id_reservasi']; ?>" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i> Hapus Reservasi</a>
          <?php elseif ($list['status_reservasi'] == "DIPESAN"): ?>
            <a href="package.transaction?trx=<?php echo encrypt($list['id_reservasi']); ?>" class="btn btn-rounded btn-success"><i class="fas fa-money-check-alt"></i> Konfirmasi Pembayaran</a>
          <?php elseif($list['status_reservasi'] == "PROSES"): ?>
            <a href="#" data-toggle="modal" data-target="#askfinish-<?php echo $list['id_reservasi']; ?>" class="btn btn-rounded btn-success"><i class="fas fa-check"></i> Reservasi Selesai</a>
          <?php else: ?>
            <b class="">Reservasi dikonfirmasi</b>
          <?php endif; ?>
        </td>
      </tr>
      <?php include 'model/modal.askfinish.php'; ?>
      <?php include 'model/modal.askcancel.php'; ?>
    <?php } ?>
    </tbody>
  </table>
</div>
