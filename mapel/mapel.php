
<!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Data Mapel
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
                        <h3 class="modal-title"></i>Tambah Mapel</h3>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="mapel/prosestambah.php" method="post" class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-hf-email">Kode Mapel</label>
                                <div class="col-md-9">
                                    <input type="text" name="kodemapel" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-hf-email">Mapel</label>
                                <div class="col-md-9">
                                    <input type="text" name="mapel" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Mapel</button>
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
                        <th class="text-center"></th>
                        <th class="text-center">Kode mapel</th>
                        <th class="text-center">Mapel</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include ('koneksi.php');
                    $tampil = mysqli_query($mysqli, "select * from mapel");
                    $no = 1;
                    while ($hasil = mysqli_fetch_array($tampil)) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <th class="text-center"></th>
                            <td class="text-center"><?php echo $hasil['kdmapel']; ?></td>
                            <td class="text-center"><?php echo $hasil['mapel']; ?></td>
                            <!--<td class="text-center"></td>-->
                            <td class="text-center">
                                <a name="submit" onclick="$('#modal-user-settings<?php echo $hasil['idmapel']; ?>').modal('show');" title="Edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <div class="modal fade" id="modal-user-settings<?php echo $hasil['idmapel']; ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                <h3 class="modal-title"></i>Edit Mapel</h3>
                                            </div>
                                            <!-- END Modal Header -->

                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <form action="mapel/prosesedit.php" method="post" class="form-horizontal form-bordered">
                                                    <input type="hidden" name="idmapel" value="<?php echo $hasil['idmapel'];?>">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="example-hf-email">Kode Mapel</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kodemapel" value="<?php echo $hasil['kdmapel']; ?>" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="example-hf-email">Mapel</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="mapel" value="<?php echo $hasil['mapel']; ?>" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-actions">
                                                        <div class="col-md-9 col-md-offset-3">
                                                            <button type="submit" name="submit" class="btn btn-sm btn-primary">Edit Mapel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END Modal Body -->
                                        </div>
                                    </div>
                                </div>
                                <a name="submit" onclick="return confirm('apakah anda yakin ingin menghapus data? ');" href="mapel/proseshapus.php?idmapel=<?php echo $hasil['idmapel']; ?>"  title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="<?php //echo base_url();    ?>assets/js/vendor/jquery.min.js"></script>
    <script src="<?php //echo base_url();    ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php //echo base_url();    ?>assets/js/plugins.js"></script>


    <!-- Load and execute javascript code used only in tdis page -->
    <script src="<?php //echo base_url();    ?>assets/js/pages/tablesDatatables.js"></script>
    <script>$(function () {
    TablesDatatables.init();
});</script>