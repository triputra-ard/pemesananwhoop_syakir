<?php
include '../database/connection.php';
include '../function/function-by-tri.php';
include '../function/function-mail-tri.php';
session_start();
$code = randomcode();
if (isset($_POST['register'])) {

  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  $phone = $_POST['phones'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $timestamp = date("Y-m-d H:i:s");

  if ($email != "") {
    $_SESSION[email_temp] = $_POST['email'];
    $_SESSION[id_temp] = $_POST['id'];
    $checked = "SELECT * FROM pengguna Where email = '$email'";
    $checkquery = mysql_query($checked);
    if (mysqli_num_rows($checkquery) > 0) {
      $sql = "INSERT INTO pengguna (id_user,nama_pengguna,nomor_telepon,alamat,password,kode_aktivasi,status_aktivasi,waktu_daftar)
      VALUES('$id','$fullname','$phone','$address','$password','$code',DEFAULT,'$timestamp')";
      $mysql = mysqli_query($db, $sql);
      header('location:../page.equal');
    }else {
      $mail->addAddress($email, $email);
      $mail->Subject = 'WHOOP ! || Verifikasi Email';
      $message = "Hai,Terima kasih sudah bergabung
      <br> Mohon Masukkan kode berikut : <b> $code </b> . EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
      $mail->Body = $message;
      $mail->setFrom('smile.trie@gmail.com', 'no-reply');
      $mail->addReplyTo('smile.trie@gmail.com', 'ADMIN');
      $mail->AddCC("no-reply@tri.com", "ADMIN");
      $mail->isHTML(true);
      $sql = "INSERT INTO pengguna (id_user,nama_pengguna,nomor_telepon,alamat,email,password,kode_aktivasi,status_aktivasi,waktu_daftar)
      VALUES('$id','$fullname','$phone','$address','$email','$password','$code',DEFAULT,'$timestamp')";
      $mysql = mysqli_query($db, $sql);
      if(($mysql)&&($mail->send())){
        header('location:../page.send?u='.encrypt($email));
      }else {
        echo "<script>alert('Terjadi kesalahan');
        window.history.back();</script>";
      }
    }
  }

}elseif (isset($_POST['equal'])) {
  $id = $_POST['id'];
  $email = $_POST['email'];

  if ($email != "") {
    $checked = "SELECT * FROM pengguna Where email = '$email'";
    $checkquery = mysqli_query($db,$checked);
    if (mysqli_num_rows($checkquery) > 0) {
      echo "<script>alert('Email sudah digunakan');
      window.history.back();</script>";
    }else {
      $mail->addAddress($email, $email);
      $mail->Subject = 'WHOOP ! || Verifikasi Email';
      $message = "Hai,Terima kasih sudah bergabung
      <br> Mohon Masukkan kode berikut : <b> $code </b> . EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
      $mail->Body = $message;
      $mail->setFrom('smile.trie@gmail.com', 'no-reply');
      $mail->addReplyTo('smile.trie@gmail.com', 'ADMIN');
      $mail->AddCC("no-reply@tri.com", "ADMIN");
      $mail->isHTML(true);
      $sql = "UPDATE pengguna SET email = '$email', kode_aktivasi = '$code' WHERE id_user='$id'";
      $mysql = mysqli_query($db, $sql);
      if(($mysql)&&($mail->send())){
        header('location:../page.send?u='.encrypt($email));
      }else {
        echo "<script>alert('Terjadi kesalahan');
        window.location.back();</script>";
      }
    }
  }
}elseif (isset($_GET['resendmail'])) {
  $detectmail = decrypt($_GET['u']);
  $sqlsend = "SELECT * FROM pengguna WHERE email = '$detectmail'";
  $myqlemail = mysqli_query($db,$sqlsend);
  $detect = mysqli_fetch_assoc($myqlemail);
  $kode = $detect['kode_aktivasi'];

  $receipent = $detectmail;
  $mail->addAddress($detectmail, $detectmail);
  $mail->Subject = 'WHOOP ! || Verifikasi Email';
  $message = "Hai,Terima kasih sudah bergabung
  <br> Mohon Masukkan kode berikut : <b> $kode </b> . EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
  $mail->Body = $message;
  $mail->setFrom('smile.trie@gmail.com', 'no-reply');
  $mail->addReplyTo('smile.trie@gmail.com', 'ADMIN');
  $mail->AddCC("no-reply@tri.com", "ADMIN");
  $mail->isHTML(true); //Email send

  if ($mail->send()) {
    echo "<script>alert('Dikirim');
    window.history.back();</script>";
  }else {
    echo "<script>alert('GALAT');
    window.history.back();</script>";
  }

}
 ?>
