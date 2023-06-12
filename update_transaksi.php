<?php
include 'connect.php';

$id_transaksi = $_GET['updateid'];
$sql = "SELECT * FROM t_transaksi where  id_transaksi = $id_transaksi ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
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
                                    <form action="update_transaksi_proses.php?<?php echo $id_transaksi;?>" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <select class="form-select" name="kategori_transaksi">
                                                <option selected>Pilih Kategori Transaksi</option>
                                                <option value="debit" <?php if ($row['kategori_transaksi'] == "debit") {
                                                    echo "selected";
                                                } ?>>Debit</option>
                                                <option value="kredit" <?php if ($row['kategori_transaksi'] == "kredit") {
                                                    echo "selected";
                                                } ?>>Kredit</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="nominal" class="form-control form-control-user"
                                                placeholder="Masukkan Nominal Transaksi" autocomplete="off"
                                                value="<?php echo $row['nominal']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="keterangan" class="form-control form-control-user"
                                                placeholder="Masukkan Keterangan Transaksi" autocomplete="off"
                                                value="<?php echo $row['keterangan']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="bukti_transaksi"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Bukti Transaksi" autocomplete="off"><br><br>
                                            <img src="assets/img/bukti_transaksi/<?php echo $row['bukti_transaksi']; ?>"
                                                alt="" width="200px">
                                        </div>
                                        <div class="form-group-btn">
                                            <a href="view_jenis.php" class="btn btn-warning">Kembali</a>
                                            <button class="btn btn-primary" type="submit" name="submit">Ubah Data-'</button>
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