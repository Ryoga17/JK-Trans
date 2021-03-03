<?php
include 'koneksi.php';
$id = $_POST['id'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

mysqli_query($host, "UPDATE tb_nota SET sp='$sp', colli='$colli', berat='$berat', franco='$franco', 
confrankert='$confrankert', penerima='$penerima', keterangan='$keterangan' WHERE id='$id'");

header("location:nota.php?pesan=update");
?>