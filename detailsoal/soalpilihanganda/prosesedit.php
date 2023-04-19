<?php

include "../../koneksi.php";

if (isset($_POST['submit'])) {
    echo $idgroup = $_POST['idgroup'];
    echo "<br>".$idsoal = $_POST['idsoal'];
    echo "<br>".$soal = $_POST['soal'];
    echo "<br>".$pilihana = $_POST['pilihana'];
    echo "<br>".$pilihanb = $_POST['pilihanb'];
    echo "<br>".$pilihanc = $_POST['pilihanc'];
    echo "<br>".$pilihand = $_POST['pilihand'];
    echo "<br>".$pilihane = $_POST['pilihane'];
    echo "<br>".$pilihanf = $_POST['pilihanf'];

    echo "<br>".$pilihanbenar = $_POST['pilihanbenar'];
    echo "<br>".$pembahasan = $_POST['pembahasan'];


    $update = mysqli_query($mysqli, "update soal set 
    idgroup  = '$idgroup',
    soal     = '$soal',
    pilihana = '$pilihana',
    pilihanb = '$pilihanb',
    pilihanc = '$pilihanc',
    pilihand = '$pilihand',
    pilihane = '$pilihane',
    pilihanf = '$pilihanf',

    pilihanbenar = '$pilihanbenar',
    pembahasan = '$pembahasan'
    where idsoal ='$idsoal'");
    if ($update) {
        echo "<script>alert('proses edit berhasil');</script>";
        header('location:http://localhost/ujian_raksa_/index.php?detailsoal&idgroup='.$idgroup);
    } else {
        echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
    }
}else{
    header('location:http://localhost/ujian_raksa_/index.php?detailsoal&idgroup='.$idgroup);
}
?>

