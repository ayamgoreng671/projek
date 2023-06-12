<?php
include 'connect.php';

$id_pengumuman = $_GET['id'];
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <a href="view_pengumuman.php" class="btn btn-warning">Kembali</a>
                                <?php if ($_SESSION['status_admin'] == "active") {
                                    echo '<a href="update_pengumuman.php?update_pengumuman='.$id_pengumuman.'" class="btn btn-primary">Update</a>
                                <a href="delete.php?delete_pengumuman='.$id_pengumuman.'" class="btn btn-danger">Delete</a>
';
                                } ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="justify-center ">
                                    <h3>
                                        <?php echo $row['judul_pengumuman'] ?>
                                    </h3>

                                </div><br>
                                <div class="col-lg-12">
                                    <div class="justify-center border-box">
                                        <img width="50%" height="50%"
                                            src="assets/img/pengumuman/<?php echo $row['gambar_pengumuman']; ?>" alt="">
                                    </div><br><br><br>
                                    <div class="col-lg-12">
                                        <div class="justify-center">
                                            <h3>
                                                <?php echo $row['pengumuman'] ?>
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>

</html>