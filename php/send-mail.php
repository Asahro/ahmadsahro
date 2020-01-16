<?php
$to      = 'ahmadsahro@gmail.com';
$subject = 'Pesan Dari Web Sahro';
$message = 'Ada Pesan Dari '.$_POST['nama_depan']." ".$_POST['nama_belakang']."dengan email ".$_POST['email']."dan kontak "
			.$_POST['phone']."\n Pesan Berbunyi : ".$_POST['pesan'];

$headers = 	'From: webmaster@ahmadsahro.online' . "\r\n" .
    		'Reply-To: webmaster@ahmadsahro.online' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

// $to      = $_POST['email'];
// $subject = 'Pesan Anda Telah Dikirim';
// $message = 'Ini adalah Email sebagai notifikasi karena anda telah mengirim pesan di http://www.ahmadsahro.online, saya akan membalas 
// 			secepat yang saya bisa.';

// $headers = 	'From: webmaster@ahmadsahro.online' . "\r\n" .
//     		'Reply-To: webmaster@ahmadsahro.online' . "\r\n" .
//     		'X-Mailer: PHP/' . phpversion();

$status = mail($to, $subject, $message, $headers);
return $status;
?> 