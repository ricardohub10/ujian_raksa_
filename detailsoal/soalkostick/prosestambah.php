<?php
include "../../koneksi.php";
// $tesinputdata = $_POST['kostick']; 
// var_dump($tesinputdata);
// die();
// $kostickcategory = $_POST['kostickcategory'];
// var_dump($kostickcategory);
// die();
// $pilihana = $_POST['pilihana'];
// var_dump($pilihana);
// die();

if (isset($_POST['submit'])) {
    $idgroup = $_POST['idgroup'];
    $pilihana = $_POST['pilihana'];
    $pilihanb = $_POST['pilihanb'];
    $kostickcategory_a = $_POST['kostickcategory_a'];
    $kostickcategory_b = $_POST['kostickcategory_b'];
    $jenissoal = $_POST['kostick'];
    // $pilihanbenar = implode($_POST["jawabanbenar"], ', ');


    $insert = mysqli_query($mysqli, "insert into soal set 
    idgroup='$idgroup',
    pilihana = '$pilihana',
    pilihanb = '$pilihanb',
    kostickcategory_a = '$kostickcategory_a',
    kostickcategory_b = '$kostickcategory_b',
    jenissoal = '$jenissoal'");

    if ($insert) {
        echo "<script>alert('proses tambah berhasil');'</script>";
        header('location:http://localhost/ujian_raksa_/index.php?detailsoal&f=4&idgroup='.$idgroup);
    } else {
        echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
    }
}else {
    header('location:http://localhost/pkl/index.php?detailsoal&idgroup='.$idgroup);
}
?>