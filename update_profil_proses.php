<?php
include 'connect.php';
$id_user = $_GET['id'];
$username =  $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE t_user set username = '$username', email = '$email' where id_user = $id_user";
$result = mysqli_query($con,$sql);

if ($result) {
    echo"<script>
    alert('Data berhasil di ubah');
    document.location = 'profil.php';
</script>";
} else {
    echo"<script>
    alert('Data gagal di ubah');
    document.location = 'profil.php';
</script>";
}
?>