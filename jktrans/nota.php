<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>JK Trans</title>
</head>
<body>
    <div class="judul">
        <h1>JK Trans</h1>
        <h2>Mengirim Ke Mana Saja</h2>
        <h3>Canda Bang</h3>
    </div>
    <br>

    <center>
    <h4>Nota JK Trans</h4>
<a href="input.php" class="btn">+ Tambah Data Baru</a><br><br>
<div class="bg-table">
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>S.P.</th>
            <th>Colli</th>
            <th>Berat</th>
            <th>Franco</th>
            <th>Confrankert</th>
            <th>Penerima Barang</th>
            <th>Keterangan</th>
            <th>Opsi</th>
        </tr>

        <?php 
            include 'koneksi.php';
            $query_mysql = mysqli_query($host, "SELECT * FROM tb_nota");
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td> <?php echo $nomor++; ?></td>
                <td> <?php echo $data['sp']; ?></td>
                <td> <?php echo $data['colli']; ?></td>
                <td> <?php echo $data['berat']; ?></td>
                <td> <?php echo $data['franco']; ?></td>
                <td> <?php echo $data['confrankert']; ?></td>
                <td> <?php echo $data['penerima']; ?></td>
                <td> <?php echo $data['keterangan']; ?></td>
                <td>
                <a class="btn" href=" edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a class="btn-x" href=" hapus.php?id=<?php echo $data['id']; ?>">Hapus</a> 
                </td>
            </tr>
            <?php
            }
            ?>
    </table>
</div>
    </center>
    
</body>
</html>