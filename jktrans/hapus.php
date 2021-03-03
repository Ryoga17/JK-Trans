<?php

include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM tb_nota WHERE id='$id'");

header("location:nota.php?pesan=hapus");
?>