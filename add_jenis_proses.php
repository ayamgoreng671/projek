<?php

include 'connect.php';
session_start();

$id_user =  $_SESSION['id_user'];

$jenis_transaksi = $_POST['jenis_transaksi'];
$keterangan_jenis = $_POST['keterangan_jenis'];
$saldo_awal = $_POST['saldo_awal'];


$tanggal_transaksi = date("Y-m-d");
$kategori_transaksi = $_POST['kategori_transaksi'];
$nominal = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

$filename = $_FILES['bukti_transaksi']['name'];
$tmp_name = $_FILES['bukti_transaksi']['tmp_name'];

$type1 = explode('.', $filename);
$type2 = strtolower($type1[1]);

$image_name = 'jenis' . time() . '.' . $type2;

$tipe_izin = array('jpg', 'jpeg', 'png');

if (!in_array($type2, $tipe_izin)) {

    echo 'Format File Tidak Diizinkan';
} else {
    move_uploaded_file($tmp_name, './assets/img/jenis/' . $image_name);
}

$insert = mysqli_query($con, "INSERT INTO t_jenis VALUES (
                                            NULL,
                                            '$id_user','$jenis_transaksi','$image_name','$keterangan_jenis','$saldo_awal')");
if ($insert) {
    echo '<script>alert("Insert data transaksi berhasil"); window.location="view_jenis.php"</script>';
} else {
    // die(mysqli_error($con));
    echo '<script>alert("Insert data transaksi gagal"); window.location="add_transaksi.php"</script>';
}


?>