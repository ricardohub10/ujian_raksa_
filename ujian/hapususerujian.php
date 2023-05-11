<?php
include "../koneksi.php";

$iduserujian = $_GET['id'];
$delete = mysqli_query($mysqli, "delete from user_ujian where id='$iduserujian' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?pilihuserujian'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
