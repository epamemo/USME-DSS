<?php
include 'header.php';
?>


<h1>Data Alternatif</h1>
<br>
<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">
    Tambah Ikan
</button>
<br>
<table class=" table table-striped table-hover">
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
                <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $d['id']; ?>">Edit</a>
                <a href="#" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myDelete<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <!-- Modal Edit -->
        <div class="modal fade" id="myModal<?php echo $d['id']; ?>" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Alternatif</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="alternatif.php" method="POST">
                            <?php
                            $id = $d['id'];
                            $query_edit = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id='$id'");
                            while ($row = mysqli_fetch_array($query_edit)) {
                            ?>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="table" value="<?php echo "alternatif" ?>">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="edit" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                </div>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="myDelete<?php echo $d['id']; ?>" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Alternatif</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="alternatif.php" method="POST">
                            <?php
                            $id = $d['id'];
                            $query_edit = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id='$id'");
                            while ($row = mysqli_fetch_array($query_edit)) {
                            ?>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="table" value="alternatif">
                                <p class="">Anda yakin ingin menghapus <?php echo $row['nama']; ?>?</p>
                                <div class="modal-footer">
                                    <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                </div>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</table>
<!-- Modal Add -->
<div class="modal fade" id="myModalAdd" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Alternatif</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form role="form" action="alternatif.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="table" value="alternatif">
                    <div class="form-group">
                        <label>Nama Ikan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add" class="btn btn-success">Tambah Data</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include 'footer.php';
?>