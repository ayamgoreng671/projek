<?php

include 'connect.php';
session_start();

$id_jenis = $_POST['jenis_transaksi'];
$id_user = $_SESSION['id_user'];
$rand = '';
$ayam = True;
while ($ayam = True) {
    for ($i = 0; $i < 20; $i++) {
        $rand .= mt_rand(0, 9);
    }
    $sql_kode = "SELECT count(*) as ayam FROM t_transaksi where kode_transaksi = '$rand'";
    $query_kode = mysqli_query($con, $sql_kode);
    $kode_cek = mysqli_fetch_assoc($query_kode);
    if ($kode_cek['ayam'] == 0) {
        $kode_transaksi = $rand;
        $ayam = False;
        break;

    }
}
$tanggal_transaksi = date("Y-m-d");
$kategori_transaksi = $_POST['kategori_transaksi'];
$nominal = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

$filename = $_FILES['bukti_transaksi']['name'];
$tmp_name = $_FILES['bukti_transaksi']['tmp_name'];

$type1 = explode('.', $filename);
$type2 = strtolower($type1[1]);

$image_name = 'bukti' . time() . '.' . $type2;

$tipe_izin = array('jpg', 'jpeg', 'png');

if (!in_array($type2, $tipe_izin)) {

    echo 'Format File Tidak Diizinkan';
} else {
    move_uploaded_file($tmp_name, './assets/img/bukti_transaksi/' . $image_name);
}

$insert = mysqli_query($con, "INSERT INTO t_transaksi VALUES (
                                            NULL,
                                            '$id_jenis','$id_user','$kode_transaksi','$tanggal_transaksi','$kategori_transaksi','$nominal','$keterangan','$image_name')");
if ($insert) {
    echo '<script>alert("Insert data transaksi berhasil"); window.location="view_transaksi.php?id=' . $id_jenis . '"</script>';
} else {
    die(mysqli_error($con));
    echo '<script>alert("Insert data transaksi gagal"); window.location="add_transaksi.php"</script>';
}


?>