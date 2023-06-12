<?php
include 'connect.php';

$sql = "SELECT * FROM t_pengumuman where 1";
$result = mysqli_query($con, $sql);

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
            <?php if ($_SESSION['status_admin'] == "active") {
                echo '<div class="card-static">
                    <div class="card-body">
                        <div class="col-lg-12">
                        
                            <a href="add_pengumuman.php" class="btn btn-primary">Tambah
                            Data</a> 
                        
                        </div>
                    </div>
                </div>';
            }?>
                
            </div>
        </div>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-lg-3">
                    <a href="view_pengumuman_content.php?id=<?php echo $row['id_pengumuman']; ?>" class="a-card">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-12 text-center justify-center">
                                        <img width="70%" height="160px"
                                            src="assets/img/pengumuman/<?php echo $row['gambar_pengumuman']; ?>" alt="">
                                    </div>


                                    <div class="col-lg-12 text-center">
                                        <h4><b>
                                                <?php echo $row['judul_pengumuman']; ?>
                                            </b></h4>
                                    </div>





                                </div>


                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>


</html>


