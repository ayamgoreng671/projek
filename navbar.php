<?php

session_start();

date_default_timezone_set('Asia/Jakarta');

if (empty($_SESSION['username']) or empty($_SESSION['password']) or empty($_SESSION['id_user'])) {
    echo "<script>
                alert('Login Required');
                document.location = 'login.php';
            </script>";
}

?>


<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <nav class="navbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="navbar-brand">AYAM</a>
                        </li>

                    </ul>

                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                            <a class="nav-link" href="view_laporan.php">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_jenis.php">Data Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_pengumuman.php">Pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Profil</a>
                        </li>

                        <?php
                        if (isset($_SESSION['id_user'])) {
                            echo '<li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>';
                        } else {
                            echo '<li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>';
                        } ?>


                    </ul>
                    <!-- </div> -->
                </nav>

            </div>
        </div>

    </div>

</div>