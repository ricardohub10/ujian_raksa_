`<?php include "koneksi.php";

$tampil = mysqli_query($mysqli,"SELECT nilai.*, soal.jenissoal FROM nilai JOIN setujian ON nilai.idujian = setujian.idujian JOIN soal ON setujian.idgroup = soal.idgroup WHERE nilai.iduser = '$_SESSION[iduser]' AND nilai.idujian = '$_SESSION[idujian]' ");
$nilai = mysqli_fetch_array($tampil);
?>
<?php include "koneksi.php"; ?>
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Data Ujian
        </h1>
    </div>
</div>
<div class="block full">
    <div class="block-title">
        <div>
        </div>
    </div>
    <div class="alert alert-success alert-dismissable">
        <center>
            <font size="6">Hasil Ujian Online Anda</font>
            <h1 style="font-size:<?php echo ($nilai['jenissoal'] == 'singlechoice') ? '175px' : '75px'; ?>;"><b><?php 
                if ($nilai['jenissoal'] == 'singlechoice') {
                    echo $nilai['nilai'];
                } else if ($nilai['jenissoal'] == 'kostickanswer') {
                    echo "Anda Telah Menyelesaikan Ujian";
                }
            ?></b></h1>
        </center>
    </div>
</div>

    