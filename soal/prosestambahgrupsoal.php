<?php
include "../koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    $iduser = $_POST['iduser'];
    $namagroup = $_POST['namagroup'];
    $idmapel = $_POST['idmapel'];

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
    u.iduser = '$_SESSION[iduser]'
    ");
    $data = mysqli_fetch_array($select);

    $insert = mysqli_query($mysqli, "insert into groupsoal set 
    idgurumapel ='$data[idgurumapel]',
    namagroup ='$namagroup'");

    if ($insert) {
        echo "<script>alert('proses tambah group soal berhasil');'</script>";
        header('location:http://localhost/ujian_raksa_/index.php?soal');
    } else {
        echo "<script>alert('proses tambah group soal gagal');window.history.go(-1);</script>";
    }
} else {
    header('location:http://localhost/ujian_raksa_/index.php?soal');
}

