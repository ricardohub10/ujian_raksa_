<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $idgurumapel = $_POST['idgurumapel'];
    $iduser = $_POST['iduser'];
    $idmapel = $_POST['idmapel'];

    $cek = mysqli_query($mysqli, "select * from gurumapel where iduser='$iduser' and idmapel='$idmapel' and idtahun='$idtahun'");
    if(mysqli_num_rows($cek)>0){
        echo "<script>alert('Data edit tidak boleh sama dengan data sebelumnya');window.history.go(-1);</script>";
    }else{
        $insert = mysqli_query($mysqli, "update gurumapel set iduser='$iduser', idmapel='$idmapel' where idgurumapel='$idgurumapel'");
        if ($insert) {
            header('location:http://localhost/ujian_raksa_/index.php?gurumapel');
        } else {
            echo "<script>alert('proses tambah mapel gagal');window.history.go(-1);</script>";
        }
    }
} else {
    header('location:http://localhost/ujian_raksa_/index.php?gurumapel');
}

