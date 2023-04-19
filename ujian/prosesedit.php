<?php

include "../koneksi.php";

if (isset($_POST['submit'])) {
    echo $idujian = $_POST['idujian'];
    echo $idgroup = $_POST['idgroup'];
    echo $waktu = $_POST['waktu'];
    echo $token = $_POST['token'];
    echo $status = $_POST['status'];


    $update = mysqli_query($mysqli, "update setujian set 
    idgroup = '$idgroup',
    waktu = '$waktu',
    token = '$token',
    status = '$status'
    where idujian='$idujian'");

    if ($update) {
        header('location:http://localhost/ujian_raksa_/index.php?ujian');
    } else {
        echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
    }
}else{
    header('location:http://localhost/ujian_raksa_/index.php?ujian');
}
?>