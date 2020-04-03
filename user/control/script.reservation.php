<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';

if (isset($_POST['reservation'])) {

  $id = decrypt($_POST['id']);
  $id_user = decrypt($_POST['id_user']);
  $trx_id = autokode("whoop_transaksi", "whoop-trx-".date("Ymd-"));
  $datetime  = $_POST['datetime'];

  $today = date("Y-m-d H:i:s");
  $address = $_POST['address'];

  if ($datetime != '') {
    $check = "SELECT * FROM whoop_reservasi WHERE tgl_reservasi LIKE '%$datetime%' AND status_reservasi != 'PENDING'";
    $querycheck = mysqli_query($db,$check);
    if (mysqli_num_rows($querycheck) > 0) {
      echo "<script>alert('Yah kamu telat, Tanggal ini sudah digunakan :)');
      window.history.back();</script>";
    }else {
      $update = "UPDATE whoop_reservasi SET
      alamat_reservasi = '$address',
      tgl_reservasi = '$datetime',
      status_reservasi = 'DIPESAN'
      WHERE id_reservasi = '$id' ";
      $updatequery = mysqli_query($db, $update);
      if ($updatequery) {
        $insert = "INSERT INTO whoop_transaksi
        (id_transaksi,id_reservasi,id_user,status_transaksi,tgl_transaksi)
        VALUES('$trx_id','$id','$id_user',DEFAULT,'$today')";
        $insertquery = mysqli_query($db, $insert);
        echo "<script>alert('Paket di pesan');
        window.location.href='../reservation.success';</script>";
      }else {
        echo "<script>alert('Gagal');
        window.location.href='../reservation.list';</script>";
      }
    }
  }
}elseif (isset($_GET['cancel'])) {
  $reservation = decrypt($_GET['cancel']);

  $delete  = "DELETE FROM whoop_reservasi WHERE id_reservasi = '$reservation'";
  $query = mysqli_query($db, $delete);
  if ($query) {
    echo "<script>alert('Berhasil dihapus');
    window.location.href='../reservation.list';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
