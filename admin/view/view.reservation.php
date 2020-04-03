<div class="table-responsive">
  <table id="Admin_table" class="table table-bordered">
    <thead>
      <th>NO</th>
      <th>Nama Pengguna</th>
      <th>Nama Paket</th>
      <th>Waktu Reservasi</th>
      <th>Alamat Reservasi</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * From whoop_reservasi a
      JOIN pengguna b On a.id_user = b.id_user
      JOIN whoop_paket c On a.id_paket = c.id_paket
      Where a.status_reservasi = 'PROSES'";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
        $current_time = $view['tgl_reservasi'];
        $replace_time = strtotime($current_time);
        $timestamp = date("D, d-M-Y", $replace_time);
       ?>
       <tr>
         <td class="bg-dark text-white"><?php echo $nomor++ ;?></td>
         <td class="bg-success text-white"><?php echo $view['nama_pengguna']; ?></td>
         <td class="bg-info text-white"><?php echo $view['nama_paket']; ?> (<?php echo $view['tipe_paket']; ?>) <br> Rp.<?php echo number_format($view['harga_paket'],0,',','.'); ?> </td>
         <td class="bg-warning text-white"><?php echo $timestamp; ?></td>
         <td class="bg-primary text-white"><?php echo $view['alamat_reservasi']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
