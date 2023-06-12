<?php
include 'connect.php';


$sql = "SELECT * FROM t_jenis where 1";
$result = mysqli_query($con,$sql);


?>

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
                                    <form action="add_transaksi_proses.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" name="jenis_transaksi" value="<?php echo $_GET['id'];?>" hidden>

                                        </div>
                                        <div class="form-group">
                                            <select class="form-select" name="kategori_transaksi" required>
                                                <option selected>Pilih Kategori Transaksi</option>
                                                <option value="debit">Debit</option>
                                                <option value="kredit">Kredit</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="nominal" class="form-control form-control-user"
                                                placeholder="Masukkan Nominal Transaksi" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="keterangan"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Keterangan Transaksi" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="bukti_transaksi"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Bukti Transaksi" autocomplete="off" required>
                                        </div>
                                        <div class="form-group-btn">
                                        <a href="view_jenis.php" class="btn btn-warning">Kembali</a>
                                            <button class="btn btn-primary">Tambah data</button>
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