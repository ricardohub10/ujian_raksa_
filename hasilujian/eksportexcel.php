<?php
include "../koneksi.php";

$idujian = $_POST['idujian'];
$groupsoal = $_POST['groupsoal'];
$mapel = $_POST['mapel']; 
?>

<table border="1">
<tr>
<td >Group Soal</td>
<td colspan="8"><?php  echo $groupsoal; ?></td>
</tr>
<tr>
<td>Mapel</td>
<td colspan="8"><?php  echo $mapel; ?></td>
</tr>
<tr>
<td>Nomor</td>
<td colspan="2">Nama</td>
<td>Tanggal Ujian</td>
<td>Mapel</td>
<td>Nilai</td>
<td colspan="3">Keterangan</td>
</tr>
</table>
<table border="1">
<?php 
$tampil = mysqli_query($mysqli,"select n.*, gs.namagroup, u.namauser, su.idujian, m.mapel
from nilai as n
inner join groupsoal as gs
inner JOIN user as u
inner JOIN setujian as su
inner join mapel as m
on n.iduser = u.iduser and
n.idujian = su.idujian and
gs.idgroup = su.idgroup and
gs.idmapel = m.idmapel
where n.idujian = '$idujian'");
$no = 1;
while($hasil = mysqli_fetch_array($tampil)){
    header("Content-type: application/vnd-ms-excel");
    header('Content-Disposition: attachment; filename=Data Rekap Nilai.xls');
    ?>
    <tr>
    <td><?php echo $no++; ?></td>
    <td colspan="2"><?php echo $hasil['namauser']; ?></td>
    <td><?php echo $hasil['tgl']; ?></td>
    <td><?php echo $hasil['mapel']; ?></td>
    <td><?php echo $hasil['nilai']; ?></td>
    <td colspan="3" class="text-center"><?php 
    if($hasil['nilai']>=85){ 
        echo '<span class="label label-success">Sangat Baik</span>' ;
    }elseif($hasil['nilai']>=70){ 
        echo '<span class="label label-success">Baik</span>';
    }elseif($hasil['nilai']>=60){
        echo '<span class="label label-warning">Cukup</span>';
    }else{
        echo '<span class="label label-danger">Mengulang</span>';
    } ?></td>
    </tr>
    <?php } ?>
    </table>