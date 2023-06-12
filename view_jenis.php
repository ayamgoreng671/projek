<?php
include 'connect.php';

$sql = "SELECT * FROM t_jenis where 1";
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
                        
                            <a href="add_jenis.php" class="btn btn-primary">Tambah
                            Data</a> 
                        
                        </div>
                    </div>
                </div>';
            }?>
            
            </div>
        </div>
        <div class="row-mb">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($result)):
                    ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="view_transaksi.php?id=<?php echo $row['id_jenis']; ?>" class="a-card">


                                    <div class="row">
                                        <div class="col-lg-12 text-center justify-center">
                                            <img width="70%" height="160px"
                                                src="assets/img/jenis/<?php echo $row['gambar_jenis']; ?>" alt="">
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h4><b>
                                                            <?php echo $row['jenis_transaksi']; ?>
                                                        </b></h4>
                                                </div>


                                            </div>


                                        </div>


                                    </div><br><br>
                                    <div class="row">
                                        <div class="col-lg-12 text-center">

                                            <?php if ($_SESSION['status_admin'] == "active") {
                                                echo '           <a href="update_jenis.php?updateid=' . $row['id_jenis'] . '"
                                            class="btn btn-primary">Update</a>
                                        <a href="delete.php?delete_jenis=' . $row['id_jenis'] . '"
                                            class="btn btn-danger">Delete</a>';
                                            } ?>
                                        </div>
                                    </div>

                                </a>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
</body>


</html>