<?php
include 'connect.php';

$id_pengumuman = $_GET['update_pengumuman'];
$sql = "SELECT * FROM t_pengumuman where  id_pengumuman = $id_pengumuman ";
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
                                            <input type="text" name="judul_pengumuman"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Judul Pengumuman"
                                                value="<?php echo $row['judul_pengumuman']; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="pengumuman" class="form-control form-control-user"
                                                placeholder="Masukkan Pengumuman"
                                                value="<?php echo $row['pengumuman']; ?>" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="gambar_pengumuman"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Bukti Transaksi" autocomplete="off"><br><br>
                                            <img src="assets/img/pengumuman/<?php echo $row['gambar_pengumuman']; ?>"
                                                alt="" width="200px">
                                        </div>
                                        <div class="form-group-btn">
                                            <a href="view_pengumuman.php" class="btn btn-warning">Kembali</a>
                                            <button type="submit" name="submit" class="btn btn-primary">Ubah
                                                Data</button>
                                        </div>

                                    </form>
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $id = $id_pengumuman;
                                        $judul_pengumuman = $_POST['judul_pengumuman'];
                                        $pengumuman = $_POST['pengumuman'];

                                        // Cek apakah ada file foto yang diunggah
                                        if ($_FILES['gambar_pengumuman']['name'] !== '') {
                                            $filename = $_FILES['gambar_pengumuman']['name'];
                                            $tmp_name = $_FILES['gambar_pengumuman']['tmp_name'];
                                            $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
                                            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');

                                            if (!in_array($file_extension, $allowed_extensions)) {
                                                echo 'Format File Tidak Diizinkan';
                                                exit;
                                            }

                                            $type1 = explode('.', $filename);
                                            $type2 = $type1[1];

                                            $newname = 'pengumuman' . time() . '.' . $type2;
                                            $destination = './assets/img/pengumuman/' . $newname;

                                            if (!move_uploaded_file($tmp_name, $destination)) {
                                                echo 'Gagal memindahkan file';
                                                exit;
                                            }

                                            // Update data informasi dengan foto
                                            $update = mysqli_query($con, "UPDATE t_pengumuman SET
            judul_pengumuman = '" . $judul_pengumuman . "',pengumuman = '" . $pengumuman . "',
            gambar_pengumuman = '" . $newname . "'
            
            WHERE id_pengumuman = '$id'");
                                        } else {
                                            // Update data informasi tanpa foto
                                            $update = mysqli_query($con, "UPDATE t_pengumuman SET
                                            judul_pengumuman = '" . $judul_pengumuman . "',pengumuman = '" . $pengumuman . "'
                                            
                                            WHERE id_pengumuman = '$id'");
                                        }

                                        if ($update) {
                                            echo '<script>alert("Berhasil!")</script>';
                                            echo '<script>window.location="view_pengumuman.php"</script>';
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