<?php
include "../koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Mapel.xls");

?>
<table border="1">
    <tr>
        <td>No</td>
        <td>Kode</td>
        <td>Mapel</td>
    </tr>
</table>
<?php
$no = 1;
$tampil = mysqli_query($mysqli, "select * from mapel");
while ($hasil = mysqli_fetch_array($tampil)) {
?>
    <table border="1">
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $hasil['kdmapel']; ?></td>
            <td><?php echo $hasil['mapel']; ?></td>
        </tr>
    </table>
<?php
}
?>