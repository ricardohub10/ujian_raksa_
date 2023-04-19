<?php

include "../koneksi.php";

$idmapel = $_POST['idmapel'];
$kdmapel = $_POST['kodemapel'];
$mapel = $_POST['mapel'];


$insert = mysqli_query($mysqli, "update mapel set kdmapel='$kdmapel', mapel='$mapel' where idmapel='$idmapel'");
if ($insert) {
    header('location:http://localhost/ujian_raksa_/index.php?mapel');
} else {
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}
?>