<?php include ('koneksi.php'); 
$d = mysqli_query($mysqli,"select * from tahunajaran where status='Y'");
$data = mysqli_fetch_array($d);
?> 
<!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Data Guru Mapel <?php echo $data['tahun'];?>
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <button type="submit" class="btn btn-sm btn-info" data-placement="bottom" title="Tambah Soal" onclick="$('#modal-user-settings').modal('show');">Tambah</button>
        <div class="modal fade" id="modal-user-settings" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title"></i>Tambah Guru Mapel</h3>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="gurumapel/prosestambah.php" method="post" >
                        <input type="hidden" name="idtahun" value="<?php echo $data['idtahun']; ?>">
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <div>
                                <select id="example-chosen" name="iduser" class="select-chosen" data-placeholder="Pilih Guru" style="width: 250px; display: none;">
                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                    <?php
                                        $g = mysqli_query($mysqli,'select * from user where status="guru"');
                                        while($guru = mysqli_fetch_array($g)){
                                    ?>
                                        <option value="<?php echo $guru['iduser']; ?>"><?php echo $guru['namauser']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mapel</label>
                            <div>
                                <select id="example-chosen" name="idmapel" class="select-chosen" data-placeholder="Pilih Mapel" style="width: 250px; display: none;">
                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                    <?php
                                        $m = mysqli_query($mysqli,'select * from mapel');
                                        while($mapel = mysqli_fetch_array($m)){
                                    ?>
                                        <option value="<?php echo $mapel['idmapel']; ?>"><?php echo $mapel['mapel']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div >
                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Guru Mapel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
        <button type="reset" class="btn btn-sm btn-success" title="Import Soal" onclick="$('#modal-user-import').modal('show');">Import dari Excel</button>
        <div class="modal fade" id="modal-user-import" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title"></i>Import Mapel</h3>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="mapel/import.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Import Mapel</label>
                            <div class="col-md-9">
                                <input type="file" name="import"> 
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" name="upload" value="import" class="btn btn-sm btn-primary">Import Data</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <a href="mapel/eksportexcel.php" title="Export Soal" class="btn btn-sm btn-success">Export ke Excel</a>
        <br>
        <br>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th width="20" class="text-center"></th>
                        <th class="text-center">Guru Mapel</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Mapel</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tampil = mysqli_query($mysqli, 
                    "select gm.*, u.*, m.mapel, ta.tahun
                    from gurumapel as gm
                    inner join user as u
                    inner join mapel as m
                    inner join tahunajaran as ta
                    on gm.iduser = u.iduser and
                    gm.idmapel = m.idmapel and
                    gm.idtahun = ta.idtahun
                    where ta.status = 'Y'
                    ");
                    $no = 1;
                    while ($hasil = mysqli_fetch_array($tampil)) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td width="20" class="text-center"></td>
                            <td class="text-center"><?php echo $hasil['namauser']; ?></td>
                            <td class="text-center"><?php echo $hasil['jk']; ?></td>
                            <td class="text-center"><?php echo $hasil['mapel']; ?></td>
                            <!--<td class="text-center"></td>-->
                            <td class="text-center">
                            <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings<?php echo $hasil['idgurumapel']; ?>').modal('show');"><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('apakah anda yakin ingin menghapus data ? ');" href="gurumapel/proseshapus.php?idgurumapel=<?php echo $hasil['idgurumapel']; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a
                        </td>
                    </tr>
                    <div class="modal fade" id="modal-user-settings<?php echo $hasil['idgurumapel']; ?>" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <h3 class="modal-title"></i>Edit Guru Mapel</h3>
                                </div>
                                <!-- END Modal Header -->

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <form action="gurumapel/prosesedit.php" method="post" >
                                    <input type="hidden" name="idgurumapel" value="<?php echo $hasil['idgurumapel'];?>">
                                        <div class="form-group">
                                            <label>Nama Guru</label>
                                            <div>
                                                <select id="example-chosen" name="iduser" class="select-chosen" data-placeholder="Pilih Guru" style="width: 250px; display: none;">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                    <?php
                                                        $g = mysqli_query($mysqli,'select * from user where status="guru"');
                                                        while($guru = mysqli_fetch_array($g)){
                                                    ?>
                                                        <option <?php if($guru['iduser']==$hasil['iduser']){ echo "selected"; } ?> value="<?php echo $guru['iduser']; ?>"><?php echo $guru['namauser']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mapel</label>
                                            <div>
                                                <select id="example-chosen" name="idmapel" class="select-chosen" data-placeholder="Pilih Mapel" style="width: 250px; display: none;">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                    <?php
                                                        $m = mysqli_query($mysqli,'select * from mapel');
                                                        while($mapel = mysqli_fetch_array($m)){
                                                    ?>
                                                        <option <?php if($mapel['idmapel']==$hasil['idmapel']){ echo "selected"; } ?> value="<?php echo $mapel['idmapel']; ?>"><?php echo $mapel['mapel']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div >
                                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Guru Mapel</button>
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

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="<?php //echo base_url();    ?>assets/js/vendor/jquery.min.js"></script>
    <script src="<?php //echo base_url();    ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php //echo base_url();    ?>assets/js/plugins.js"></script>


    <!-- Load and execute javascript code used only in tdis page -->
    <script src="<?php //echo base_url();    ?>assets/js/pages/tablesDatatables.js"></script>
    <script>$(function () {
    TablesDatatables.init();
});</script>