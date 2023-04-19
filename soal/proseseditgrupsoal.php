<?php
include "../koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    if($_SESSION['status']=='admin'){
        $idgroup = $_POST['idgroup'];
        $statusgrup = $_POST['status'];
        $insert = mysqli_query($mysqli, "update groupsoal set 
        statusgrup = '$statusgrup'
        where idgroup='$idgroup'");
        if ($insert) {
            echo "<script>alert('proses edit berhasil');</script>";
            header('location:http://localhost/ujian_raksa_/index.php?soal');
        } else {
            echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
        }
    }elseif ($_SESSION['status']=='guru') {
        $idgroup = $_POST['idgroup'];
        $namagroup = $_POST['namagroup'];
        $idmapel = $_POST['idmapel'];
        $iduser = $_SESSION['iduser'];

        $select = mysqli_query($mysqli,
        "select gm.idgurumapel
        from gurumapel as gm
        inner join user as u
        on gm.iduser = u.iduser 
        inner join mapel as m
        on gm.idmapel = m.idmapel
        inner join tahunajaran as t
        on gm.idtahun = t.idtahun
        where m.idmapel = '$idmapel' and
        t.status = 'Y' and
        u.iduser = '$iduser'");
        $data = mysqli_fetch_array($select);

        $insert = mysqli_query($mysqli, "update groupsoal set 
        namagroup = '$namagroup',
        idgurumapel = '$data[idgurumapel]'
        where idgroup = '$idgroup'");

        if ($insert) {
            echo "<script>alert('proses edit berhasil');</script>";
            header('location:http://localhost/ujian_raksa_/index.php?soal');
        } else {
            echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
        }   
    }
}else{
    header('location:http://localhost/ujian_raksa_/index.php?soal');
}
?>

