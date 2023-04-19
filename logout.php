<?php
    include ('koneksi.php');
    session_start();
    $idujian = $_SESSION['idujian'];
    $idgroup = $_SESSION['id'];
    $iduser = $_SESSION['iduser'];

    $tampil = mysqli_query($mysqli,
        "select j.*, s.*
        from jawaban as j
        join soal as s
        on j.idsoal = s.idsoal
        where j.iduser = '$iduser' and
        j.idgroup = '$idgroup' and j.idujian = '$idujian' and j.jawaban = s.pilihanbenar ");

    if($_SESSION['ujian']){
        $jumlah_benar = mysqli_num_rows($tampil);

        $s = mysqli_query($mysqli, "select * from soal where idgroup = $idgroup");
        $soal = mysqli_num_rows($s);

        $nilai = $jumlah_benar*100/$soal;


        $insert = mysqli_query($mysqli,"insert into nilai set 
        iduser = '$iduser', 
        idujian = '$idujian', 
        nilai = '$nilai' ");

        session_destroy();
        header("location:index.php");
    }else{
        session_destroy();
        header("location:index.php");
    }
?>