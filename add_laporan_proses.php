<?php

include 'connect.php';
session_start();

$id_user =  $_SESSION['id_user'];
$id_transaksi = $_POST['id_transaksi'];

$sql_kode = "SELECT * FROM t_transaksi where id_transaksi = '$id_transaksi' ";
$query_kode = mysqli_query($con,$sql_kode);
$result_kode = mysqli_fetch_assoc($query_kode);
$kode_transaksi = $result_kode['kode_transaksi'];

$tanggal_laporan = date("Y-m-d");
$judul_laporan = $_POST['judul_laporan'];
$keterangan_laporan = $_POST['keterangan_laporan'];
$bukti_laporan = $_POST['bukti_laporan'];
$status = "active";


$insert = mysqli_query($con, "INSERT INTO t_report VALUES (
                                            NULL,
                                            '$id_user','$id_transaksi','$kode_transaksi','$tanggal_laporan','$judul_laporan','$keterangan_laporan','$bukti_laporan','$status')");
if ($insert) {
    echo '<script>alert("Insert data laporan berhasil"); window.location="view_laporan.php"</script>';
} else {
    die(mysqli_error($con));
    echo '<script>alert("Insert data transaksi gagal"); window.location="add_pengumuman.php"</script>';
}


?>