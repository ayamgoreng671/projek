<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="bg-gradient-danger">
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row-justify-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row-justify-center">
                            <div class="col-lg-8">
                                <div class="container">
                                    <form action="add_pengumuman_proses.php" method="post"
                                        enctype="multipart/form-data">


                                        <div class="form-group">
                                            <input type="text" name="judul_pengumuman"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Judul Pengumuman" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="text" name="pengumuman" class="form-control form-control-user"
                                                placeholder="Masukkan Pengumuman" autocomplete="off"> -->
                                                <textarea type="text" name="pengumuman" id="" placeholder="Masukkan pengumuman" class="form-control form-control-user" style="height: 104px;" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="gambar_pengumuman"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Bukti Transaksi" autocomplete="off" style="height: 50px;" required>
                                        </div>
                                        <div class="form-group-btn">
                                            <a href="view_pengumuman.php" class="btn btn-warning">Keluar</a>
                                            <button class="btn btn-primary">Tambah Data</button>
                                        </div>
                                        
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>