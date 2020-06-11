<?php
include('../config.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
//query update
$query = "UPDATE alternatif SET nama='$nama' WHERE id='$id' ";
if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:../alternatif.php");
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($query);
}
