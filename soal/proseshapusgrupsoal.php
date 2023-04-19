<?php
include "../koneksi.php";

$idgroup = $_GET['idgroup'];
$deletegroup = mysqli_query($mysqli, "delete from groupsoal where idgroup='$idgroup' ");
$deletesoal = mysqli_query($mysqli,"delete from soal where idgroup='$idgroup'");

if($deletegroup and $deletesoal){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/ujian_raksa_/index.php?soal'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
