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

    mysqli_query($host, "INSERT INTO tb_nota VALUES('','$sp','$colli','$berat','$franco','$confrankert','$penerima','$keterangan')");
    header("location:nota.php?pesan=input");
    
?>