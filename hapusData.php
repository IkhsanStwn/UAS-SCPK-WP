<?php 
    // koneksi database
    include("basisdata.php");
 
    // menangkap data id yang di kirim dari url
    $id = $_GET['id'];
 
 
    // menghapus data dari database
    $query = "DELETE FROM data_mobil WHERE id like $id"; 
    $hasil_mysql = mysqli_query($sambungan, $query) or die (mysqli_error($sambungan));
 
    // mengalihkan halaman kembali ke index.php
    header("location:hasil.php?sort=semua");
 
?>