<div class="table-responsive">
  <table id="whoop" class="table table-bordered">
    <thead>
      <th>Nomor</th>
      <th>ID Reservasi</th>
      <th>Nama Paket</th>
      <th>Harga</th>
      <th>Tanggal</th>
    </thead>
    <tbody>
      <?php
      $id = @$_SESSION['id'];
      $number = 1;
      $history = "SELECT * FROM whoop_transaksi a
      JOIN whoop_reservasi b ON a.id_reservasi = b.id_reservasi
      JOIN whoop_paket c ON b.id_paket = c.id_paket
      JOIN admin d ON a.id_admin = d.id_admin
      WHERE a.id_user = '$id' AND b.status_reservasi = 'SELESAI'";
      $query = mysqli_query($db, $history);
      while ($view = mysqli_fetch_assoc($query)) {
        $current_time = $view['tgl_reservasi'];
        $replace_time = strtotime($current_time);
        $timestamp = date("D, d-M-Y", $replace_time);
      ?>
      <tr>
        <td><?php echo $number++; ?></td>
        <td><?php echo $view['id_reservasi']; ?>
        </td>
        <td><?php echo $view['nama_paket']; ?></td>
        <td>Rp. <?php echo number_format($view['harga_paket'],0,',','.'); ?></td>
        <td><?php echo $timestamp; ?> <button type="button" class="btn btn-lg btn-info btn-rounded" data-toggle="popover" title=""
        data-content="<?php echo $view['nama_panggilan']; ?>"
        data-original-title="Divalidasi" ><i class="fas fa-info"></i> Lihat validasi</button></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
