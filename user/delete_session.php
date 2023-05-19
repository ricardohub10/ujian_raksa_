<?php
include "../koneksi.php";

$iduser = $_GET['id'];
$delete_session = mysqli_query($mysqli, "UPDATE user SET session_id=NULL WHERE iduser='$iduser' ");
if($delete_session){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?user'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
