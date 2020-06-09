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
    <?php
    include 'config.php';
    ?>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#" class="navbar-brand">
                    <img class="logo-extended" src="img/logo/logo-w-extended.png" alt="Logo Extended">
                </a>
            </div>

            <ul class="list-unstyled components">
                <h3>USME SPK</h3>
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Alternatif</a>
                </li>
                <li>
                    <a href="#">Kriteria</a>
                </li>
                <li>
                    <a href="#">Hasil</a>
                </li>
            </ul>

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