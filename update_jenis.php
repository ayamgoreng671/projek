<?php
include 'connect.php';

$id_jenis = $_GET['updateid'];
$sql = "SELECT * FROM t_jenis where  id_jenis = $id_jenis ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$no = 1;
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
                                    <form action="" method="post" enctype="multipart/form-data">


                                        <div class="form-group">
                                            <input type="text" name="jenis_transaksi"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Jenis Transaksi"
                                                value="<?php echo $row['jenis_transaksi']; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="keterangan_jenis"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Keterangan Jenis"
                                                value="<?php echo $row['keterangan_jenis']; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="saldo_awal"
                                                class="form-control form-control-user" placeholder="Masukkan Saldo Awal"
                                                value="<?php echo $row['saldo_awal']; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="gambar_jenis"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Bukti Transaksi" autocomplete="off"><br><br>
                                            <img src="assets/img/jenis/<?php echo $row['gambar_jenis']; ?>" alt=""
                                                width="200px">
                                        </div>
                                        <div class="form-group-btn">
                                        <a href="view_jenis.php" class="btn btn-warning">Keluar</a>
                                            <button class="btn btn-primary" type="submit" name="submit">Ubah
                                                Data</button>
                                                
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['submit'])) {

                                        $jenis_transaksi = $_POST['jenis_transaksi'];
                                        $keterangan_jenis = $_POST['keterangan_jenis'];
                                        $saldo_awal = $_POST['saldo_awal'];

                                        // Cek apakah ada file foto yang diunggah
                                        if ($_FILES['gambar_jenis']['name'] !== '') {
                                            $filename = $_FILES['gambar_jenis']['name'];
                                            $tmp_name = $_FILES['gambar_jenis']['tmp_name'];
                                            $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
                                            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');

                                            if (!in_array($file_extension, $allowed_extensions)) {
                                                echo 'Format File Tidak Diizinkan';
                                                exit;
                                            }

                                            $type1 = explode('.', $filename);
                                            $type2 = $type1[1];

                                            $newname = 'jenis' . time() . '.' . $type2;
                                            $destination = './assets/img/jenis/' . $newname;

                                            if (!move_uploaded_file($tmp_name, $destination)) {
                                                echo 'Gagal memindahkan file';
                                                exit;
                                            }

                                            // Update data informasi dengan foto
                                            $update = mysqli_query($con, "UPDATE t_jenis SET
            jenis_transaksi = '" . $jenis_transaksi . "',keterangan_jenis = '" . $keterangan_jenis . "',saldo_awal = '" . $saldo_awal . "'
            gambar_jenis = '" . $newname . "'
            
            WHERE id_jenis = '$id_jenis'");
                                        } else {
                                            // Update data informasi tanpa foto
                                            $update = mysqli_query($con, "UPDATE t_jenis SET
                                            jenis_transaksi = '" . $jenis_transaksi . "',keterangan_jenis = '" . $keterangan_jenis . "',saldo_awal = '" . $saldo_awal . "'
                                            
                                            WHERE id_jenis = $id_jenis ");
                                        }
                                        if ($update) {
                                            echo '<script>alert("Berhasil!")</script>';
                                            echo '<script>window.location="view_jenis.php"</script>';
                                            exit;
                                        } else {
                                            die(mysqli_error($con));
                                            echo '<script>alert("Gagal Disimpan!")</script>';
                                        }
                                    }
                                    ?>
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