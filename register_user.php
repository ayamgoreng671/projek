
    <?php
include 'connect.php';
$id = "NULL";
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$status = "active";
$status_admin = "inactive";
$tanggal = date('Y-m-d H:i:s');


$sql = "INSERT INTO `t_user`(`id_user`, `username`, `email`, `password`, `status`, `status_admin`, `tanggal_pembuatan`) VALUES ($id,'$username','$email','$password','$status','$status_admin','$tanggal')";
$result = mysqli_query($con,$sql);
if($result){
    echo "<script>
            alert('Register successfully');
            document.location = 'login.php';
        </script>";
}else{
    echo "<script>
    alert('Register Failed');
    document.location = 'register.php';
</script>";
}
?>
