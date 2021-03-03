<?php 
    include 'koneksi.php';
    $username = $_GET['username'];
    $password = $_GET['password'];


    $query = mysqli_query($host, "SELECT * FROM tb_login where username ='$username' and password ='$password'");
    $hasil = mysqli_num_rows($query);
    if ($hasil>0) {
        header("location:nota.php");
    }
    else{
        echo "Gagal Login";
    }
    

?>