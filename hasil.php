<?php
include 'header.php';
?>

<h1>Hasil Perhitungan</h1>
<div class="table-responsive-lg">
    <br>
    <table class=" table table-striped table-hover">
        <tr>
            <th>Data Alternatif</th>
            <?php
            $queryk = mysqli_query($koneksi, "SELECT * FROM kriteria");
            while ($k = mysqli_fetch_array($queryk)) { ?>
                <th><?php echo $k['nama']; ?></th>
            <?php } ?>
        </tr>
        <?php
        $no = 1;
        $min = 10;
        $minhb = 10;
        $maxhp = 0;
        $queryn = mysqli_query($koneksi, "SELECT * FROM nilai_normalisasi");
        while ($d = mysqli_fetch_array($queryn)) {
            if ($d['lamapanen'] < $min) {
                $min = $d['lamapanen'];
            }
            if ($d['hargabibit'] < $minhb) {
                $minhb = $d['hargabibit'];
            }
            if ($d['hargapanen'] > $maxhp) {
                $maxhp = $d['hargapanen'];
            }
            $nama[] = $d['nama'];
            $lamapanen[] = $d['lamapanen'];
            $hargabibit[] = $d['hargabibit'];
            $hargapanen[] = $d['hargapanen'];
        }
        ?>
        <?php
        for ($i = 0; $i < 3; $i++) { ?>
            <tr>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $nilailp[] = $min / $lamapanen[$i]; ?></td>
                <td><?php echo $nilaihb[] = $minhb / $hargabibit[$i]; ?></td>
                <td><?php echo $nilaihp[] = $hargapanen[$i] / $maxhp; ?></td>
            </tr>
        <?php } ?>
    </table>

    <h1>Peringkat Keputusan</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Data Alternatif</th>
            <th>Nilai</th>
        </tr>
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <tr>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $alldata[] = $nilailp[$i] * 40 + $nilaihb[$i] * 20 + $nilaihp[$i] * 40; ?></td>
            </tr>
        <?php } ?>
    </table>
    <h1>Peringkat Terbaik</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Data Alternatif</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < count($nama); $i++) {
                if ($alldata[$i] == max($alldata)) {
                    $namamax = $nama[$i];
                    $nilaimax = $alldata[$i];
                }
            }
            ?>
            <td><?php echo $namamax; ?></td>
            <td><?php echo $nilaimax; ?></td>
        </tr>
    </table>
</div>

<?php
include 'footer.php';
?>