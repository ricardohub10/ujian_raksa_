<?php
include "../../koneksi.php";

if (isset($_POST['submit'])) {
    $idsoal = $_POST['idsoal'];
    $idgroup = $_POST['idgroup'];
    $jenissoal = "shortanswer";
    $soal = $_POST['soal'];
    $pilihanbenar = $_POST['jawabanbenar'];
    $pembahasan = $_POST['pembahasan'];

    $insert = mysqli_query($mysqli, "update soal set 
    idgroup='$idgroup',
    soal = '$soal',
    jenissoal = '$jenissoal',
    pilihanbenar='$pilihanbenar',
    pembahasan = '$pembahasan'
    where idsoal = '$idsoal' ");

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