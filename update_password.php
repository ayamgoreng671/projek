<?php
include 'connect.php';
$id_user = $_GET['id'];
$passold = md5($_POST['passold']);
$passnew = md5($_POST['passnew']);

$cek = "SELECT * FROM t_user where id_user = $id_user and password = '$passold'";
$resultcek = mysqli_query($con, $cek);
$datacek = mysqli_fetch_array($resultcek);
// print_r($datacek);

if (!$datacek) {
    echo"<script>
    alert('Password salah');
    document.location = 'profil.php';
</script>";
    die();
}

$sql = "UPDATE t_user SET
password = '$passnew'
WHERE id_user = $id_user";

$result = mysqli_query($con, $sql);

if ($result) {
    echo"<script>
    alert('Password berhasil di ubah');
    document.location = 'profil.php';
</script>";
} else {
    echo"<script>
    alert('Password gagal di ubah');
    document.location = 'profil.php';
</script>";
}
?>