<?php

include "../koneksi.php";

$idtahun = $_POST['idtahun'];
$tahun = $_POST['tahun'];
$status = $_POST['status'];

$cek = mysqli_query($mysqli,"select * from tahunajaran where status='Y' ");
if(mysqli_num_rows($cek) > 0 && $status=='Y'){
    echo "<script>alert('Tahun ajaran hanya salah satu yang boleh aktif, nonaktifkan salah satu tahun untuk menambahkan tahun ajaran yang aktif');window.history.go(-1);</script>";
}else{
$insert = mysqli_query($mysqli, "update tahunajaran set tahun='$tahun', status='$status' where idtahun='$idtahun'");
if ($insert) {
    header('location:http://localhost/ujian_raksa_/index.php?tahunajaran');
} else {
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}
}
?>