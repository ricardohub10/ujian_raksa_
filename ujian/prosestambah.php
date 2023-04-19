<?php
include "../koneksi.php";
session_start();

if (isset($_POST['submit'])){
    echo $idgroup = $_POST['idgroup'];
    echo "<br>".$periodeujian = $_POST['periodeujian'];
    echo "<br>".$waktu = $_POST['waktu'];
    echo "<br>".$token = $_POST['token'];
    echo "<br>".$status = $_POST['status'];
    echo $rangesoal = $_POST['rangesoal'];
    echo $iduser = $_SESSION['iduser'];


        $insert = mysqli_query($mysqli, "insert into setujian set
        idgroup = '$idgroup',
        user = '$iduser',
        periodeujian = '$periodeujian',
        waktu = '$waktu',
        token = '$token',
        status = '$status',
        rangesoal = '$rangesoal'");

        if ($insert) {
            echo "<script>alert('proses tambah ujian berhasil');'</script>";
            header('location:../index.php?ujian');
        } else {
            echo "<script>alert('proses tambah ujian gagal');window.history.go(-1);</script>";
        }
} 
else {
    header('location:../index.php?ujian');
}

