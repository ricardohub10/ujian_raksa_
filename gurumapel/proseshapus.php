<?php
include "../koneksi.php";

$idgurumapel = $_GET['idgurumapel'];

$delete = mysqli_query($mysqli, "delete from gurumapel where idgurumapel='$idgurumapel' ");
if($delete){
    echo "<script>alert('proses delete berhasil')</script>";
    header('location:http://localhost/ujian_raksa_/index.php?gurumapel');
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>