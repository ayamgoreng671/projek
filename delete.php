<?php
include 'connect.php';

if(isset($_GET['delete_transaksi'])){
    $id = $_GET['delete_transaksi'];
    $sql = "DELETE FROM t_transaksi where id_transaksi = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<script>
        alert('Data berhasil dihapus');
        document.location = 'view.php';
    </script>";
    }else{
        // die(mysqli_error($con));
        echo"<script>
        alert('Data gagal dihapus');
        document.location = 'view.php';
    </script>";
    }
}


if(isset($_GET['delete_pengumuman'])){
    $id = $_GET['delete_pengumuman'];
    $sql = "DELETE FROM t_pengumuman where id_pengumuman = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<script>
        alert('Data berhasil dihapus');
        document.location = 'view_pengumuman.php';
    </script>";
    }else{
        // die(mysqli_error($con));
        echo"<script>
        alert('Data gagal dihapus');
        document.location = 'view_pengumuman.php';
    </script>";
    }
}

if(isset($_GET['delete_jenis'])){
    $id = $_GET['delete_jenis'];
    $del_transaksi = "DELETE from t_transaksi where id_jenis = $id";
    $result_del = mysqli_query($con,$del_transaksi);
    $sql = "DELETE FROM t_jenis where id_jenis = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<script>
        alert('Data berhasil dihapus');
        document.location = 'view_jenis.php';
    </script>";
    }else{
        // die(mysqli_error($con));
        echo"<script>
        alert('Data gagal dihapus');
        document.location = 'view_jenis.php';
    </script>";
    }
}

if(isset($_GET['delete_laporan'])){
    $id = $_GET['delete_laporan'];
    $sql = "DELETE FROM t_report where id_report = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<script>
        alert('Data berhasil dihapus');
        document.location = 'view_laporan.php';
    </script>";
    }else{
        die(mysqli_error($con));
        echo"<script>
        alert('Data gagal dihapus');
        document.location = 'view_laporan.php';
    </script>";
    }
}


?>
