<?php
// koneksi database
include '../config.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO alternatif VALUES('','$nama')");

// mengalihkan halaman kembali ke index.php
header("location:../alternatif.php");
