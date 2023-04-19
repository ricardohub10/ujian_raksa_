<?php
include "../koneksi.php";

$idujian = $_GET['idujian'];
$delete = mysqli_query($mysqli, "delete from setujian where idujian='$idujian' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?ujian'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
