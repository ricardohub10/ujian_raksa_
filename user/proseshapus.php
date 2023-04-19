<?php
include "../koneksi.php";

$iduser = $_GET['id'];
$delete = mysqli_query($mysqli, "delete from user where iduser='$iduser' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?user'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
