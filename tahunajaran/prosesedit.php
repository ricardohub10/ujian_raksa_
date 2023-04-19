<?php

include "../koneksi.php";

$idtahun = $_POST['idtahun'];
$tahun = $_POST['tahun'];
$status = $_POST['status'];


$insert = mysqli_query($mysqli, "update tahunajaran set tahun='$tahun', status='$status' where idtahun='$idtahun'");
if ($insert) {
    header('location:http://localhost/ujian_raksa_/index.php?tahunajaran');
} else {
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}
?>