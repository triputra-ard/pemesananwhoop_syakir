<div class="table-responsive">
  <table id="Admin_table" class="table table-bordered">
    <thead>
      <th>NO</th>
      <th>Nama Pengguna</th>
      <th>Nama Paket</th>
      <th>Harga</th>
      <th>Foto transaksi</th>
      <th>Waktu transaksi</th>
      <th>Divalidasi</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * From whoop_transaksi a
      JOIN pengguna b On a.id_user = b.id_user
      JOIN whoop_reservasi c On a.id_reservasi = c.id_reservasi
      JOIN whoop_paket d On c.id_paket = d.id_paket
      LEFT JOIN admin e ON a.id_admin = e.id_admin
      Where a.status_transaksi = 'SELESAI'";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
        $current_time = $view['tgl_transaksi'];
        $replace_time = strtotime($current_time);
        $timestamp = date("D, d-M-Y", $replace_time);
       ?>
       <tr>
         <td><?php echo $nomor++ ;?></td>
         <td><?php echo $view['nama_pengguna']; ?></td>
         <td><?php echo $view['nama_paket']; ?> (<?php echo $view['tipe_paket']; ?>)</td>
         <td>Rp.<?php echo number_format($view['harga_paket'],0,',','.'); ?></td>
         <td><img class="img-thumbnail" src="<?php echo $pictLink."/".$view['foto_transaksi']; ?>"></td>
         <td><?php echo $timestamp; ?> &nbsp;
           <button type="button" class="btn btn-lg btn-info btn-rounded" data-toggle="popover" title=""
         data-content="<?php echo $view['tgl_reservasi']; ?>"
         data-original-title="Tanggal Reservasi" ><i class="fas fa-info"></i> Lihat Tanggal Reservasi</button></td>
         <td><?php echo $view['nama_panggilan']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
