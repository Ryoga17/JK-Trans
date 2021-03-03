<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>
<div class="judul">
        <h1>JK Trans</h1>
        <h2>Mengirim Ke Mana Saja</h2>
        <h3>Canda Bang</h3>
    </div>

<center>
    <br/><br>
    <a href="nota.php" class="btn">Lihat Semua Data</a>
    <br/>

    <h3>Edit data</h3>

    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $query_mysql = mysqli_query($host,"SELECT * FROM tb_nota WHERE id='$id'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="update.php" method="post"> 
    <table>
        <tr>
            <td>S.P</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" name="sp" value="<?php echo $data['sp'] ?>">
            </td> 
        </tr> 
        <tr>
            <td>Colli</td>
            <td><input type="text" name="colli" value="<?php echo $data['colli'] ?>"></td> 
        </tr> 
        <tr>
            <td>Berat</td>
            <td><input type="text" name="berat" value="<?php echo $data['berat'] ?>"></td> 
        </tr> 
        <tr>
            <td>Franco</td>
            <td><input type="text" name="franco" value="<?php echo $data['franco'] ?>"></td> 
        </tr> 
        <tr>
            <td>Confrankert</td>
            <td><input type="text" name="confrankert" value="<?php echo $data['confrankert'] ?>"></td> 
        </tr> 
        <tr>
            <td>Penerima Barang</td>
            <td><input type="text" name="penerima" value="<?php echo $data['penerima'] ?>"></td> 
        </tr> 
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td> 
        </tr> 
        <tr>
            <td></td>
            <td><button type="submit" value="Simpan" class="btn">Submit</button></td> 
        </tr> 
        </table>
    </form>

    <?php
        } 
    ?>

</center>
</body>
</html>