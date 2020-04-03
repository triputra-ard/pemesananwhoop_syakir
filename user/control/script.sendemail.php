<?php
include '../function/function-mail-tri.php';
$receipent = $_SESSION['email'];
$receipent_name = $_SESSION['name']
$mail->addAddress($receipent, $receipent_name);
$mail->Subject = 'WHOOP ! || Menunggu Pembayaran';
$message = "Hai. Terima kasih sudah melakukan reservasi.
Segera lakukan pembayaran ke rekening : 0000000 (BANK : A/N).<br>
Jika melabihi 6 jam maka reservasi anda akan dibatalkan.";
$mail->Body = $message;
$mail->setFrom('smile.trie@gmail.com', 'no-reply');
$mail->addReplyTo('smile.trie@gmail.com', 'ADMIN');
$mail->AddCC("no-reply@tri.com", "ADMIN");
$mail->isHTML(true);
$mail->send(); //Email send ?>
