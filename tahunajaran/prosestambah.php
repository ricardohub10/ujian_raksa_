<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $tahunajaran = $_POST['tahunajaran'];
    $status = $_POST['status'];

    $cek = mysqli_query($mysqli,"select * from tahunajaran where status='Y' ");
    if(mysqli_num_rows($cek) > 0 && $status=='Y'){
        echo "<script>alert('Tahun ajaran hanya salah satu yang boleh aktif, nonaktifkan salah satu tahun untuk menambahkan tahun ajaran yang aktif');window.history.go(-1);</script>";
    }else{
        $insert = mysqli_query($mysqli, "insert into tahunajaran set tahun='$tahunajaran', status='$status'");
        if ($insert) {
            header('location:http://localhost/ujian_raksa_/index.php?tahunajaran');
        } else {
            echo "<script>alert('proses tambah mapel gagal');window.history.go(-1);</script>";
        }
    }
} else {
    header('location:http://localhost/ujian_raksa_/index.php?tahunajaran');
}

