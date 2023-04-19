<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $kdmapel = $_POST['kodemapel'];
    $mapel = $_POST['mapel'];

    $insert = mysqli_query($mysqli, "insert into mapel set kdmapel='$kdmapel', mapel='$mapel'");
    if ($insert) {
        header('location:http://localhost/ujian_raksa_/index.php?mapel');
    } else {
        echo "<script>alert('proses tambah mapel gagal');window.history.go(-1);</script>";
    }
} else {
    header('location:http://localhost/ujian_raksa_/index.php?mapel');
}

