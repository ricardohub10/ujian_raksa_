<?php

include "../koneksi.php";

if (isset($_POST['submit'])) {
    $iduser = $_POST['iduser'];
    $namauser = $_POST['namauser'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $status = $_POST['status'];
    $tipe_karyawan = $_POST['tipe_karyawan'];
    $username = $_POST['username'];
    // $password = base64_encode($_POST['password']);
    $password = ($_POST['password']);


    $insert = mysqli_query($mysqli, "update user set  
    namauser='$namauser',
    jk='$jk',
    tempatlahir='$tempatlahir',
    tgllahir='$tgllahir',
    status='$status',
    tipe_karyawan='$tipe_karyawan',
    username='$username',
    password='$password'

    where iduser='$iduser'");
    if ($insert) {
        echo "<script>alert('proses edit berhasil');</script>";
        header('location:http://localhost/ujian_raksa_/index.php?user');
    } else {
        echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
    }
}else{
    header('location:http://localhost/ujian_raksa_/index.php?user');
}
?>

