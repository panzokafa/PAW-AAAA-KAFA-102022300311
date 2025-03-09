<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "pendaftaran_mahasiswa"; 


$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>