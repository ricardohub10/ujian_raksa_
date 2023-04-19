<?php
include "../../koneksi.php";

if (isset($_POST['submit'])) {
    $idgroup = $_POST['idgroup'];
    $soal = $_POST['soal'];
    $pilihana = $_POST['pilihana'];
    $pilihanb = $_POST['pilihanb'];
    $pilihanc = $_POST['pilihanc'];
    $pilihand = $_POST['pilihand'];
    $pilihane = $_POST['pilihane'];
    // baru ditambah untuk ujian rekrutmen
    // $pilihanf = $_POST['pilihanf'];

    $pilihanbenar = $_POST['jawabanbenar'];
    $pembahasan = $_POST['pembahasan'];

    $insert = mysqli_query($mysqli, "insert into soal set 
    idgroup='$idgroup',
    soal = '$soal',
    pilihana='$pilihana',
    pilihanb='$pilihanb',
    pilihanc='$pilihanc',
    pilihand='$pilihand',
    pilihane='$pilihane',


    pilihanbenar='$pilihanbenar',
    pembahasan = '$pembahasan'");

    if ($insert) {
        echo "<script>alert('proses tambah berhasil');'</script>";
        header('location:http://localhost/ujian_raksa_/index.php?detailsoal&idgroup='.$idgroup);
    } else {
        echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
    }
}else {
    header('location:http://localhost/ujian_raksa_/index.php?detailsoal&idgroup='.$idgroup);
}
?>