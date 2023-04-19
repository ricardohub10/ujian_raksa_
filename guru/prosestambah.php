<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $namaguru = $_POST['namaguru'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $alamat = $_POST['alamat'];

    $insert = mysqli_query($mysqli, "insert into guru set 
    nip='$nip', 
    namaguru='$namaguru',
    jk='$jk',
    tempatlahir='$tempatlahir',
    tgllahir='$tgllahir',
    alamat='$alamat'");
    if ($insert) {
        echo "<script>alert('proses tambah stock berhasil');'</script>";
        header('location:http://localhost/ujian_raksa_/index.php?guru');
    } else {
        echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
    }
} else {
    header('location:http://localhost/ujian_raksa_/index.php?guru');
}

