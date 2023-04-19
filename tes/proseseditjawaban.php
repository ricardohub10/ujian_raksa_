<?php
include "../koneksi.php";
//$pilihan = $_POST['pilihan'];
echo $pilihan = implode(', ', $_POST['pilihan']);
//echo $pilihan = implode($_POST["pilihan"], ', ');
$idjawab = $_POST['idjawab'];
$halaman = $_POST['halaman'];
$page = $_POST['page'];
$no = $_POST['soal'];

mysqli_query($mysqli,"update jawaban set 

jawaban = '$pilihan' 
where idjawab = '$idjawab'
");

if($halaman == $page){
    header('location:../index.php?tes='.$page);
}else{
    header('location:../index.php?tes='.$no);
}

?>