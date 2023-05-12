<?php
include "../koneksi.php";

$idnilai = $_GET['idnilai']; //9
$idujian = $_GET['idujian']; //2
$iduser = $_GET['iduser']; //24
$deletenilai = mysqli_query($mysqli, "delete from nilai where idnilai='$idnilai'");
$deletejawaban = mysqli_query($mysqli, "delete from jawaban where idujian='$idujian' and iduser='$iduser' ");

if($deletenilai AND $deletejawaban){
   echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?rekapnilaiujian'</script>";
}else{
  echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
