<?php

include "../koneksi.php";

$idtahun = $_POST['idtahun'];
$tahun = $_POST['tahun'];
$status = $_POST['status'];

$cekAktif = mysqli_query($mysqli, "SELECT COUNT(*) as total FROM tahunajaran WHERE status='Y' AND idtahun <> '$idtahun'");
$dataCek = mysqli_fetch_assoc($cekAktif);
if ($dataCek['total'] > 0 && $status=='Y') {
    echo "<script>alert('Tahun ajaran hanya salah satu yang boleh aktif, nonaktifkan salah satu tahun untuk menambahkan tahun ajaran yang aktif');window.history.go(-1);</script>";
} else {
    $insert = mysqli_query($mysqli, "UPDATE tahunajaran SET tahun='$tahun', status='$status' WHERE idtahun='$idtahun'");
    if ($insert) {
        header('location:http://localhost/ujian_raksa_/index.php?tahunajaran');
    } else {
        echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
    }
}