<?php
include "../koneksi.php";

$idguru = $_GET['id'];
$delete = mysqli_query($mysqli, "delete from guru where idguru='$idguru' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?guru'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
