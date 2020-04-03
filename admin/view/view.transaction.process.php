<div class="table-responsive">
  <table id="Admin_table" class="table table-bordered">
    <thead>
      <th>NO</th>
      <th>Nama Pengguna</th>
      <th>Nama Paket</th>
      <th>Harga</th>
      <th>Foto transaksi</th>
      <th>Waktu transaksi</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * From whoop_transaksi a
      JOIN pengguna b On a.id_user = b.id_user
      JOIN whoop_reservasi c On a.id_reservasi = c.id_reservasi
      JOIN whoop_paket d On c.id_paket = d.id_paket
      Where a.status_transaksi != 'SELESAI'";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
        $trx_time = strtotime($view['tgl_transaksi']);
        $local = date("Y-m-d H:i:s");
        $localtime = strtotime($local);
        $diff = $localtime - $trx_time;
        $hour = floor($diff/(60*60));
        $minute = $diff - $hour*(60*60);
       ?>
       <tr>
         <td><?php echo $nomor++ ;?></td>
         <td><?php echo $view['nama_pengguna']; ?></td>
         <td><?php echo $view['nama_paket']; ?> (<?php echo $view['tipe_paket']; ?>)</td>
         <td>Rp.<?php echo number_format($view['harga_paket'],0,',','.'); ?></td>
         <td><img class="img-thumbnail" src="<?php echo $pictLink."/".$view['foto_transaksi']; ?>"> </td>
         <td><?php echo $hour; ?> Jam <?php echo floor($minute/60); ?> Menit yang lalu</td>
         <td>
           <?php if ($view['status_transaksi'] == "BELUM_DIBAYAR"): ?>
             <a href="control/script.transaction?cancel=<?php echo encrypt($view['id_reservasi']); ?>" title="Batalkan reservasi" class="btn btn-rounded btn-danger"><i class="fas fa-times"></i></a>
           <?php else: ?>
             <a href="control/script.transaction?accept=<?php echo encrypt($view['id_reservasi']); ?>&package=<?php echo encrypt($view['id_paket']); ?>&admin=<?php echo @$_SESSION['id_admin']; ?>" title="Pembayaran sah" class="btn btn-rounded btn-success"><i class="fas fa-check"></i> Sah</a> |
             <a href="control/script.transaction?decline=<?php echo encrypt($view['id_reservasi']); ?>" title="Pembayaran tidak sah" class="btn btn-rounded btn-danger"><i class="fas fa-times"></i> Tidak Sah</a>
           <?php endif; ?>
         </td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
