<!DOCTYPE html>
<?php
require_once '../function/pagelink.php';
require_once '../function/function-by-tri.php';
include '../function/authors.php';
include '../database/connection.php';
session_start();
if (empty(@$_SESSION['id'])) {
  echo "<script>alert('Anda harus masuk dahulu')
  window.location.replace('$pageLogin');</script>";
}elseif (@$_SESSION['status'] == "TIDAK_AKTIF") {
  header('location:'.$notactive);
}elseif (@$_SESSION['status'] == "DIBLOKIR") {
  header('location:'.$blocked);
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tri">
    <title>Whoop ! + <?php echo $titlePage; ?></title>
    <!-- Bootstrap CORE -->
    <link rel="stylesheet" href="<?php echo $framework; ?>bootstrap/css/bootstrap.min.css">

    <!-- Addtional plugin -->
    <link rel="stylesheet" href="<?php echo $fontawesome; ?>">
    <link rel="stylesheet" href="<?php echo $framework; ?>animate/animate.min.css">
    <link href="<?php echo $framework; ?>fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $framework; ?>css/footer-clean.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>datatables/datatables.bootstrap4.min.css">
    <!-- Style Plugin -->
    <link rel="stylesheet" href="<?php echo $framework; ?>libs/css/style.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>style-by-tri.css">
  </head>
  <body  style="font-family:'Segoe UI';">
