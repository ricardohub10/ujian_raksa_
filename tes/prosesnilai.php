<?php
session_start();
include "../koneksi.php";


$iduser = $_SESSION['iduser']; 
$idgroup = $_SESSION['id'];
$idujian = $_SESSION['idujian'];

// Kodingan ini ditambah oleh Ricardo Pada 13 Juni 2022
// $statusujian = $_POST['statusujian'];


$tampil = mysqli_query($mysqli,
"select j.*, s.*
from jawaban as j
join soal as s
on j.idsoal = s.idsoal
where 
j.iduser = '$iduser' and
j.idujian = '$idujian' and 
j.jawaban = s.pilihanbenar ");
$jumlah_benar = mysqli_num_rows($tampil);

$s = mysqli_query($mysqli, 
"select j.*, s.soal
from jawaban as j
inner join soal as s
on j.idsoal = s.idsoal
where j.idujian = '$idujian' and j.iduser = '$iduser'");
$soal = mysqli_num_rows($s);

$nilai = $jumlah_benar*100/$soal;

$insert = mysqli_query($mysqli,"insert into nilai set 
iduser = '$iduser', 
idujian = '$idujian', 
nilai = '$nilai',
tgl = now() ");

// $insert2  = mysqli_query($mysqli,"insert into statusujian('idujian','iduser','statusujian') VALUES ('$idujian','$iduser','$statusujian')");


unset($_SESSION['ujian']);
unset($_SESSION['mulai']);

header("location:../index.php?nilai");

?>)