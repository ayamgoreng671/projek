<?php

include 'connect.php';
session_start();

$id_user =  $_SESSION['id_user'];
$judul_pengumuman = $_POST['judul_pengumuman'];
$pengumuman = $_POST['pengumuman'];
$tanggal_pengumuman = date("Y-m-d H:i:s");


$filename = $_FILES['gambar_pengumuman']['name'];
$tmp_name = $_FILES['gambar_pengumuman']['tmp_name'];

$type1 = explode('.', $filename);
$type2 = $type1[1];
$type3 = strtolower($type2);
$image_name = 'pengumuman' . time() . '.' . $type3;

$tipe_izin = array('jpg', 'jpeg', 'png');

if (!in_array($type2, $tipe_izin)) {

    echo 'Format File Tidak Diizinkan';
} else {
    move_uploaded_file($tmp_name, './assets/img/pengumuman/' . $image_name);
}

$insert = mysqli_query($con, "INSERT INTO t_pengumuman VALUES (
                                            NULL,
                                            '$id_user','$judul_pengumuman','$pengumuman','$image_name','$tanggal_pengumuman')");
if ($insert) {
    echo '<script>alert("Insert data transaksi berhasil"); window.location="view_pengumuman.php"</script>';
} else {
    die(mysqli_error($con));
    echo '<script>alert("Insert data transaksi gagal"); window.location="add_pengumuman.php"</script>';
}


?>