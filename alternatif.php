<?php
include 'header.php';
?>

<div class="container-fluid">
    <div class="form">
        <form action="fungsi_tambah.php" method="post">
            <div class="form-group">
                <label for="namaIkan">Nama Ikan</label>
                <input type="text" name="contoh: Bawal" id="namaIkan" class="form-control">
            </div>
            <button type="submit" class="btn btn-info">Tambah Ikan</button>
        </form>
    </div>
    <br>
    <h1>Data Alternatif</h1>
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