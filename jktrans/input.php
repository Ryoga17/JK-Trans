<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Input Data</title>
</head>
<body>
<div class="judul">
        <h1>JK Trans</h1>
        <h2>Mengirim Ke Mana Saja</h2>
        <h3>Canda Bang</h3>
    </div>
    <br>

    <center>
        
    <br/>
    <a href="nota.php" class="btn">Lihat Semua Data</a>
    <br/>
    <h3>Input data baru</h3>
    <form action="prosesinput.php" method="post"> 
    <table >
        <tr>
            <td>S.P</td>
            <td>
                <input type="text" name="sp">
            </td> 
        </tr> 
        <tr>
            <td>Colli</td>
            <td><input type="text" name="colli"></td> 
        </tr> 
        <tr>
            <td>Berat</td>
            <td><input type="text" name="berat"></td> 
        </tr> 
        <tr>
            <td>Franco</td>
            <td><input type="text" name="franco"></td> 
        </tr> 
        <tr>
            <td>Confrankert</td>
            <td><input type="text" name="confrankert"></td> 
        </tr> 
        <tr>
            <td>Penerima Barang</td>
            <td><input type="text" name="penerima"></td> 
        </tr> 
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan"></td> 
        </tr> 
        <tr>
            <td></td>
            <td><button type="submit" value="Simpan" class="btn">Submit</button></td> 
        </tr> 
        </table>
    </form>
</center>
</body>
</html>