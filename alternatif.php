<?php
include 'header.php';
?>

<div class="container-fluid">
    <h1>Data Alternatif</h1>
    <br>
    <a href="tambah.php" class="btn btn-info">Tambah Alternatif</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Ikan</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM alternatif");
        while ($d = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td>
                    <a href="edit.php?id=" <?php echo $d['id']; ?>">Edit</a>
                    <a href="hapus.php?id=" <?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php
include 'footer.php';
?>