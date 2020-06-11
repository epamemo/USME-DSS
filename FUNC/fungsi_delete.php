<?php
include('../config.php');
$id = $_POST['id'];
//query update
$query = "DELETE FROM alternatif WHERE id='$id' ";
if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:../alternatif.php");
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($query);
}
