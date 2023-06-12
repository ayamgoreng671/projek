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
    <?php
    include 'connect.php';

    $id_user = $_SESSION['id_user'];
    $sql = "SELECT * FROM t_user where  id_user = $id_user ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <div class="row justify-center">
            <div class="col-lg-6">
                <div class="card-static">
                    <div class="card-body p-0">
                        <div class="row-justify-center">
                            <div class="col-lg-8">
                                <div class="container">
                                    <form action="update_profil_proses.php?id=<?php echo $id_user; ?>" method="post"
                                        enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Masukkan Jenis Transaksi"
                                                value="<?php echo $row['username']; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control form-control-user"
                                                placeholder="Masukkan Keterangan Jenis"
                                                value="<?php echo $row['email']; ?>" autocomplete="off">
                                        </div>

                                        <div class="form-group-btn">
                                            <a href="profil.php" class="btn btn-warning">Kembali</a>
                                            <button type="submit" name="submit" class="btn btn-primary">Ubah</button>

                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>