<?php
include "../koneksi.php";
$idgroup = $_GET['idgroup'];
$jenissoal = $_GET['jenissoal'];
$group = mysqli_query($mysqli,"select gs.namagroup, m.mapel from groupsoal as gs join mapel as m on gs.idmapel = m.idmapel where idgroup='$idgroup'");
$gs = mysqli_fetch_array($group);
if($jenissoal == 'singlechoice'){ 
    header("Content-type: application/vnd-ms-excel");
    header('Content-Disposition: attachment; filename=Data Soal Pilihan Ganda.xls');
?>
    <table border="1">
        <tr>
            <td >Soal</td>
            <td colspan="8"><?php  echo $gs['namagroup']; ?></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td colspan="8"><?php  echo $gs['mapel']; ?></td>
        </tr>
        <tr>
            <td>Jenis Soal</td>
            <td colspan="8">Pilihan Ganda</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Soal</td>
            <td>Pilihan a</td>
            <td>Pilihan b</td>
            <td>Pilihan c</td>
            <td>Pilihan d</td>
            <td>Pilihan e</td>
            <td>Jawaban benar</td>
            <td>Pembahasan</td>
        </tr>
    </table>
    <?php
        $no = 1;
        $tampil = mysqli_query($mysqli,"select * from soal where idgroup='$idgroup' and jenissoal='$jenissoal'");
        while ($hasil = mysqli_fetch_array($tampil)){
    ?>
    <table border="1">
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['soal']; ?></td>
        <td><?php echo $hasil['pilihana']; ?></td>
        <td><?php echo $hasil['pilihanb']; ?></td>
        <td><?php echo $hasil['pilihanc']; ?></td>
        <td><?php echo $hasil['pilihand']; ?></td>
        <td><?php echo $hasil['pilihane']; ?></td>
        <td><?php echo $hasil['pilihanbenar']; ?></td>
        <td><?php echo $hasil['pembahasan']; ?></td>
    </tr>
    </table>
    <?php } ?>
<?php }elseif($jenissoal == 'truefalse'){ 
    header("Content-type: application/vnd-ms-excel");
    header('Content-Disposition: attachment; filename=Data Soal Benar Salah.xls');    
?>
    <table border="1">
        <tr>
            <td >Soal</td>
            <td colspan="3"><?php  echo $gs['namagroup']; ?></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td colspan="3"><?php  echo $gs['mapel']; ?></td>
        </tr>
        <tr>
            <td>Jenis Soal</td>
            <td colspan="3">Benar Salah</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Soal</td>
            <td>Jawaban benar</td>
            <td>Pembahasan</td>
        </tr>
    </table>
    <?php
        $no = 1;
        $tampil = mysqli_query($mysqli,"select * from soal where idgroup='$idgroup' and jenissoal='$jenissoal'");
        while ($hasil = mysqli_fetch_array($tampil)){
    ?>
    <table border="1">
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['soal']; ?></td>
        <td><?php echo $hasil['pilihanbenar']; ?></td>
        <td><?php echo $hasil['pembahasan']; ?></td>
    </tr>
    </table>
    <?php } ?>
<?php }elseif($jenissoal == 'shortanswer'){ 
     header("Content-type: application/vnd-ms-excel");
     header('Content-Disposition: attachment; filename=Data Soal Isian Singkat.xls');   
?>
    <table border="1">
        <tr>
            <td >Soal</td>
            <td colspan="3"><?php  echo $gs['namagroup']; ?></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td colspan="3"><?php  echo $gs['mapel']; ?></td>
        </tr>
        <tr>
            <td>Jenis Soal</td>
            <td colspan="3">Isian Singkat</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Soal</td>
            <td>Jawaban benar</td>
            <td>Pembahasan</td>
        </tr>
    </table>
    <?php
        $no = 1;
        $tampil = mysqli_query($mysqli,"select * from soal where idgroup='$idgroup' and jenissoal='$jenissoal'");
        while ($hasil = mysqli_fetch_array($tampil)){
    ?>
    <table border="1">
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['soal']; ?></td>
        <td><?php echo $hasil['pilihanbenar']; ?></td>
        <td><?php echo $hasil['pembahasan']; ?></td>
    </tr>
    </table>
    <?php } ?>
<?php }elseif($jenissoal == 'multipleanswer'){ 
    header("Content-type: application/vnd-ms-excel");
    header('Content-Disposition: attachment; filename=Data Soal Multiple Answer.xls');
?>
    <table border="1">
        <tr>
            <td >Soal</td>
            <td colspan="8"><?php  echo $gs['namagroup']; ?></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td colspan="8"><?php  echo $gs['mapel']; ?></td>
        </tr>
        <tr>
            <td>Jenis Soal</td>
            <td colspan="8">Multiple Answer</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Soal</td>
            <td>Pilihan a</td>
            <td>Pilihan b</td>
            <td>Pilihan c</td>
            <td>Pilihan d</td>
            <td>Pilihan e</td>
            <td>Jawaban benar</td>
            <td>Pembahasan</td>
        </tr>
    </table>
    <?php
        $no = 1;
        $tampil = mysqli_query($mysqli,"select * from soal where idgroup='$idgroup' and jenissoal='$jenissoal'");
        while ($hasil = mysqli_fetch_array($tampil)){
    ?>
    <table border="1">
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['soal']; ?></td>
        <td><?php echo $hasil['pilihana']; ?></td>
        <td><?php echo $hasil['pilihanb']; ?></td>
        <td><?php echo $hasil['pilihanc']; ?></td>
        <td><?php echo $hasil['pilihand']; ?></td>
        <td><?php echo $hasil['pilihane']; ?></td>
        <td><?php echo $hasil['pilihanbenar']; ?></td>
        <td><?php echo $hasil['pembahasan']; ?></td>
    </tr>
    </table>
    <?php } ?>
<?php }elseif($jenissoal == 'sorting'){ 
    header("Content-type: application/vnd-ms-excel");
    header('Content-Disposition: attachment; filename=Data Soal Sorting.xls');
?>
    <table border="1">
        <tr>
            <td >Soal</td>
            <td colspan="8"><?php  echo $gs['namagroup']; ?></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td colspan="8"><?php  echo $gs['mapel']; ?></td>
        </tr>
        <tr>
            <td>Jenis Soal</td>
            <td colspan="8">Sorting</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Soal</td>
            <td>Pilihan a</td>
            <td>Pilihan b</td>
            <td>Pilihan c</td>
            <td>Pilihan d</td>
            <td>Pilihan e</td>
            <td>Jawaban benar</td>
            <td>Pembahasan</td>
        </tr>
    </table>
    <?php
        $no = 1;
        $tampil = mysqli_query($mysqli,"select * from soal where idgroup='$idgroup' and jenissoal='$jenissoal'");
        while ($hasil = mysqli_fetch_array($tampil)){
    ?>
    <table border="1">
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['soal']; ?></td>
        <td><?php echo $hasil['pilihana']; ?></td>
        <td><?php echo $hasil['pilihanb']; ?></td>
        <td><?php echo $hasil['pilihanc']; ?></td>
        <td><?php echo $hasil['pilihand']; ?></td>
        <td><?php echo $hasil['pilihane']; ?></td>
        <td><?php echo $hasil['pilihanbenar']; ?></td>
        <td><?php echo $hasil['pembahasan']; ?></td>
    </tr>
    </table>
    <?php } ?>
<?php } ?>