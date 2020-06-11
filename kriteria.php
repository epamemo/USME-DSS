<?php
include 'header.php';
?>


<h1>Data Kriteria</h1>
<br>
<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">
  Tambah Kriteria
</button>
<br>
<table class=" table table-striped table-hover">
  <tr>
    <th>Kode</th>
    <th>Kriteria</th>
    <th>Opsi</th>
  </tr>
  <?php
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
  while ($d = mysqli_fetch_array($query)) { ?>
    <tr>
      <td><?php echo "C" . $no++; ?></td>
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
            <h4 class="modal-title">Edit Data kriteria</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form role="form" action="kriteria.php" method="POST">
              <?php
              $id = $d['id'];
              $query_edit = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id='$id'");
              while ($row = mysqli_fetch_array($query_edit)) {
              ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="table" value="<?php echo "kriteria" ?>">
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
            <h4 class="modal-title">Edit Data kriteria</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form role="form" action="kriteria.php" method="POST">
              <?php
              $id = $d['id'];
              $query_edit = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id='$id'");
              while ($row = mysqli_fetch_array($query_edit)) {
              ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="table" value="kriteria">
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
        <h4 class="modal-title">Tambah Data kriteria</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form role="form" action="kriteria.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="hidden" name="table" value="kriteria">
          <div class="form-group">
            <label>Nama Kriteria</label>
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
<!--
<script>
  function maxLengthCheck(object) {
    if (object.value.length > object.max.length)
      object.value = object.value.slice(0, object.max.length)
  }

  function isNumeric(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>
-->
<?php
include 'footer.php';
?>