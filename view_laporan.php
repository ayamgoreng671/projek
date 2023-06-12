<?php
include 'connect.php';


$sql = "SELECT * FROM t_report  where 1 ";
$result = mysqli_query($con, $sql);
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

                <div class="card-static">
                    <div class="card-body">
                        <div class="col-lg-12">

                            <a href="prosedur_laporan.php" class="btn btn-success">Prosedur
                                Laporan</a>

                        </div>
                    </div>
                </div>';


            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                // if ($_SESSION['status_admin'] == "active") {
                //     echo '<div class="card-static">
                //         <div class="card-body">
                //             <div class="col-lg-12">
                
                //                 <a href="add_transaksi.php?id='.$id_jenis.'" class="btn btn-primary">Tambah
                //                 Data</a> 
                
                //             </div>
                //         </div>
                //     </div>';
                // }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="justify-center">
                                    <table border="1" width="inherit">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode Transaksi</th>
                                                <th>Tanggal Laporan</th>
                                                <th>Judul Laporan</th>
                                                <th>Keterangan Laporan</th>
                                                <th>Bukti Laporan</th>

                                                <th>Status</th>
                                                <?php if ($_SESSION['status_admin'] == "active") {
                                                    echo '<th>Aksi</th>';
                                                } ?>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php while ($row = mysqli_fetch_array($result)): ?>
                                                <tr>

                                                    <td>
                                                        <?php echo $no++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['kode_transaksi']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tanggal_laporan']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['judul_laporan']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['keterangan_laporan']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['bukti_laporan']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row['status']; ?>
                                                    </td>




                                                    <?php if ($_SESSION['status_admin'] == "active") {
                                                        echo '<td>
                                                    <a href="delete.php?delete_laporan=' . $row['id_report'] . '"
                                                        class="btn btn-danger">Delete</a></td';

                                                    } ?>

                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12 mt-3 text-center">
                                <a href="exportexcel.php?id=
                                <?php
                                // echo $id_jenis;
                                ?>" class="btn btn-success">Export Excel</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>