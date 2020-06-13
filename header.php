<?php
include 'config.php';
include 'FUNC/fungsi.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $table = $_POST['table'];
    delete($id, $table);
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $table = $_POST['table'];
    edit($id, $nama, $table);
}
if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $table = $_POST['table'];
    tambahAlternatif($nama, $table);
}
if (isset($_POST['addAcuan'])) {
    $table = $_POST['table'];
    $id_kriteria = $_POST['id_kriteria'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];
    $nilai5 = $_POST['nilai5'];
    $atribut = $_POST['atribut'];
    $bobot = $_POST['bobot'];
    tambahAcuan($table, $id_kriteria, $nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $bobot, $atribut);
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>USME-DSS</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.css"">
    <!-- Custom CSS -->
    <link rel=" stylesheet" href="css/style.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.css">

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#" class="navbar-brand">
                    <img class="logo-extended" src="img/logo/logo-w-extended.png" alt="Logo Extended">
                </a>
            </div>

            <ul class="list-unstyled components with-icon">
                <h3>USME SPK</h3>
                <li class="active">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="with-icon">Home</span>
                    </a>
                </li>
                <li>
                    <a href="alternatif.php">Alternatif</a>
                </li>
                <li>
                    <a href="kriteria.php">Kriteria</a>
                </li>
                <li>
                    <a href="nilai_kriteria.php">Nilai Kriteria</a>
                </li>
                <li>
                    <a href="#">Hasil</a>
                </li>
            </ul>
            <!--
            <div class="footer">
                <p>Made by Epafraditus Memoriano (USME)</p>
            </div>-->
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-menu">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>