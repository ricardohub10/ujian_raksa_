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
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Group Soal</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Jumlah Peserta</th>
                    <th class="text-center">Status Ujian</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($_SESSION['status'] == 'admin'){
                    $tampil = mysqli_query($mysqli, "select su.*, gs.*, m.*
                    from setujian as su 
                    inner join groupsoal as gs
                    on gs.idgroup = su.idgroup

                    inner join gurumapel as gm
                    on gm.idgurumapel = gs.idgurumapel

                    inner join mapel as m
                    on m.idmapel = gm.idmapel");
                }elseif($_SESSION['status'] == 'guru'){
                    $tampil = mysqli_query($mysqli, 
                    "select su.*, gs.*, m.*
                    from setujian as su 
                    inner join groupsoal as gs
                    on gs.idgroup = su.idgroup

                    inner join gurumapel as gm
                    on gm.idgurumapel = gs.idgurumapel

                    inner join mapel as m
                    on m.idmapel = gm.idmapel
                    where su.user = '$_SESSION[iduser]'");
                }
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['namagroup'];?></td>
                        <td class="text-center"><?php echo $hasil['mapel'];?></td>
                        <td class="text-center"><?php 
                        
                        $j = mysqli_query($mysqli, "select * from nilai where idujian = '$hasil[idujian]'");
                        $jumlah = mysqli_num_rows($j);
                        echo $jumlah;
                         ?></td>
                         <td class="text-center"><?php if($hasil['status']=='aktif'){ echo '<span class="label label-success">Aktif</span>' ;} else { echo '<span class="label label-danger">Tidak Aktif</span>';} ?></td>
                        <!--<td class="text-center"></td>-->
                        <td class="text-center">
                            <form action="index.php?nilaiujian" method="post">
                                <input type="hidden" name="idujian" value="<?php echo $hasil['idujian']; ?>">
                                <input type="hidden" name="groupsoal" value="<?php echo $hasil['namagroup']; ?>">
                                <input type="hidden" name="mapel" value="<?php echo $hasil['mapel']; ?>">
                                <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat Nilai</a></button>
                            </form>
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



