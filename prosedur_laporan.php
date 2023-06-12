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

                            <a href="view_laporan.php" class="btn btn-warning">Kembali</a>

                        </div>
                    </div>
                </div>


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
                                    <h1>Prosedur Laporan</h1>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="p-3">
                                    <div class="justify-center mb-5">
                                        <p>Pastikan ketika melakukan pengiriman laporan, pengiriman dilakukan sesuai
                                            dengan prosedur</p>
                                    </div>
                                    <p class="mb-3">Mengapa melakukan pelaporan ?
                                    </p>
                                    <p>pelaporan dapat dilakukan oleh siapa saja yang menemukan kejanggalan atau
                                        kesalahan dalam pencatatan transaksi keuangan, hal ini bertujuan supaya dapat
                                        dilakukan pelacakan terhadap arus keuangan serta mencegah terjadinya kesalahan
                                        dan penyalahgunaan dana milik rakyat.</p>
                                    <p class="mt-3 mb-3">Berikut adalah prosedur yang harus diikuti ketika ingin
                                        mengirim
                                        laporan:
                                    </p>

                                    <p>1. Masuk ke data transaksi</p>

                                    <p>2. Pilih transaksi yang ingin dilaporkan, kemudian tekan tombol "Laporkan" </p>

                                    <p>3. Masukkan judul laporan yang berisi tentang tema utama laporan yang dikirimkan
                                    </p>

                                    <p>4. Masukkan keterangan laporan yang berisi deskripsi singkat mengenai laporan
                                        yang
                                        dikirimkan</p>

                                    <p>5. Masukkan bukti laporan yang berisi link google drive</p>

                                    <p>6. Pastikan link google drive yang dikirim sudah bersifat publik sehingga bisa dilihat oleh orang lain</p>

                                    <p>7. Link google drive yang dikirimkan berisi file dokumen dengan format pdf dan
                                        berisi penjelasan terperinci mengenai masalah terhadap transaksi yang dilaporkan
                                    </p>

                                    <p>8. Jika dibutuhkan, foto atau bukti dalam bentuk format lainnya dapat dicantumkan
                                        secara terpisah dalam link google drive yang sama
                                    </p>

                                    <p>9. Usahakan tidak ada kesalahan penulisan dalam laporan, terutama dalam pencatuman kode transaksi yang bersangkutan
                                    </p>

                                    <p>10. Pastikan laporan yang dikirim otentik dan akurat karena akan ditindaklanjuti oleh pihak yang berwenang
                                    </p>

                                    <p>11. Laporan yang dikirim kemudian akan ditampilkan secara publik sehingga dapat dilihat siapa saja
                                    </p>

                                    <p>12. Setiap laporan akan memiliki forum masing-masing, dimana user lain dapat menambahkan data terkait laporan yang bersangkutan
                                    </p>

                                    <p>13. Data yang diberikan user lain kemudian akan diperiksa bersamaan data yang dikumpulkan dari pihak admin
                                    </p>

                                    <p>14. Laporan yang terbukti didalamnya terdapat kesalahan atau penyalahgunaan uang rakyat akan ditindaklanjuti 
                                    </p>


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