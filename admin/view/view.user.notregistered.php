<div class="table-responsive">
  <table id="Admin_table" class="table table-bordered">
    <thead>
      <th>NO</th>
      <th>Nama Pengguna</th>
      <th>Nomor Telepon</th>
      <th>Email</th>
      <th>Password</th>
      <th>Terdaftar pada:</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * From pengguna WHERE email IS NULL";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
        $current_time = $view['waktu_daftar'];
        $replace_time = strtotime($current_time);

        $timestamp = date("D, d-M-Y H:I:s", $replace_time);
       ?>
       <tr>
         <td><?php echo $nomor++ ;?></td>
         <td><?php echo $view['nama_pengguna']; ?></td>
         <td><?php echo $view['nomor_telepon']; ?></td>
         <td><?php echo $view['email']; ?></td>
         <td><?php echo $view['password']; ?></td>
         <td><?php echo $timestamp; ?></td>
         <td>
            <a href="#" title="Hapus" data-toggle="modal" data-target="#askdelete<?php echo $view['id_user']; ?>" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i></a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>
