<?php

session_start();

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['status']);
unset($_SESSION['status_admin']);
unset($_SESSION['tanggal_pembuatan']);


session_destroy();

echo "<script>
alert('Logout Successfully');
document.location = 'home.php';
</script>";

?>