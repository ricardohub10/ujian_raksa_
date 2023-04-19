<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $iduser = $_POST['iduser'];
    $idmapel = $_POST['idmapel'];
    $idtahun = $_POST['idtahun'];

    $cek = mysqli_query($mysqli, "select * from gurumapel where iduser='$iduser' and idmapel='$idmapel' and idtahun='$idtahun'");
    if(mysqli_num_rows($cek)>0){
        echo "<script>alert('proses tambah mapel gagal, karena sudah ada guru dengan mapel yang sama');window.history.go(-1);</script>";
    }else{
        $insert = mysqli_query($mysqli, "insert into gurumapel set iduser='$iduser', idmapel='$idmapel', idtahun='$idtahun' ");
        if ($insert) {
            header('location:http://localhost/ujian_raksa_/index.php?gurumapel');
        } else {
            echo "<script>alert('proses tambah mapel gagal');window.history.go(-1);</script>";
        }
    }
} else {
    header('location:http://localhost/ujian_raksa_/index.php?gurumapel');
}

