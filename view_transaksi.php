<?php
include 'connect.php';

$id_jenis = $_GET['id'];
$sql = "SELECT t_transaksi.*,t_jenis.* FROM t_transaksi INNER JOIN t_jenis ON t_transaksi.id_jenis = t_jenis.id_jenis where t_transaksi.id_jenis = $id_jenis and t_jenis.id_jenis = $id_jenis ";
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
                <?php if ($_SESSION['status_admin'] == "active") {
                    echo '<div class="card-static">
                    <div class="card-body">
                        <div class="col-lg-12">
                        
                            <a href="add_transaksi.php?id=' . $id_jenis . '" class="btn btn-primary">Tambah
                            Data</a> 
                        
                        </div>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <a href="view_jenis.php" class="btn btn-warning mb-3">Kembali</a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="justify-center">
                                    <table border="1" width="inherit">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode Transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Kategori Transaksi</th>
                                                <th>Keterangan</th>

                                                <th>Nominal</th>
                                                <th>Saldo</th>
                                                <th>Bukti Transaksi</th>

                                                <th>Aksi</th>

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
                                                        <?php echo $row['tanggal_transaksi']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['kategori_transaksi']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['keterangan']; ?>
                                                    </td>

                                                    <td>
                                                        Rp.
                                                        <?php echo $row['nominal']; ?>
                                                    </td>
                                                    <td>Rp.
                                                        <?php
                                                        if (!isset($saldo)) {
                                                            if ($row['kategori_transaksi'] == "debit") {

                                                                $saldo = $row['saldo_awal'] + $row['nominal'];
                                                            } else {
                                                                $saldo = $row['saldo_awal'] - $row['nominal'];
                                                            }
                                                        } else {
                                                            if ($row['kategori_transaksi'] == "debit") {

                                                                $saldo = $saldo_baru + $row['nominal'];
                                                            } else {
                                                                $saldo = $saldo_baru - $row['nominal'];
                                                            }

                                                        }
                                                        $saldo_baru = $saldo;
                                                        echo $saldo_baru;
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <img width="70%" height="160px"
                                                            src="assets/img/bukti_transaksi/<?php echo $row['bukti_transaksi']; ?>"
                                                            alt="">

                                                    </td>

                                                    <?php if ($_SESSION['status_admin'] == "active") {
                                                        echo '<td><a href="update_transaksi.php?updateid='.$row['id_transaksi'] . '"
                                                        class="btn btn-primary mb-3">Update</a><br>
                                                    <a href="delete.php?delete_transaksi='.$row['id_transaksi'].'"
                                                        class="btn btn-danger mb-3">Delete</a><br>
                                                        <a href="add_laporan.php?id='.$row['id_transaksi'].'"
                                                        class="btn btn-success">Laporkan</a></td>';

                                                    }else{
                                                        echo'<td><a href="add_laporan.php?id='.$row['id_transaksi'].'"
                                                        class="btn btn-success">Laporkan</a></td>';

                                                    } ?>

                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 text-center">
                                <a href="exportexcel.php?id=<?php echo $id_jenis; ?>" class="btn btn-success">Export
                                    Excel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>