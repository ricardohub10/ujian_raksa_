<?php
include "../../koneksi.php";

if (isset($_POST['submit'])) {
    $idgroup = $_POST['idgroup'];
    $idsoal = $_POST['idsoal'];
    $pilihana = $_POST['pilihana'];
    $pilihanb = $_POST['pilihanb'];
    $pilihanc = $_POST['pilihanc'];
    $pilihand = $_POST['pilihand'];
    $pilihane = $_POST['pilihane'];
    $pilihanbenar = implode(', ', $_POST['jawabanbenar']);
    $pembahasan = $_POST['pembahasan'];

    $insert = mysqli_query($mysqli, "update soal set 
    idgroup='$idgroup',
    pilihana = '$pilihana',
    pilihanb = '$pilihanb',
    pilihanc = '$pilihanc',
    pilihand = '$pilihand',
    pilihane = '$pilihane',
    jenissoal = 'multipleanswer',
    pilihanbenar='$pilihanbenar',
    pembahasan = '$pembahasan'
    where idsoal='$idsoal' ");

    if ($insert) {
        echo "<script>alert('proses tambah berhasil');'</script>";
        header('location:http://localhost/pkl/index.php?detailsoal&idgroup='.$idgroup);
    } else {
        echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
    }
}else {
    header('location:http://localhost/pkl/index.php?detailsoal&idgroup='.$idgroup);
}
?>