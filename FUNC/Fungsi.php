<?php
include 'config.php';

function tambahAlternatif($nama, $table)
{
    include 'config.php';
    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];

    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO $table VALUES('','$nama')");

    // mengalihkan halaman kembali ke index.php
    header("location:" . $table . ".php");
}

function edit($id, $nama, $table)
{
    include('config.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $table = $_POST['table'];
    //query update
    $query = "UPDATE $table SET nama='$nama' WHERE id='$id' ";
    if (mysqli_query($koneksi, $query)) {
        # credirect ke page index
        header("location:" . $table . ".php");
    } else {
        echo "ERROR, data gagal diupdate" . mysqli_error($query);
    }
}

function delete($id, $table)
{
    include 'config.php';
    $id = $_POST['id'];
    $table = $_POST['table'];
    //query update
    $query = "DELETE FROM $table WHERE id='$id' ";
    if (mysqli_query($koneksi, $query)) {
        # credirect ke page index
        header("location:" . $table . ".php");
    } else {
        echo "ERROR, data gagal diupdate" . mysqli_error($query);
    }
}
