<?php
include 'connect.php';
if (isset($_POST['submit'])) {

    $kategori_transaksi = $_POST['kategori_transaksi'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    // Cek apakah ada file foto yang diunggah
    if ($_FILES['bukti_transaksi']['name'] !== '') {
        $filename = $_FILES['bukti_transaksi']['name'];
        $tmp_name = $_FILES['bukti_transaksi']['tmp_name'];
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');

        if (!in_array($file_extension, $allowed_extensions)) {
            echo 'Format File Tidak Diizinkan';
            exit;
        }

        $type1 = explode('.', $filename);
        $type2 = $type1[1];


        $newname = 'bukti' . time() . '.' . $type2;
        $destination = './assets/img/bukti_transaksi/' . $newname;

        if (!move_uploaded_file($tmp_name, $destination)) {
            echo 'Gagal memindahkan file';
            exit;
        }

        // Update data informasi dengan foto
        $update = mysqli_query($con, "UPDATE t_transaksi SET
            kategori_transaksi = '" . $kategori_transaksi . "',nominal = '" . $nominal . "',keterangan = '" . $keterangan . "'
            bukti_transaksi = '" . $newname . "'
            
            WHERE id_transaksi = '$id_transaksi'");
    } else {
        // Update data informasi tanpa foto
        $update = mysqli_query($con, "UPDATE t_transaksi SET
                                            kategori_transaksi = '" . $kategori_transaksi . "',keterangan = '" . $keterangan . "',nominal = '" . $nominal . "'
                                            
                                            WHERE id_transaksi = '$id_transaksi'");
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