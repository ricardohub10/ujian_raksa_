<?php include ('koneksi.php'); ?>
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Data Ujian
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">

    <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');">Tambah Ujian</a>
    <div class="modal fade" id="modal-user-settings" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title"></i>Buat Ujian</h3>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="ujian/prosestambah.php" method="post" >
                        <div class="form-group">
                            <label>Group Soal</label>
                            <div>
                                <select id="example-chosen" name="idgroup" class="select-chosen" data-placeholder="Pilih Group Soal" style="width: 250px; display: none;" required>
                                    <?php
                                    
                                        $tampil = mysqli_query($mysqli,"select * from groupsoal where statusgrup='Y'");
                                        while($hasil = mysqli_fetch_array($tampil)){
                                    ?>
                                        <option value="<?php echo $hasil['idgroup']; ?>"><?php echo $hasil['namagroup']; ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Soal</label>
                            <input placeholder="Range Soal" type="number" name="rangesoal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Periode Soal</label>
                            <input placeholder="Periode Soal" type="date" name="periodeujian" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Waktu</label>
                            <input placeholder="waktu ujian" type="number" name="waktu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Token</label>
                            <input placeholder="kode ujian" type="text" name="token" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                            <!-- <select class="form-control" name="statusujian" required>
                                <option value="sudah">Has taken</option>
                                <option value="notyet">Tidak Aktif</option>
                            </select> -->
                        </div>
                        <div class="form-group form-actions">
                            <div >
                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Set Ujian</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Token</th>
                    <th class="text-center">Group Soal</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Periode Ujian</th>
                    <th class="text-center">Waktu</th>
                    <th class="text-center">Jumlah Soal</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($_SESSION['status'] == 'admin'){
                    $tampil = mysqli_query($mysqli, 
                    "select st.*, gs.*, gm.*, m.*
                    from setujian as st
                    inner join groupsoal as gs
                    on st.idgroup = gs.idgroup
                    inner join gurumapel as gm
                    on gm.idgurumapel = gs.idgurumapel
                    inner join mapel as m
                    on m.idmapel = gm.idmapel
                    ");
                }else if($_SESSION['status'] == 'guru'){
                    $tampil = mysqli_query($mysqli, 
                    "select st.*, gs.*, gm.*, m.*
                    from setujian as st
                    inner join groupsoal as gs
                    on st.idgroup = gs.idgroup
                    inner join gurumapel as gm
                    on gm.idgurumapel = gs.idgurumapel
                    inner join mapel as m
                    on m.idmapel = gm.idmapel
                    where st.user =".$_SESSION['iduser']);
                }
                
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['token']; ?></td>
                        <td class="text-center"><?php echo $hasil['namagroup'];?></td>
                        <td class="text-center"><?php echo $hasil['mapel']; ?></td>
                        <td class="text-center"><?php echo $hasil['periodeujian']; ?></td>
                        <td class="text-center"><?php echo $hasil['waktu'].' menit';?></td>
                        <td class="text-center">
                        <?php 
                         echo $hasil['rangesoal'];
                        ?> Soal</td>
                        <td class="text-center">
                        <?php if($hasil['status']=='aktif'){ echo '<span class="label label-success">Aktif</span>' ;} else { echo '<span class="label label-danger">Tidak Aktif</span>';} ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings<?php echo $hasil['idujian']; ?>').modal('show');"><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('apakah anda yakin ingin menghapus data ? ');" href="ujian/proseshapus.php?idujian=<?php echo $hasil['idujian']; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a
                        </td>
                    </tr>
                    <div class="modal fade" id="modal-user-settings<?php echo $hasil['idujian']; ?>" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <h3 class="modal-title"></i>Edit Grup Soal</h3>
                                </div>
                                <!-- END Modal Header -->

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <form action="ujian/prosesedit.php" method="post" >
                                    <input type="hidden" name="idujian" value="<?php echo $hasil['idujian']; ?>">
                                        <div class="form-group">
                                            <label>Group Soal</label>
                                            <div>
                                                <select id="example-chosen" name="idgroup" class="select-chosen" data-placeholder="Pilih Group Soal" style="width: 250px; display: none;">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                    <?php
                                                    $groupsoal = mysqli_query($mysqli, "select * from groupsoal");
                                                    while ($gs = mysqli_fetch_array($groupsoal)) {
                                                ?>
                                                <option <?php if($gs['idgroup']==$hasil['idgroup']){ echo "selected"; } ?> value="<?php echo $gs['idgroup']; ?>"><?php echo $gs['namagroup']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Soal</label>
                                            <input placeholder="Jumlah Soal yang Diujikan" type="number" value="<?php echo $hasil['rangesoal']?>" name="rangesoal" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu</label>
                                            <input placeholder="waktu ujian" type="number" value="<?php echo $hasil['waktu']?>" name="waktu" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Token</label>
                                            <input placeholder="kode ujian" type="text" value="<?php echo $hasil['token']; ?>" name="token" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option <?php if($hasil['status'] == 'aktif'){echo "selected"; } ?> value="aktif">Aktif</option>
                                                <option <?php if($hasil['status'] == 'tidak aktif'){echo "selected"; }?> value="tidak aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div >
                                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Set Ujian</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Modal Body -->
                            </div>
                        </div>
                    </div>
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



 