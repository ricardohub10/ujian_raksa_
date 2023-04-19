<?php
include "../../koneksi.php";

if (isset($_POST['submit'])) {
    $idgroup = $_POST['idgroup'];
    $jenissoal = $_POST['jenissoal'];
    $soal = $_POST['soal'];
    $pilihanbenar = $_POST['jawabanbenar'];
    $pembahasan = $_POST['pembahasan'];

    $insert = mysqli_query($mysqli, "insert into soal set 
    idgroup='$idgroup',
    soal = '$soal',
    jenissoal = '$jenissoal',
    pilihanbenar='$pilihanbenar',
    pembahasan = '$pembahasan'");

    if ($insert) {
        echo "<script>alert('proses tambah berhasil');'</script>";
        header('location:http://localhost/pkl/index.php?detailsoal&f=3&idgroup='.$idgroup);
    } else {
        echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
    }
}else {
    header('location:http://localhost/pkl/index.php?detailsoal&idgroup='.$idgroup);
}
?>