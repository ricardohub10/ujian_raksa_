<?php
include "../koneksi.php";

$idmapel = $_GET['idmapel'];

$delete = mysqli_query($mysqli, "delete from mapel where idmapel='$idmapel' ");
if($delete){
    echo "<script>alert('proses delete berhasil')</script>";
    header('location:http://localhost/ujian_raksa_/index.php?mapel');
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>