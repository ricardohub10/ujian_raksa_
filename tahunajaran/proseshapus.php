<?php
include "../koneksi.php";

$idtahun = $_GET['idtahun'];

$delete = mysqli_query($mysqli, "delete from tahunajaran where idtahun='$idtahun' ");
if($delete){
    echo "<script>alert('proses delete berhasil')</script>";
    header('location:http://localhost/ujian_raksa_/index.php?tahunajaran');
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>