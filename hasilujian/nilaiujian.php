<?php include ('koneksi.php'); ?>
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Nilai Ujian
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
<?php $idujian = $_POST['idujian'];
 $groupsoal = $_POST['groupsoal'];
$mapel = $_POST['mapel']; ?>
<form action="hasilujian/eksportexcel.php" method="post">
    <input type="hidden" name="idujian" value="<?php echo $idujian; ?>">
    <input type="hidden" name="groupsoal" value="<?php echo $groupsoal; ?>">
    <input type="hidden" name="mapel" value="<?php echo $mapel; ?>">
    <button class="btn btn-sm btn-success">Export Ke Excel</button>
</form>
    <br>
    <br>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Tgl Ujian</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                    <?php
                    $tampil = mysqli_query($mysqli, 
                    "select u.*, n.*, s.*, gs.namagroup, gs.idgroup, m.*
                    from nilai as n
                    inner join user as u
                    on u.iduser = n.iduser 
                    inner join setujian as s
                    on s.idujian = n.idujian
                    inner join groupsoal as gs
                    on gs.idgroup = s.idgroup
                    inner join gurumapel as gm
                    on gm.idgurumapel = gs.idgurumapel
                    inner join mapel as m
                    on m.idmapel = gm.idmapel
                    where n.idujian = '$idujian'
                    ");
                ?>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['namauser']; ?></td>
                        <td class="text-center"><?php echo $hasil['tgl']; ?></td>
                        <td class="text-center"><?php echo $hasil['mapel']; ?></td>
                        <td class="text-center"><?php echo $hasil['nilai'];?></td>
                <td class="text-center"><?php 
                if($hasil['nilai']>=60){ 
                    echo '<span class="label label-success">Lulus</span>' ;
                }else{
                    echo '<span class="label label-danger">Mengulang</span>';
                } ?></td>
                <td class="text-center">
                    <a onclick="return confirm('apakah anda yakin ingin menghapus data ? ');" href="hasilujian/proseshapus.php?iduser=<?php echo $hasil['iduser']; ?>&idnilai=<?php echo $hasil['idnilai']; ?>&idujian=<?php echo $hasil['idujian']; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a
                </td>n
                </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- END Datatables Content -->
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- END User Settings -->



