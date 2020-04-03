<div class="table-responsive">
  <table id="Admin_table" class="table table-bordered">
    <thead>
      <th>NO</th>
      <th>Nama Paket</th>
      <th>Harga</th>
      <th>Foto 1</th>
      <th>Foto 2</th>
      <th>Foto 3</th>
      <th>Deskripsi</th>
      <th>Status</th>
      <th>Pemesanan</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * From whoop_paket";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
       ?>
       <tr>
         <td><?php echo $nomor++ ;?></td>
         <td><?php echo $view['nama_paket']; ?> (<?php echo $view['tipe_paket']; ?>)</td>
         <td>Rp.<?php echo number_format($view['harga_paket'],0,',','.'); ?></td>
         <td><img class="img-thumbnail" src="<?php echo $pictLink."/".$view['foto_1']; ?>"> </td>
         <td><img class="img-thumbnail" src="<?php echo $pictLink."/".$view['foto_2']; ?>"> </td>
         <td><img class="img-thumbnail" src="<?php echo $pictLink."/".$view['foto_3']; ?>"> </td>
         <td><?php echo $view['deskripsi_paket']; ?></td>
         <td><?php echo $view['status_paket']; ?></td>
         <td><?php echo $view['reservasi']; ?></td>
         <td>
           <a href="package.edit?id=<?php echo encrypt($view['id_paket']); ?>" title="Edit paket" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
         </td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
