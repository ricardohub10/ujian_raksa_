<?php
session_start();
include "header.php";
?>
<!-- Main content -->

    <?php
    
    if($_SESSION && isset($_GET["home"])){
        include "home.php";
    }else if($_SESSION && isset($_GET["user"])){
        if($_SESSION['status'] == 'admin'){
            include "user/user.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tahunajaran"])){
        if($_SESSION['status'] == 'admin'){
            include "tahunajaran/tahunajaran.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["gurumapel"])){
        if($_SESSION['status'] == 'admin'){
            include "gurumapel/gurumapel.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["guru"])){
        if($_SESSION['status'] == 'admin'){
            include "guru/guru.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["mapel"])){
        if($_SESSION['status'] == 'admin'){
            include "mapel/mapel.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["soal"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "soal/soal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        } 

    // Ini Baru Ditambah 11 Januari 2023
    }else if($_SESSION && isset($_GET["pilihuserujian"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "ujian/pilihuserujian.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        } 
    }
    // Sampai sini

    // Session Kostick Chart

    else if ($_SESSION && isset($_GET["kostickchart"])){
        if($_SESSION['status'] == 'admin' or $_SESSION['status'] == 'guru'){
            include "kostickchart.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }
    
    else if($_SESSION && isset($_GET["detailsoal"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/detailsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tambahsoalpilihanganda"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalpilihanganda/tambahsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["editsoalpilihanganda"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalpilihanganda/editsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tambahsoaltruefalse"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalbenarsalah/tambahsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["editsoaltruefalse"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalbenarsalah/editsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tambahsoalisiansingkat"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalisiansingkat/tambahsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["editsoalisiansingkat"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalisiansingkat/editsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tambahsoalmultipleanswer"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalmultipleanswer/tambahsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["editsoalmultipleanswer"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalmultipleanswer/editsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tambahsoalsorting"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalsorting/tambahsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }   
     }else if($_SESSION && isset($_GET["tambahsoalkostick"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalkostick/tambahsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    
    }else if($_SESSION && isset($_GET["editsoalsorting"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "detailsoal/soalsorting/editsoal.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["ujian"])){
        if($_SESSION['status'] == 'guru' or $_SESSION['status'] == 'admin'){
            include "ujian/ujian.php";
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["tes"])){
        if($_SESSION['status'] == 'siswa'){
            include 'tes/daftartes.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["daftarujian"])){
        if($_SESSION['status'] == 'siswa'){
            include 'ujian/daftarujian.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["nilai"])){
        if($_SESSION['status'] == 'siswa'){
            include 'tes/nilai.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["hasilujian"])){
        if($_SESSION['status'] == 'siswa'){
            include 'hasilujian/hasilujian.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["lihatjawaban"])){
        if($_SESSION['status'] == 'siswa' or $_SESSION['status'] == 'admin' or $_SESSION['status'] == 'guru'){
            include 'hasilujian/lihatjawaban.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["rekapnilaiujian"])){
        if($_SESSION['status'] == 'admin' or $_SESSION['status'] == 'guru'){
            include 'hasilujian/rekapnilaiujian.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    }else if($_SESSION && isset($_GET["nilaiujian"])){
        if($_SESSION['status'] == 'admin' or $_SESSION['status'] == 'guru'){
            include 'hasilujian/nilaiujian.php';
        }else{
            echo "<script>window.history.go(-1);</script>";
        }
    //hak akses untuk siswa
    //menu ujian/tes, hanya bisa diambil oleh siswa
    //menu hasil ujian siswa, hanya bisa diambil oleh siswa


    }else if($_SESSION && isset($_GET["login"])){
        include "home.php"; 
    }else if(isset($_GET["login"])){
        include "login.php";
    }else if($_SESSION){
        include "home.php";                                                                                                                                 
    }
    else{
        include "login.php";
    }
    ?>

<?php
include "footer.php";

?>

