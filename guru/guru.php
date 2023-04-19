<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Data guru
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');">Tambah</a>
    <div class="modal fade" id="modal-user-settings" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title"></i>Tambah</h3>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="guru/prosestambah.php" method="post" >
                        <div class="form-group">
                            <label>NIP</label>
                            <div>
                                <input type="text" name="nip" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Nama guru</label>
                            <div >
                                <input type="text" name="namaguru" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenip Kelamin</label>
                            <div >
                                <select name="jk" class="form-control">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <label>Tempat/TGL Lahir</label>
                        <div class="form-group">
                            <div class="form-inline">
                                <input style="width:300px;" name="tempatlahir" type="text" class="form-control">
                                <input style="width:254px;" name="tgllahir" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div>
                                <textarea name="alamat" rows="2" class="form-control" value=""></textarea>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div >
                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah guru</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
    <button type="reset" class="btn btn-sm btn-warning">Import</button>
    <button type="reset" class="btn btn-sm btn-success">Excel</button>
    <button type="reset" class="btn btn-sm btn-danger">PDF</button>
    <br>
    <br>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped">
            <thead>
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama Guru</th>
                    <th class="text-center">Jenip Kelamin</th>
                    <th class="text-center">Tempat/TGL Lahir</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('koneksi.php');
                $tampil = mysqli_query($mysqli, "select * from guru");
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
                    <tr>
                        <td width="20px" class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['nip']; ?></td>
                        <td class="text-center"><?php echo $hasil['namaguru'];?></td>
                        <td class="text-center"><?php echo $hasil['jk'] == 'laki-laki' ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <td class="text-center"><?php echo $hasil['tempatlahir'].', '.date('d F Y', strtotime($hasil['tgllahir']));?></td>
                        <!--<td class="text-center"></td>-->
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings<?php echo $hasil['idguru'];?>').modal('show');"><i class="fa fa-edit"></i></a>

                            <a onclick="return confirm('apakah anda yakin ingin menghapus data? ');" href="guru/proseshapus.php?id=<?php echo $hasil['idguru']; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a

                        </td>
                    </tr>
                <div class="modal fade" id="modal-user-settings<?php echo $hasil['idguru'];?>" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title"></i>Edit guru</h3>
                            </div>
                            <!-- END Modal Header -->

                            <!-- Modal Body -->
                            <br>
                            <div class="modal-body">
                                <form action="guru/prosesedit.php" method="post" class="form-bordered">
                                    <input type="hidden" name="idguru" value="<?php echo $hasil['idguru']; ?>">
                                    <div class="form-group">
                                        <label>nip</label>
                                        <div>
                                            <input type="text" name="nip" value="<?php echo $hasil['nip']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Nama guru</label>
                                        <div >
                                            <input type="text" name="namaguru" value="<?php echo $hasil['namaguru']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenip Kelamin</label>
                                        <div >
                                            <select name="jk" class="form-control">
                                                <option <?php if($hasil['jk']=='laki-laki'){echo "selected"; } ?> value="laki-laki">Laki-laki</option>
                                                <option <?php if($hasil['jk']=='perempuan'){echo "selected"; } ?> value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label>Tempat/TGL Lahir</label>
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <input style="width:300px;" type="text" name="tempatlahir" value="<?php echo $hasil['tempatlahir']; ?>" class="form-control">
                                            <input style="width:254px;" type="date" name="tgllahir"    value="<?php echo $hasil['tgllahir']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <div>
                                            <textarea name="alamat" rows="2" class="form-control" value=""><?php echo $hasil['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div >
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary">Edit guru</button>
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



