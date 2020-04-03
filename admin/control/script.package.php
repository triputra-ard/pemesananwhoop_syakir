<?php
include '../../database/connection.php';

if (isset($_POST['new'])) {

  $id = $_POST['id'];
  $tipe = $_POST['tipe'];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST['deskripsi'];

  $moveditem = '../../package/'.$id.'/';
  $directory = 'package/'.$id;

  $allow_ext = array('png','jpg','bmp','jpeg');

  $filename1 = date("Ymd").'-'.$id.'-1-'.basename($_FILES['file1']['name']);
  $filename2 = date("Ymd").'-'.$id.'-2-'.basename($_FILES['file2']['name']);
  $filename3 = date("Ymd").'-'.$id.'-3-'.basename($_FILES['file3']['name']);

  $file_temp1 = $_FILES['file1']['tmp_name'];
  $file_size1 = $_FILES['file1']['size'];
  $file_temp2 = $_FILES['file2']['tmp_name'];
  $file_size2 = $_FILES['file2']['size'];
  $file_temp3 = $_FILES['file3']['tmp_name'];
  $file_size3 = $_FILES['file3']['size'];

  $x1 = explode('.', $filename1);
  $x2 = explode('.', $filename2);
  $x3 = explode('.', $filename3);
  // code...
  $extension1 = strtolower(end($x1));
  $extension2 = strtolower(end($x2));
  $extension3 = strtolower(end($x3));

  if (in_array($extension1&&$extension2&&$extension3 , $allow_ext) === true) {
    if ($file_size1&&$file_size2&&$file_size3 < 2000640) {
      if (!is_dir($moveditem)) {
        mkdir($moveditem);
        if (move_uploaded_file($file_temp1, $moveditem.$filename1)) {
          copy($file_temp2, $moveditem.$filename2);
          copy($file_temp3, $moveditem.$filename3);

          $sql = "INSERT Into whoop_paket
          VALUES ('$id','$tipe',
          '$nama','$harga',
          '$directory/$filename1','$directory/$filename2',
          '$directory/$filename3','$deskripsi',DEFAULT,DEFAULT)";

          $query = mysqli_query($db,$sql);
          if ($query) {
            echo "<script>alert('Ditambahkan');
            window.location.href='../package.view';</script>";
          }else {
            echo "<script>alert('Error');
            window.history.back();</script>";
          }
        }
      }else {
        if (move_uploaded_file($file_temp1, $moveditem.$filename1)) {
          copy($file_temp2, $moveditem.$filename2);
          copy($file_temp3, $moveditem.$filename3);

          $sql = "INSERT Into whoop_paket
          VALUES ('$id','$tipe',
          '$nama','$harga',
          '$directory/$filename1','$directory/$filename2',
          '$directory/$filename3','$deskripsi',DEFAULT,DEFAULT)";

          $query = mysqli_query($db,$sql);
          if ($query) {
            echo "<script>alert('Ditambahkan');
            window.location.href='../package.view';</script>";
          }else {
            echo "<script>alert('Error');
            window.history.back();</script>";
          }
        }
      }
    }else {
      echo "<script>alert('Melebihi ukuran');
      window.history.back();</script>";
    }
  }else {
    echo "<script>alert('Ekstensi tidak didukung');
    window.history.back();</script>";
  }
}elseif (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $tipe = $_POST['tipe'];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST['deskripsi'];
  $status = $_POST['status'];

  $sql = "UPDATE whoop_paket SET tipe_paket = '$tipe',
  nama_paket = '$nama',
  harga_paket = '$harga',
  deskripsi_paket = '$deskripsi',
  status_paket = '$status'
  WHERE id_paket = '$id' ";
  $query=mysql_query($sql);
  if ($query) {
    echo "<script>alert('Diperbarui');
    window.location.href='../package.view';</script>";
  }else {
    echo "<script>alert('Error');
    window.history.back();</script>";
  }

}elseif (isset($_POST['editphotos'])) {
  $id = $_POST['id'];
  $moveditem = '../../package/'.$id.'/';
  $directory = 'package/'.$id;

  $allow_ext = array('png','jpg','bmp','jpeg');

  $filename1 = date("Ymd").'-'.$id.'-1-'.basename($_FILES['file1']['name']);
  $filename2 = date("Ymd").'-'.$id.'-2-'.basename($_FILES['file2']['name']);
  $filename3 = date("Ymd").'-'.$id.'-3-'.basename($_FILES['file3']['name']);

  $file_temp1 = $_FILES['file1']['tmp_name'];
  $file_size1 = $_FILES['file1']['size'];
  $file_temp2 = $_FILES['file2']['tmp_name'];
  $file_size2 = $_FILES['file2']['size'];
  $file_temp3 = $_FILES['file3']['tmp_name'];
  $file_size3 = $_FILES['file3']['size'];

  $x1 = explode('.', $filename1);
  $x2 = explode('.', $filename2);
  $x3 = explode('.', $filename3);
  // code...
  $extension1 = strtolower(end($x1));
  $extension2 = strtolower(end($x2));
  $extension3 = strtolower(end($x3));

  $unlink1 = $_POST['imgunlink1'];
  $unlink2 = $_POST['imgunlink2'];
  $unlink3 = $_POST['imgunlink3'];

  if (in_array($extension1&&$extension2&&$extension3 , $allow_ext) === true) {
    if ($file_size1&&$file_size2&&$file_size3 < 2000640) {
      if (!is_dir($moveditem)) {
        mkdir($moveditem);
        if (move_uploaded_file($file_temp1, $moveditem.$filename1)) {
          copy($file_temp2, $moveditem.$filename2);
          copy($file_temp3, $moveditem.$filename3);
          unlink($unlink1);
          unlink($unlink2);
          unlink($unlink3);

          $sql = "UPDATE whoop_paket
          SET
          foto_1 = '$directory/$filename1',
          foto_2 = '$directory/$filename2',
          foto_3 = '$directory/$filename3'
          WHERE id_paket = '$id'";

          $query = mysql_query($sql);
          if ($query) {
            echo "<script>alert('Diperbarui');
            window.location.href='../package.view';</script>";
          }else {
            echo "<script>alert('Error');
            window.history.back();</script>";
          }
        }
      }else {
        if (move_uploaded_file($file_temp1, $moveditem.$filename1)) {
          copy($file_temp2, $moveditem.$filename2);
          copy($file_temp3, $moveditem.$filename3);
          unlink($unlink1);
          unlink($unlink2);
          unlink($unlink3);

          $sql = "UPDATE whoop_paket
          SET
          foto_1 = '$directory/$filename1',
          foto_2 = '$directory/$filename2',
          foto_3 = '$directory/$filename3'
          WHERE id_paket = '$id'";

          $query = mysql_query($sql);
          if ($query) {
            echo "<script>alert('Diperbarui');
            window.location.href='../package.view';</script>";
          }else {
            echo "<script>alert('Error');
            window.history.back();</script>";
          }
        }
      }
    }else {
      echo "<script>alert('Melebihi ukuran');
      window.history.back();</script>";
    }
  }else {
    echo "<script>alert('Ekstensi tidak didukung');
    window.history.back();</script>";
  }
}
 ?>
