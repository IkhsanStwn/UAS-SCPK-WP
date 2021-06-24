<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "spkwp_mobil";
    //koneksi dengan server database mysql
    $sambungan = new mysqli($hostname, $username, $password, $database);
    if ($sambungan->connect_error)
    {
        // jika terjadi error, matikan proses dengan die() atau exit();
        die('Maaf koneksi gagal: '. $connect->connect_error);
    }
?>