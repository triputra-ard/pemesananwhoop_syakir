<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';

if (isset($_GET['accept'])) {
  $reservation = decrypt($_GET['accept']);
  $package = decrypt($_GET['package']);
  $packagesql = "SELECT reservasi From whoop_paket WHERE id_paket = '$package'";
  $packagequery = mysqli_query($db,$packagesql);
  $fetchdata = mysqli_fetch_assoc($packagequery);
  $setreservation = $fetchdata['reservasi'] + 1;
  $id_admin = $_GET['admin'];

  $update = "UPDATE whoop_transaksi SET status_transaksi = 'SELESAI', id_admin = '$id_admin' Where id_reservasi = '$reservation'";
  $query = mysqli_query($db,$update);
  if ($query) {
    mysqli_query($db,"UPDATE whoop_paket SET reservasi = '$setreservation' WHERE id_paket = '$package'");
    mysqli_query($db,"UPDATE whoop_reservasi SET status_reservasi = 'PROSES' WHERE id_reservasi = '$reservation'");
    echo "<script>alert('Berhasil diperbarui');
    window.location.href='../reservation.view';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['decline'])) {
  $reservation = decrypt($_GET['decline']);
  $id_admin = $_GET['admin'];

  $update = "UPDATE whoop_transaksi SET status_transaksi = 'BELUM_DIBAYAR' Where id_reservasi = '$reservation'";
  $query = mysqli_query($db,$update);

  if ($query) {
    mysqli_query($db,"UPDATE whoop_reservasi SET status_reservasi = 'DIPESAN' WHERE id_reservasi = '$reservation'");
    echo "<script>alert('Berhasil diperbarui');
    window.location.href='../transaction.view';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['cancel'])) {
  $reservation = decrypt($_GET['cancel']);
  $id_admin = $_GET['admin'];

  $update = "DELETE FROM whoop_transaksi Where id_reservasi = '$reservation'";
  $query = mysqli_query($db,$update);

  if ($query) {
    mysqli_query($db,"UPDATE whoop_reservasi SET status_reservasi = 'PENDING' WHERE id_reservasi = '$reservation'");
    echo "<script>alert('Berhasil diperbarui');
    window.location.href='../transaction.view';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}


 ?>
