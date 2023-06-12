<?php
include "connect.php";

header("Content-type: application/vnd-ms-excel");
header("Content-disposition: attachment; filename=Export Excel Data Transaksi.xls");
header("pragma: no-cache");
header("expires:0");

$id_jenis = $_GET['id'];
$sql = "SELECT t_transaksi.*,t_jenis.* FROM t_transaksi INNER JOIN t_jenis ON t_transaksi.id_jenis = t_jenis.id_jenis where t_transaksi.id_jenis = $id_jenis and t_jenis.id_jenis = $id_jenis ";
$result = mysqli_query($con, $sql);
$no = 1;

?>

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




                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>